<!-- Breadcrumbs S t a r t -->
<section class="breadcrumbs-area breadcrumb-bg" style="margin-top: 180px;">
    <div class="container">
        <h1 class="title wow fadeInUp" data-wow-delay="0.0s">{{$page->title}}</h1>
        @if(Auth::check())
        <div><a class="text-white" target="_blank" href="{{route('filament.admin.resources.pages.edit',$page['id'])}}">Düzenle</a></div>
        @endif

        <!-- <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <ul class="breadcrumb listing">
                    <li class="breadcrumb-item single-list">
                        <a href="{{config('app.url')}}/{{App::getLocale()}}" class="single">{{__('homepage.AnaSayfa')}}</a>
                    </li>
                    <li class="breadcrumb-item single-list" aria-current="page">
                        <a href="{{$page['parentPage']['fullurl'] ?? ''}}" class="single active">{{$page['parentPage']['title']??''}}</a>
                    </li>
                </ul>
            </nav>
        </div> -->
    </div>
</section>
<!--/ End-of Breadcrumbs-->