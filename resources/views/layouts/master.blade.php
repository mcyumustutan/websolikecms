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
        .announcement-icon {
            color: #FF4081;
        }

        .announcement-item {
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
            background-color: #fff;
            width: 100%;
        }

        .announcement-text {
            margin-left: 10px;
        }


        .pagination-container {
            margin: 100px auto;
            text-align: center;
        }

        .pagination {
            position: relative;
        }

        .pagination a {
            position: relative;
            display: inline-block;
            color: var(--tertiary-btn);
            text-decoration: none;
            padding: 8px 16px 10px;
        }

        .pagination a:before {
            z-index: -1;
            position: absolute;
            height: 100%;
            width: 100%;
            content: "";
            top: 0;
            left: 0;
            background-color: var(--tertiary-btn);
            border-radius: 24px;
            transform: scale(0);
            transition: all 0.2s;
        }

        .pagination a:hover,
        .pagination a .pagination-active {
            color: #fff;
        }

        .pagination a:hover:before,
        .pagination a .pagination-active:before {
            transform: scale(1);
        }

        .pagination .pagination-active {
            color: #fff;
        }

        .pagination .pagination-active:before {
            transform: scale(1);
        }

        .pagination-newer {
            margin-right: 50px;
        }

        .pagination-older {
            margin-left: 50px;
        }
    </style>
</head>

<body>
    <header class="header-area-three">
        <div class="main-header">
            <!-- Header Top -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-menu-wrapper d-flex align-items-center justify-content-between">
                                <div class="top-header-right">
                                    <div class="contact-section">
                                        <div class="circle-primary-sm">
                                            <i class="ri-phone-line"></i>
                                        </div>
                                        <div class="info">
                                            <p class="pera"></p>
                                            <h4 class="title">
                                                <a href="javascript:void(0)">+90 (384) 271 20 01</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Top Left Side -->
                                <!-- Logo-->
                                <div class="logo">
                                    <a href="{{config('app.url')}}/{{App::getLocale()}}">
                                        <img src="{{ asset('images/logo/logo.png')}}" alt="logo" class="changeLogo" style="height:100px">
                                    </a>
                                </div>
                                <div class="header-right-three pl-15 d-none d-lg-flex">
                                    <div class="lang">
                                        <div class="d-flex align-items-center">

                                            @if($settings['instagramcom'])
                                            <a target="_blank" href="{{$settings['instagramcom']}}">
                                                <i class="ri-instagram-line fs-4"></i>
                                            </a>
                                            @endif

                                            @if($settings['xcom'])
                                            <a target="_blank" href="{{$settings['xcom']}}">
                                                <i class="ri-twitter-line fs-4"></i>
                                            </a>
                                            @endif

                                            @if($settings['whatsapp'])
                                            <a target="_blank" href="https://api.whatsapp.com/send?phone={{$settings['whatsapp']}}">
                                                <i class="ri-whatsapp-line fs-4"></i>
                                            </a>
                                            @endif

                                            @if($settings['facebookcom'])
                                            <a target="_blank" href="{{$settings['facebookcom']}}">
                                                <i class="ri-facebook-line fs-4"></i>
                                            </a>
                                            @endif

                                            @if($settings['youtubecom'])
                                            <a target="_blank" href="{{$settings['youtubecom']}}">
                                                <i class="ri-youtube-line fs-4"></i>
                                            </a>
                                            @endif

                                            @if($settings['tiktokcom'])
                                            <a target="_blank" href="{{$settings['tiktokcom']}}">
                                                <i class="ri-tiktok-line fs-4"></i>
                                            </a>
                                            @endif

                                        </div>
                                        <i class="ri-global-line"></i>

                                        @if(App::getLocale()=='tr')
                                        <a style="color:red" href="{{config('app.url')}}/en">
                                            <p class="pera">English</p>
                                        </a>
                                        @elseif(App::getLocale()=='en')
                                        <a style="color:red" href="{{config('app.url')}}/tr">
                                            <p class="pera">Türkçe</p>
                                        </a>
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
                                                @foreach ($mainNavigation as $menu)
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


                                                <li class=" d-block d-lg-none">
                                                    <div class="d-flex align-items-center">

                                                        @if($settings['instagramcom'])
                                                        <a target="_blank" href="{{$settings['instagramcom']}}">
                                                            <i class="ri-instagram-line fs-4"></i>
                                                        </a>
                                                        @endif

                                                        @if($settings['xcom'])
                                                        <a target="_blank" href="{{$settings['xcom']}}">
                                                            <i class="ri-twitter-line fs-4"></i>
                                                        </a>
                                                        @endif

                                                        @if($settings['whatsapp'])
                                                        <a target="_blank" href="https://api.whatsapp.com/send?phone={{$settings['whatsapp']}}">
                                                            <i class="ri-whatsapp-line fs-4"></i>
                                                        </a>
                                                        @endif

                                                        @if($settings['facebookcom'])
                                                        <a target="_blank" href="{{$settings['facebookcom']}}">
                                                            <i class="ri-facebook-line fs-4"></i>
                                                        </a>
                                                        @endif

                                                        @if($settings['youtubecom'])
                                                        <a target="_blank" href="{{$settings['youtubecom']}}">
                                                            <i class="ri-youtube-line fs-4"></i>
                                                        </a>
                                                        @endif

                                                        @if($settings['tiktokcom'])
                                                        <a target="_blank" href="{{$settings['tiktokcom']}}">
                                                            <i class="ri-tiktok-line fs-4"></i>
                                                        </a>
                                                        @endif

                                                    </div>
                                                    <i class="ri-global-line"></i>

                                                    @if(App::getLocale()=='tr')
                                                    <a style="color:red" href="{{config('app.url')}}/en">
                                                        <p class="pera">English</p>
                                                    </a>
                                                    @elseif(App::getLocale()=='en')
                                                    <a style="color:red" href="{{config('app.url')}}/tr">
                                                        <p class="pera">Türkçe</p>
                                                    </a>
                                                    @endif
                                                </li>
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