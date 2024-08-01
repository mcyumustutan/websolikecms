<!DOCTYPE html>
<html lang="{{App::getLocale()}}" dir="lrt">

<head>

    <meta charset="UTF-8">
    <meta logo="{{ asset('images/logo/logo.png')}}">
    <meta white-logo="{{ asset('images/logo/logo.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <link rel="icon" type="image/x-icon" sizes="20x20" href="{{ asset('images/icon/favicon.png') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-5.3.0.min.css') }}">
    <!-- Fonts & icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/remixicon.css') }}">
    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugin.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main-style.css') }}">
    <!-- RTL CSS::When Need RTL Uncomments File -->
    <!-- <link rel="stylesheet" type="text/css" href="css/rtl.css"> -->


    <!-- Title -->
    <title>@yield('title', 'My Application')</title>
    <meta name="description" content="{{$settings['site-aciklamasi']}}">
    <meta name="keywords" content="{{$settings['anahtar-kelimeler']}}">
    <meta name="author" content="goreme.bel.tr">
    <meta property="og:title" content="">
    <meta property="og:site_name" content="">
    <meta property="og:url" content="{{config('app.url')}}/{{App::getLocale()}}">
    <meta property="og:image" content="{{ asset('images/logo/logo.png')}}">
    <meta property="og:description" content="{{$settings['site-aciklamasi']}}">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="{{$settings['site-aciklamasi']}}">
    <meta name="twitter:image" content="{{ asset('images/logo/logo.png')}}">
    <meta name="twitter:card" content="summary">
    <style>
        .logo_area {
            width: 300px;
            height: 300px;
            position: absolute;
            left: 50%;
            top: 0;
            content: "";
            margin-left: -150px;
            text-align: center;
            z-index: 99;
        }

        @media only screen and (min-width: 200px) and (max-width: 767px) {
            .slicknav_menu {
                display: block;
            }

            .inner_main_menu {
                display: none;
            }

            .logo_area {
                height: auto;
                left: 0;
                margin-left: 0;
                position: relative;
                top: 0;
                width: 130px;
            }

            .logo_area img {
                height: auto;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <header class="header-area-three position-relative" style="z-index: 9;">
        <div class="main-header position-absolute top-0 start-0 end-0" style="background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 0px 22px 0 rgba( 255, 255, 255, 0.37 );
backdrop-filter: blur( 12px );
-webkit-backdrop-filter: blur( 42px );">
            <!-- Header Top -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-menu-wrapper d-flex align-items-center justify-content-between">
                                <div class="top-header-right">
                                    <a href="https://whc.unesco.org/en/list/357" target="_blank">
                                        <img src="{{ asset('images/unesco.png')}}" alt="{{$settings['site-aciklamasi']}}" height="50">
                                    </a>
                                    <a href="https://www.tarihikentlerbirligi.org/" target="_blank">
                                        <img src="{{ asset('images/tarihi-kentler-birligi.png')}}" alt="{{$settings['site-aciklamasi']}}" height="50">
                                    </a>
                                </div>

                                <div class="logo_area" style="background:url('{{asset('images/logo-bg-goreme.png')}}') no-repeat center 0px;">
                                    <a href="{{config('app.url')}}/{{App::getLocale()}}" title="{{ $settings['site-basligi'] }}">
                                        <img src="{{ asset('images/logo/logo.png')}}" alt="{{$settings['site-aciklamasi']}}" class="changeLogo" title="{{ $settings['site-basligi'] }}">
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
    <main>
        @yield('content')
    </main>
    @include('components/footer')
</body>

</html>