<?php

namespace App\Http\Controllers;

use App\Enums\TemplateType;
use App\Models\Page;
use App\Models\Settings;
use App\Models\Slider;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

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
        $this->mainNavigation = Page::with('sub')->select('id', 'lang', 'title', 'url')
            ->where([
                'parent_id' => null,
                'lang' => App::getLocale(),
            ])
            // ->where('template_type', 'page')
            ->whereJsonContains('link_view', '1')
            ->orderBy('ordinal', 'asc')
            ->get()->toArray();

        $this->mainNavigation1 = Page::with('sub')->select('id', 'lang', 'title', 'url')
            ->where([
                'parent_id' => null,
                'lang' => App::getLocale(),
            ])
            // ->where('template_type', 'page')
            ->whereJsonContains('link_view', '1')
            ->limit(2)
            ->orderBy('ordinal', 'asc')
            ->get()->toArray();



        $this->mainNavigation2 = Page::with('sub')->select('id', 'lang', 'title', 'url')
            ->where([
                'parent_id' => null,
                'lang' => App::getLocale(),
            ])
            // ->where('template_type', 'page')
            ->whereJsonContains('link_view', '1')
            ->orderBy('ordinal', 'asc')
            ->offset(2)
            ->limit(3)
            ->get()->toArray();

        // dd($this->mainNavigation1, $this->mainNavigation2);

        $this->footernNavigation = Page::with('sub')->select('id', 'lang', 'title', 'url')
            ->where([
                'parent_id' => null,
                'lang' => App::getLocale(),
            ])
            ->where('template_type', 'page')
            ->whereJsonContains('link_view', '2')
            ->orderBy('ordinal', 'asc')
            ->get()->toArray();

        $this->footernGeneralNavigation = Page::with('sub')->select('id', 'lang', 'title', 'url')
            ->where([
                'parent_id' => null,
                'lang' => App::getLocale(),
            ])
            ->whereJsonContains('link_view', '3')
            ->orderBy('ordinal', 'asc')
            ->get()->toArray();

        $this->settings = Settings::all()->mapWithKeys(function ($item) {
            return [$item['key'] => $item->value];
        });

        $cacheKey = 'weather_of_nevsehir';
        $wheatherBody = ['current'];
        $wheatherBody = ['icon'];
        // Cache::forget($cacheKey);
        $this->wheather = Cache::remember($cacheKey, 3600, function () use ($wheatherBody) {
            try {
                $wheather = Http::get("https://forecast7.com/tr/38d6434d83/goreme/?format=json")->body();
                $wheatherBody = collect(json_decode($wheather, true));
            } catch (Exception $e) {
                $wheatherBody['current'] = [
                    'icon' => '',
                    'temp' => '',
                ];
            }
            return $wheatherBody['current'];
        });

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

        $sliders = Slider::where('is_publish', true)->orderBy('position')->take(1)->get();

        $explore = Page::where('is_publish', true)->whereJsonContains('link_view', '50')->get();


        $allProjects = Page::whereIn('template_type', [
            TemplateType::ProjectFinished->value,
            TemplateType::ProjectOnGoing->value,
            TemplateType::ProjectPlanned->value,
            TemplateType::Announcement->value,
            TemplateType::Page->value,
            TemplateType::Death->value,
        ])->whereNot(function ($query) {
            $query->whereJsonContains('link_view', '4');
        })
            ->orderBy('display_date', 'desc')->take(100)->get();

        // Projeleri kategorilerine göre gruplandır
        $projectsByCategory = $allProjects->groupBy('template_type');

        // Kategorilere göre gruplandırılmış projeleri dizi olarak almak
        $projectsArray = [
            'projectFinished' => $projectsByCategory->get(TemplateType::ProjectFinished->value, collect())->all(),
            'projectOnGoing' => $projectsByCategory->get(TemplateType::ProjectOnGoing->value, collect())->all(),
            'projectPlanned' => $projectsByCategory->get(TemplateType::ProjectPlanned->value, collect())->all(),
            'announcements' => $projectsByCategory->get(TemplateType::Announcement->value, collect())->all(),
            'deaths' => $projectsByCategory->get(TemplateType::Death->value, collect())->all(),

            'news' => Page::where('is_publish', true)->whereIn('template_type', [
                TemplateType::News->value
            ])->orderBy('display_date', 'desc')->take(6)->get(),

            'bids' => Page::where('is_publish', true)->whereIn('template_type', [
                TemplateType::Bid->value
            ])->orderBy('display_date', 'desc')->take(6)->get(),

            'activityBoxes' => Page::where('is_publish', true)
                ->whereIn('template_type', [TemplateType::Page->value])
                ->whereJsonContains('box_view', '1')->orderBy('display_date', 'desc')->take(6)->get(),

            'comingEvents' => Page::where('is_publish', true)->whereIn('template_type', [
                TemplateType::Event->value
            ])
                // ->where('display_date', '>=', Carbon::today())
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

        // return response()->json(count($projectsArray['activityBoxes']));

        return view('layouts.home', compact(
            'settings',
            'mainNavigation',
            'mainNavigation1',
            'mainNavigation2',
            'footernNavigation',
            'footernGeneralNavigation',
            'sliders',
            'explore',
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
        $url = end($paramsArray);

        $page = Page::where('lang', $lang)
            ->where('url', $url)
            ->firstOrFail();


        // return response()->json($page['id']);
        $subPages[] = ['data' => []];
        $subPages = Page::where('parent_id', $page['id'])
            ->whereNot('id', $page['id'])
            ->orderBy('display_date', 'desc')
            ->with('media')
            ->paginate(8)
            ->toArray();

        if (count($subPages['data']) === 0) {
            $subPages = Page::where('parent_id', $page['parent_id'])
                ->where('template_type', $page['template_type'])
                ->whereNot('id', $page['id'])
                ->orderBy('display_date', 'desc')
                ->with('media')
                ->paginate(8)
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
        $mainNavigation = $this->mainNavigation;
        $mainNavigation1 = $this->mainNavigation1;
        $mainNavigation2 = $this->mainNavigation2;
        $footernNavigation = $this->footernNavigation;
        $footernGeneralNavigation = $this->footernGeneralNavigation;


        $view = $this->viewGenerator($page->template_type->view());
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
            ]
        );

        // return response()->json($page);
    }

    function viewGenerator(String $view): String
    {

        if (!view()->exists($view)) {
            return 'page.page';
        }
        if (env('APP_DEBUG')) echo '<div class="position-absolute top-0 start-0" style="z-index: 999;">' . ($view) . "</div>";
        return $view;
    }
}
