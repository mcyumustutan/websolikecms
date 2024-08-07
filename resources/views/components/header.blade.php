<header class="header-area-three position-relative" style="z-index: 9;">
    <div class="main-header position-absolute top-0 start-0 end-0 header-bg-style">
        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-menu-wrapper d-flex align-items-center justify-content-between">
                            <div class="top-header-right">
                                <a href="https://whc.unesco.org/en/list/357" target="_blank">
                                    <img src="{{ asset('images/header-logos/png/unesco.png')}}" alt="{{$settings['site-aciklamasi']}}" height="50" title="Unesco">
                                </a>
                                <a href="http://www.nevsehir.gov.tr/" target="_blank">
                                    <img src="{{ asset('images/header-logos/png/goreme.png')}}" alt="{{$settings['site-aciklamasi']}}" height="50" title="T.C. Nevşehir Valiliği">
                                </a>
                                <a href="https://www.tarihikentlerbirligi.org/" target="_blank">
                                    <img src="{{ asset('images/header-logos/png/tarihi-kentler.png')}}" alt="{{$settings['site-aciklamasi']}}" height="50" title="Tarihi Kentler">
                                </a>
                                <a href="https://kvmgm.ktb.gov.tr/TR-44433/goreme-milli-parki-ve-kapadokya-nevsehir.html" target="_blank" title="Dünya Mirası">
                                    <img src="{{ asset('images/header-logos/png/dunya-mirasi.png')}}" height="50" alt="{{$settings['site-aciklamasi']}}">
                                </a>
                            </div>

                            <div class="header-right-three pl-15 d-none d-lg-flex">
                                <div class="lang">

                                    <i class="ri-global-line"></i>

                                    @if(App::getLocale()=='tr')
                                    <a href="{{config('app.url')}}/en">
                                        <p class="pera">English</p>
                                    </a>
                                    @elseif(App::getLocale()=='en')
                                    <a href="{{config('app.url')}}/tr">
                                        <p class="pera">Türkçe</p>
                                    </a>
                                    @endif

                                </div>

                                <div class="">
                                    <a target="_blank" href="https://shmkapadokya.kapadokya.edu.tr/" class="btn-primary-sm radius-30">
                                        {{__('Balon Uçuş Bilgisi')}} <i class="ri-arrow-right-up-line"></i>
                                    </a>
                                </div>

                                <div class="d-flex justify-content-center align-items-center px-2 rounded">
                                    @php
                                    if($wheather['icon']){
                                    $weatherimgpath = 'images/weather/'.$wheather['icon'] .'.svg';
                                    }
                                    @endphp

                                    @if(isset($weatherimgpath))
                                    <span class="fw-bold text-black">{{$wheather['temp']}} &deg;C</span> <img src="{{asset($weatherimgpath)}}" />
                                    @endif
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom -->
        <div class="header-bottom header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <!-- Main-menu for desktop -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <ul class="listing" id="navigation">
                                            <li class="single-list text-uppercase">
                                                <a class="single" href="{{config('app.url')}}/{{App::getLocale()}}">{{ __('homepage.AnaSayfa') }}</a>
                                            </li>
                                            @foreach ($mainNavigation1 as $menu)
                                            <li class="single-list">
                                                <a href="{{config('app.url')}}/{{$menu['lang']}}/{{$menu['url']}}" class="single">{{$menu['title']}} <i class="ri-arrow-down-s-line"></i></a>
                                                @if($menu['sub'])
                                                <ul class="submenu">
                                                    @foreach ($menu['sub'] as $submenu)
                                                    <li class="single-list">
                                                        <a href="{{config('app.url')}}/{{$menu['lang']}}/{{$menu['url']}}/{{$submenu['url']}}" class="single">{{$submenu['title']}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>
                                        <div class="logo_area" style="z-index: 10;">
                                            <a href="{{config('app.url')}}/{{App::getLocale()}}" title="{{ $settings['site-basligi'] }}">
                                                <img src="{{ asset('images/logo/logo-with-bg.png')}}" alt="{{$settings['site-aciklamasi']}}" class="changeLogos" title="{{ $settings['site-basligi'] }}">
                                            </a>
                                        </div>
                                        <ul class="listing float-end" id="navigation">

                                            @foreach ($mainNavigation2 as $menu)
                                            <li class="single-list">
                                                <a href="{{config('app.url')}}/{{$menu['lang']}}/{{$menu['url']}}" class="single">{{$menu['title']}} <i class="ri-arrow-down-s-line"></i></a>
                                                @if($menu['sub'])
                                                <ul class="submenu">
                                                    @foreach ($menu['sub'] as $submenu)
                                                    <li class="single-list">
                                                        <a href="{{config('app.url')}}/{{$menu['lang']}}/{{$menu['url']}}/{{$submenu['url']}}" class="single">{{$submenu['title']}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>



                                    </div>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="div">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>