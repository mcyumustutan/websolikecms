<?php

namespace App\Http\Controllers;

use App\Enums\TemplateType;
use App\Models\Page;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{

    public function __construct(
        public $mainNavigation = null,
        public $footernNavigation = null,
        public $footernGeneralNavigation = null
    ) {
        $this->mainNavigation = Page::select('id', 'lang', 'title', 'url')
            ->where([
                'parent_id' => null,
                'lang' => App::getLocale(),
            ])
            // ->where('template_type', 'page')
            ->whereJsonContains('link_view', '1')
            ->get()->toArray();

        $this->footernNavigation = Page::select('id', 'lang', 'title', 'url')
            ->where([
                'parent_id' => null,
                'lang' => App::getLocale(),
            ])
            ->where('template_type', 'page')
            ->whereJsonContains('link_view', '2')
            ->get()->toArray();

        $this->footernGeneralNavigation = Page::select('id', 'lang', 'title', 'url')
            ->where([
                'parent_id' => null,
                'lang' => App::getLocale(),
            ])
            ->where('template_type', 'page')
            ->whereJsonContains('link_view', '3')
            ->get()->toArray();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $lang = 'tr')
    {
        $mainNavigation = $this->mainNavigation;
        $footernNavigation = $this->footernNavigation;
        $footernGeneralNavigation = $this->footernGeneralNavigation;

        $sliders = Slider::orderBy('position')->take(1)->get();
        $duyurular = Page::where('template_type', 'announcement')
            ->whereNot(function ($query) {
                $query->whereJsonContains('link_view', '4');
            })
            ->orderBy('created_at', 'desc')->take(5)->get();

        $ihaleler = Page::where('template_type', 'bid')->get();

        $explore = Page::whereJsonContains('link_view', '50')->get();
        

        $allProjects = Page::whereIn('template_type', [
            TemplateType::ProjectFinished->value,
            TemplateType::ProjectOnGoing->value,
            TemplateType::ProjectPlanned->value,
            TemplateType::Announcement->value,
            TemplateType::Page->value,
        ])->whereNot(function ($query) {
            $query->whereJsonContains('link_view', '4');
        })
            ->orderBy('created_at', 'desc')->take(100)->get();

        // Projeleri kategorilerine göre gruplandır
        $projectsByCategory = $allProjects->groupBy('template_type');

        // Kategorilere göre gruplandırılmış projeleri dizi olarak almak
        $projectsArray = [
            'projectFinished' => $projectsByCategory->get(TemplateType::ProjectFinished->value, collect())->all(),
            'projectOnGoing' => $projectsByCategory->get(TemplateType::ProjectOnGoing->value, collect())->all(),
            'projectPlanned' => $projectsByCategory->get(TemplateType::ProjectPlanned->value, collect())->all(),
            'announcements' => $projectsByCategory->get(TemplateType::Announcement->value, collect())->all(),
            'bids' => $projectsByCategory->get(TemplateType::Bid->value, collect())->all(),
        ];

        // return response()->json(TemplateType::Page->value);
        // return response()->json($projectsArray['announcements']);

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
            'mainNavigation',
            'footernNavigation',
            'footernGeneralNavigation',
            'sliders',
            'duyurular',
            'ihaleler',
            'projectsArray',
            'explore',
        ));
    }

    /**
     * Display the specified resource.
     */
    public function show($lang, $params = null)
    {
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
            ->with('media')
            ->paginate(8)
            ->toArray();

        if (count($subPages['data']) === 0) {
            $subPages = Page::where('parent_id', $page['parent_id'])
                ->whereNot('id', $page['id'])
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
