<?php

namespace App\Http\Controllers;

use App\Enums\TemplateType;
use App\Models\Page;
use App\Models\Settings;
use App\Models\Slider;
use App\Models\Vefatlist;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{

    public function __construct(
        public $mainNavigation = null,
        public $mainNavigation1 = null,
        public $mainNavigation2 = null,
        public $footernNavigation = null,
        public $footernGeneralNavigation = null,
        public $settings = null,
        public $wheather = null
    ) {
        $this->mainNavigation1 = Page::with('sub')->select('id', 'lang', 'title', 'url')
            ->where([
                'parent_id' => null,
                // 'lang' => App::getLocale(),
            ])
            // ->where('template_type', 'page')
            ->whereJsonContains('link_view', '1')
            ->limit(2)
            ->where('is_publish', true)
            ->orderBy('ordinal', 'asc')
            ->get()->toArray();



        $this->mainNavigation2 = Page::with('sub')->select('id', 'lang', 'title', 'url')
            ->where([
                'parent_id' => null,
                // 'lang' => App::getLocale(),
            ])
            // ->where('template_type', 'page')
            ->whereJsonContains('link_view', '1')
            ->where('is_publish', true)
            ->orderBy('ordinal', 'asc')
            ->offset(2)
            ->limit(3)
            ->get()->toArray();

        // dd($this->mainNavigation1, $this->mainNavigation2);

        $this->footernNavigation = Page::with('sub')->select('id', 'lang', 'title', 'url')
            ->where([
                'parent_id' => null,
                // 'lang' => App::getLocale(),
            ])
            ->where('template_type', 'page')
            ->whereJsonContains('link_view', '2')
            ->where('is_publish', true)
            ->orderBy('ordinal', 'asc')
            ->get()->toArray();

        $this->footernGeneralNavigation = Page::with('sub')->select('id', 'lang', 'title', 'url')
            ->where([
                'parent_id' => null,
                // 'lang' => App::getLocale(),
            ])
            ->whereJsonContains('link_view', '3')
            ->where('is_publish', true)
            ->orderBy('ordinal', 'asc')
            ->get()->toArray();

        $this->settings = Settings::all()->mapWithKeys(function ($item) {
            return [$item['key'] => $item->value];
        });

        try {
            $this->wheather = json_decode(Storage::disk('local')->get('weather-api.txt'), true)['current'];
        } catch (Exception $e) {
            $this->wheather = ['icon' => ''];
        }

        // dd($this->wheather);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $lang = 'tr')
    {
        $mainNavigation = $this->mainNavigation;
        $mainNavigation1 = $this->mainNavigation1;
        $mainNavigation2 = $this->mainNavigation2;
        $footernNavigation = $this->footernNavigation;
        $footernGeneralNavigation = $this->footernGeneralNavigation;
        $settings = $this->settings->toArray();

        $sliders = Slider::where('is_publish', true)->orderBy('position')->take(5)->get();

        $allProjects = Page::whereIn('template_type', [
            TemplateType::ProjectFinished->value,
            TemplateType::ProjectOnGoing->value,
            TemplateType::ProjectPlanned->value,
            TemplateType::Announcement->value,
            TemplateType::News->value,
            TemplateType::Page->value,
            // TemplateType::Death->value,
        ])->whereNot(function ($query) {
            $query->whereJsonContains('link_view', '4');
        })
            ->orderBy('display_date', 'desc')->take(100)->get();

        // Projeleri kategorilerine göre gruplandır
        $projectsByCategory = $allProjects->groupBy('template_type');

        // Kategorilere göre gruplandırılmış projeleri dizi olarak almak
        $projectsArray = [
            'deaths' => Vefatlist::orderBy('vefatTarihi', 'desc')->take(5)->get(),
            'projectFinished' => $projectsByCategory->get(TemplateType::ProjectFinished->value, collect())->all(),
            'projectOnGoing' => $projectsByCategory->get(TemplateType::ProjectOnGoing->value, collect())->all(),
            'projectPlanned' => $projectsByCategory->get(TemplateType::ProjectPlanned->value, collect())->all(),
            'announcements' => $projectsByCategory->get(TemplateType::Announcement->value, collect())->all(),
            // 'deaths' => $projectsByCategory->get(TemplateType::Death->value, collect())->all(),
            'news' => $projectsByCategory->get(TemplateType::News->value, collect())->all(),
            // 'news' => Page::where('is_publish', true)->whereIn('template_type', [
            //     TemplateType::News->value
            // ])->orderBy('display_date', 'desc')->take(6)->get(),


            'bids' => Page::where('is_publish', true)->whereIn('template_type', [
                TemplateType::Bid->value
            ])->orderBy('display_date', 'desc')->take(6)->get(),

            'activityBoxes' => Page::where('is_publish', true)
                ->whereIn('template_type', [TemplateType::Page->value])
                ->whereJsonContains('box_view', '1')->orderBy('display_date', 'desc')->take(6)->get(),

            'kulturelMiras' => Page::where('is_publish', true)
                ->whereIn('template_type', [TemplateType::Page->value])
                ->whereJsonContains('box_view', 'kulturelMiras')->orderBy('display_date', 'desc')->take(6)->get(),

            'explore' => Page::where('is_publish', true)
                ->whereJsonContains('box_view', 'kesfet')->orderBy('display_date', 'desc')->take(6)->get(),

            'comingEvents' => Page::where('is_publish', true)->whereIn('template_type', [
                TemplateType::Event->value
            ])
                // ->where('display_date', '>=', Carbon::today())
                ->orderBy('display_date', 'desc')
                ->take(6)->get(),

            'stories' => Page::where('is_publish', true)
                ->whereNull('parent_id')
                ->whereJsonContains('box_view', '2')
                ->with('subStory')
                ->orderBy('display_date', 'desc')
                // ->toSql()
                ->get()
                // ->toArray()
                ->map(function ($story) {
                    return [
                        'id' => $story->title,
                        'name' => $story->title,
                        'photo' => $story->cover,
                        'time' => $story->display_date_original,
                        'linkText' => $story->title,
                        'items' => $story['subStory'],
                    ];
                }),
        ];

        // return response()->json($projectsArray['news']);

        return view('layouts.home', compact(
            'settings',
            'mainNavigation',
            'mainNavigation1',
            'mainNavigation2',
            'footernNavigation',
            'footernGeneralNavigation',
            'sliders',
            'projectsArray',
        ), [
            'wheather' => $this->wheather,
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show($lang, $params = null)
    {
        $settings = $this->settings->toArray();
        $paramsArray = explode('/', $params);
        if (count($paramsArray) > 5) abort(403);
        $url = end($paramsArray);

        $page = Page::where('lang', $lang)
            ->where('url', $url)
            ->firstOrFail();


        $modules = [];
        if (in_array('vefatlist', $page['widgets'] ?? []) > 0) {
            // return response()->json($page['widgets']);
            $modules['vefatlist'] = Vefatlist::orderBy('vefatTarihi', 'desc')->paginate(10)->toArray();
        }


        $mainNavigation = $this->mainNavigation;
        $mainNavigation1 = $this->mainNavigation1;
        $mainNavigation2 = $this->mainNavigation2;
        $footernNavigation = $this->footernNavigation;
        $footernGeneralNavigation = $this->footernGeneralNavigation;


        $view = $this->viewGenerator($page->template_type->view());

        $my_order = ['display_date', 'desc'];

        if ($view == "page.personel") {
            $my_order = ['ordinal', 'asc'];
        }

        $subPages[] = ['data' => []];
        $subPages = Page::where('parent_id', $page['id'])
            ->whereNot('id', $page['id'])
            ->where('is_publish', true)
            ->orderBy($my_order[0], $my_order[1])
            ->with('media')
            ->paginate(12)
            ->toArray();

        if (count($subPages['data']) === 0) {
            $subPages = Page::where('parent_id', $page['parent_id'])
                ->where('is_publish', true)
                ->where('template_type', $page['template_type'])
                ->whereNot('id', $page['id'])
                ->orderBy($my_order[0], $my_order[1])
                ->with('media')
                ->paginate(12)
                ->toArray();
        }

        // dd($subPages['data']);
        /**
         * 
         * 
         * @TODO: İçerikler için tasarımlar oluşturulacak
         * @TODO: Anasayfa tasrımına başlanacak
         * @TODO: İletişim formu ve diğer formlar için altyapı hazırlanacak
         * 
         * 
         */
        // var_dump($view);
        // var_dump(App::getLocale());

        $cover = $page->getMedia("cover")[0] ?? '';
        $banner = $page->getMedia("banner")[0] ?? '';
        $box = $page->getMedia("box")[0] ?? '';
        $galleries = $page->getMedia("gallery") ?? '';
        $files = $page->getMedia("files") ?? '';

        // return view($view, [
        //     'settings' => $settings,
        //     'page' => $page,
        //     'subPages' => $subPages,
        //     'mainNavigation' => $mainNavigation,
        //     'footernNavigation' => $footernNavigation,
        //     'footernGeneralNavigation' => $footernGeneralNavigation,
        //     'cover' => $cover,
        //     'banner' => $banner,
        //     'box' => $box,
        //     'galleries' => $galleries,
        //     'files' => $files,
        //     'weather' => $this->weather,

        // ]);

        // dd($page->toArray());

        return view(
            $view,
            compact(
                'settings',
                'subPages',
                'mainNavigation',
                'mainNavigation1',
                'mainNavigation2',
                'footernNavigation',
                'footernGeneralNavigation',
                'cover',
                'banner',
                'box',
                'galleries',
                'files',
            ),
            [
                'wheather' => $this->wheather,
                'page' => $page,
                'modules' => $modules
            ]
        );

        // return response()->json($page);
    }

    function viewGenerator(String $view): String
    {

        if (!view()->exists($view)) {
            return 'page.page';
        }
        // if (env('APP_DEBUG')) echo '<div class="position-absolute top-0 start-0" style="z-index: 999;">' . ($view) . "</div>";
        return $view;
    }
}
