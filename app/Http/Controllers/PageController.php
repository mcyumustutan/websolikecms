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
                'lang' => App::getLocale(),
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
                'lang' => App::getLocale(),
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
                'lang' => App::getLocale(),
            ])
            ->where('template_type', 'page')
            ->whereJsonContains('link_view', '2')
            ->where('is_publish', true)
            ->orderBy('ordinal', 'asc')
            ->get()->toArray();

        $this->footernGeneralNavigation = Page::with('sub')->select('id', 'lang', 'title', 'url')
            ->where([
                'parent_id' => null,
                'lang' => App::getLocale(),
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
        $settings = $this->settings->toArray();

        $sliders = Slider::where('is_publish', true)
            ->orderBy('position')
            ->take(5)
            ->get();

        $allProjects = Page::whereIn('template_type', [
            TemplateType::ProjectFinished->value,
            TemplateType::ProjectOnGoing->value,
            TemplateType::ProjectPlanned->value,
            TemplateType::Announcement->value,
            TemplateType::News->value,
            TemplateType::Page->value,
        ])
            ->whereNot(function ($query) {
                $query->whereJsonContains('link_view', '4');
            })
            ->orderBy('display_date', 'desc')
            ->take(100)
            ->get()
            ->groupBy('template_type');

        $projectsArray = [
            'deaths' => Vefatlist::orderBy('vefatTarihi', 'desc')
                ->take(5)
                ->get(),
            'projectFinished' => $allProjects->get(TemplateType::ProjectFinished->value, collect())->all(),
            'projectOnGoing' => $allProjects->get(TemplateType::ProjectOnGoing->value, collect())->all(),
            'projectPlanned' => $allProjects->get(TemplateType::ProjectPlanned->value, collect())->all(),
            'announcements' => $allProjects->get(TemplateType::Announcement->value, collect())->all(),
            'news' => $allProjects->get(TemplateType::News->value, collect())->all(),
            'bids' => Page::where('is_publish', true)
                ->where('template_type', TemplateType::Bid->value)
                ->orderBy('display_date', 'desc')
                ->take(6)
                ->get(),
            'activityBoxes' => Page::where('is_publish', true)
                ->where('template_type', TemplateType::Page->value)
                ->whereJsonContains('box_view', '1')
                ->orderBy('display_date', 'desc')
                ->take(6)
                ->get(),
            'kulturelMiras' => Page::where('is_publish', true)
                ->where('template_type', TemplateType::Page->value)
                ->whereJsonContains('box_view', 'kulturelMiras')
                ->orderBy('display_date', 'desc')
                ->take(6)
                ->get(),
            'explore' => Page::where('is_publish', true)
                ->whereJsonContains('box_view', 'kesfet')
                ->orderBy('display_date', 'desc')
                ->take(6)
                ->get(),
            'comingEvents' => Page::where('is_publish', true)
                ->where('template_type', TemplateType::Event->value)
                ->orderBy('display_date', 'desc')
                ->take(6)
                ->get(),
            'stories' => Page::where('is_publish', true)
                ->whereNull('parent_id')
                ->whereJsonContains('box_view', '2')
                ->with('subStory')
                ->orderBy('display_date', 'desc')
                ->get()
                ->map(function ($story) {
                    return [
                        'id' => $story->id,
                        'name' => $story->title,
                        'photo' => $story->cover,
                        'time' => $story->display_date_original,
                        'linkText' => $story->title,
                        'items' => $story->subStory,
                    ];
                }),
        ];

        return view('layouts.home', [
            'settings' => $settings,
            'mainNavigation' => $this->mainNavigation,
            'mainNavigation1' => $this->mainNavigation1,
            'mainNavigation2' => $this->mainNavigation2,
            'footernNavigation' => $this->footernNavigation,
            'footernGeneralNavigation' => $this->footernGeneralNavigation,
            'sliders' => $sliders,
            'projectsArray' => $projectsArray,
            'wheather' => $this->wheather,
        ]);
    }



    /**
     * Display the specified resource.
     */
    public function show($lang, $params = null)
    {
        $settings = $this->settings->toArray();
        $url = last(explode('/', $params));

        $page = Page::where('lang', $lang)
            ->where('url', $url)
            ->firstOrFail();

        $modules = [];
        if (in_array('vefatlist', $page['widgets'] ?? [])) {
            $modules['vefatlist'] = Vefatlist::orderBy('vefatTarihi', 'desc')
                ->paginate(10)
                ->toArray();
        }

        $subPages = Page::where('parent_id', $page['id'])
            ->where('is_publish', true)
            ->orderBy('display_date', 'desc')
            ->with('media')
            ->paginate(8)
            ->toArray();

        if (empty($subPages['data'])) {
            $subPages = Page::where('parent_id', $page['parent_id'])
                ->where('is_publish', true)
                ->where('template_type', $page['template_type'])
                ->where('id', '!=', $page['id'])
                ->orderBy('display_date', 'desc')
                ->with('media')
                ->paginate(8)
                ->toArray();
        }

        $cover = $page->getMedia("cover")[0] ?? null;
        $banner = $page->getMedia("banner")[0] ?? null;
        $box = $page->getMedia("box")[0] ?? null;
        $galleries = $page->getMedia("gallery") ?? null;
        $files = $page->getMedia("files") ?? null;

        $mainNavigation = $this->mainNavigation;
        $mainNavigation1 = $this->mainNavigation1;
        $mainNavigation2 = $this->mainNavigation2;
        $footernNavigation = $this->footernNavigation;
        $footernGeneralNavigation = $this->footernGeneralNavigation;

        return view(
            $this->viewGenerator($page->template_type->view()),
            compact(
                'settings',
                'page',
                'subPages',
                'modules',
                'mainNavigation',
                'mainNavigation1',
                'mainNavigation2',
                'footernNavigation',
                'footernGeneralNavigation',
                'cover',
                'banner',
                'box',
                'galleries',
                'files'
            ),
            [
                'wheather' => $this->wheather,
            ]
        );
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
