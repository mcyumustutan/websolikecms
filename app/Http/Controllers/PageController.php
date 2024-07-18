<?php

namespace App\Http\Controllers;

use App\Enums\TemplateType;
use App\Models\Page;
use App\Models\Settings;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{

    public function __construct(
        public $mainNavigation = null,
        public $footernNavigation = null,
        public $footernGeneralNavigation = null,
        public $settings = null
    ) {
        $this->mainNavigation = Page::select('id', 'lang', 'title', 'url')
            ->where([
                'parent_id' => null,
                'lang' => App::getLocale(),
            ])
            // ->where('template_type', 'page')
            ->whereJsonContains('link_view', '1')
            ->orderBy('ordinal', 'asc')
            ->get()->toArray();

        $this->footernNavigation = Page::select('id', 'lang', 'title', 'url')
            ->where([
                'parent_id' => null,
                'lang' => App::getLocale(),
            ])
            ->where('template_type', 'page')
            ->whereJsonContains('link_view', '2')
            ->orderBy('ordinal', 'asc')
            ->get()->toArray();

        $this->footernGeneralNavigation = Page::select('id', 'lang', 'title', 'url')
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
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $lang = 'tr')
    {
        $mainNavigation = $this->mainNavigation;
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
            TemplateType::Story->value,
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

            'news' => Page::where('is_publish', true)->whereIn('template_type', [
                TemplateType::News->value
            ])->orderBy('display_date', 'desc')->take(6)->get(),

            'bids' => Page::where('is_publish', true)->whereIn('template_type', [
                TemplateType::Bid->value
            ])->orderBy('display_date', 'desc')->take(6)->get(),

            'activityBoxes' => Page::where('is_publish', true)->whereIn('template_type', [
                TemplateType::Page->value
            ])->whereJsonContains('box_view', '1')->orderBy('display_date', 'desc')->take(6)->get(),

            'stories' => Page::where('is_publish', true)->whereIn('template_type', [
                TemplateType::Story->value
            ])
                ->whereNull('parent_id')
                ->with('sub')
                ->orderBy('display_date', 'desc')
                ->take(6)->get()
                ->map(function ($story) {
                    return [
                        'id' => $story->title,
                        'name' => $story->title,
                        'photo' => $story->cover,
                        'time' => $story->display_date_original,
                        'linkText' => $story->title,
                        'items' => $story->sub,
                    ];
                }),
        ];

        // return response()->json(TemplateType::Page->value);
        // return response()->json($projectsArray['stories']);

        // $locale = $request->route('lang');
        // dd($locale);

        /**
         * İhaleleri getir
         * Duyuruları getir
         * Haberleri Getir
         * 
         * Projeleri getir
         */


        return view('layouts.home', compact(
            'settings',
            'mainNavigation',
            'footernNavigation',
            'footernGeneralNavigation',
            'sliders',
            'explore',
            'projectsArray',
        ));
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

        // dd($page->toArray());


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


        return view($view, compact(
            'settings',
            'page',
            'subPages',
            'mainNavigation',
            'footernNavigation',
            'footernGeneralNavigation',
            'cover',
            'banner',
            'box',
            'galleries',
            'files',
        ));

        // return response()->json($page);
    }

    function viewGenerator(String $view): String
    {

        if (!view()->exists($view)) {
            return 'page.page';
        }
        if (env('APP_DEBUG')) print_r($view);
        return $view;
    }
}
