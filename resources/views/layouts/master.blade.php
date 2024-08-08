<!DOCTYPE html>
<html lang="{{App::getLocale()}}" dir="lrt">

<head>
    <meta charset="UTF-8">
    <meta logo="{{ asset('images/logo/logo-with-bg.png')}}">
    <meta white-logo="{{ asset('images/logo/logo-goreme.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta property="og:type" content="website">
    <link rel="icon" type="image/x-icon" sizes="20x20" href="{{ asset('images/icon/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-5.3.0.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/remixicon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main-style.css') }}">
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
    <meta name="twitter:card" content="{{$settings['site-aciklamasi']}}">
    <!-- jquery-->
    <script src="{{ asset('js/jquery-3.7.0.min.js')}}"></script>
</head>

<body>


    @include('components/header2')
    <main style="background: url({{asset('images/goreme-shape.jpg')}}) fixed center center repeat-x">
        @yield('content')
    </main>
    @include('components/footer')


    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap-5.3.0.min.js')}}"></script>
    <!-- Plugin -->
    <script src="{{ asset('js/plugin.js')}}"></script>
    <!-- Main js-->
    <script src="{{ asset('js/main.js')}}"></script>
    <script>
        //Clone both menus to keep them intact
        var combinedMenu = $('#menu').clone();
        var secondMenu = $('#menu2').clone();

        secondMenu.children('li').appendTo(combinedMenu);

        combinedMenu.slicknav({
            duplicate: false,
            prependTo: ".mobile_menu",
        });
    </script>



</body>

</html>