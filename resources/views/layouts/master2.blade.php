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

        /* adds some margin below the link sets  */
        .navbar .dropdown-menu div[class*="col"] {
            margin-bottom: 1rem;
        }

        .navbar .dropdown-menu {
            border: none;
            background-color: #0060c8 !important;
        }

        /* breakpoint and up - mega dropdown styles */
        @media screen and (min-width: 992px) {

            /* remove the padding from the navbar so the dropdown hover state is not broken */
            .navbar {
                padding-top: 0px;
                padding-bottom: 0px;
            }

            /* remove the padding from the nav-item and add some margin to give some breathing room on hovers */
            .navbar .nav-item {
                padding: .5rem .5rem;
                margin: 0 .25rem;
            }

            /* makes the dropdown full width  */
            .navbar .dropdown {
                position: static;
            }

            .navbar .dropdown-menu {
                width: 100%;
                left: 0;
                right: 0;
                /*  height of nav-item  */
                top: 45px;

                display: block;
                visibility: hidden;
                opacity: 0;
                transition: visibility 0s, opacity 0.3s linear;

            }




            /* shows the dropdown menu on hover */
            .navbar .dropdown:hover .dropdown-menu,
            .navbar .dropdown .dropdown-menu:hover {
                display: block;
                visibility: visible;
                opacity: 1;
                transition: visibility 0s, opacity 0.3s linear;
            }

            .navbar .dropdown-menu {
                border: 1px solid rgba(0, 0, 0, .15);
                background-color: #fff;
            }

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="https://bootstrapcreative.com/">Mega Dropdown</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Category</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category 1
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="text-uppercase text-white">Category 1</span>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Active</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link item</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link item</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.col-md-4  -->
                                <div class="col-md-4">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Active</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link item</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link item</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.col-md-4  -->
                                <div class="col-md-4">
                                    <a target="_blank" href="https://bootstrapcreative.com/resources/a-beginners-guide-to-hubspot-cms/">
                                        <img src="https://i0.wp.com/bootstrapcreative.com/wp-bc/wp-content/uploads/2022/07/beginners-guide-to-hubspot-cms-cover.png?w=200&ssl=1" alt="Web Design Guides" class="img-fluid">
                                    </a>
                                    <p class="text-white">Get Free Guides</p>

                                </div>
                                <!-- /.col-md-4  -->
                            </div>
                        </div>
                        <!--  /.container  -->


                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category 2
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="text-uppercase text-white">Category 2</span>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Active</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link item</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link item</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.col-md-4  -->
                                <div class="col-md-4">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Active</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link item</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link item</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.col-md-4  -->
                                <div class="col-md-4">
                                    <a target="_blank" href="https://bootstrapcreative.com/shop/jake-portfolio-hubspot-theme/">
                                        <img src="https://i0.wp.com/bootstrapcreative.com/wp-bc/wp-content/uploads/2022/01/jake-portfolio-cover.jpg?w=200&ssl=1" alt="Portfolio Website Templates" class="img-fluid">
                                    </a>
                                    <p class="text-white">Create a Portfolio Website Fast</p>

                                </div>
                                <!-- /.col-md-4  -->
                            </div>
                        </div>
                        <!--  /.container  -->


                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category 3
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="text-uppercase text-white">Category 3</span>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Active</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link item</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link item</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.col-md-4  -->
                                <div class="col-md-4">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Active</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link item</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Link item</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.col-md-4  -->
                                <div class="col-md-4">

                                    <a target="_blank" href="https://bootstrapcreative.com/resources/">
                                        <img src="https://i0.wp.com/bootstrapcreative.com/wp-bc/wp-content/uploads/2020/09/Filtered-Paint-Image-Instagram-Square.png?w=200&ssl=1" alt="Web Design Resources" class="img-fluid">
                                    </a>
                                    <p class="text-white">Free Web Design Resources</p>

                                </div>
                                <!-- /.col-md-4  -->
                            </div>
                        </div>
                        <!--  /.container  -->


                    </div>
                </li>

            </ul>

        </div>


    </nav>
    <main>
        @yield('content')
    </main>
    @include('components/footer')

    <script>
        $(document).ready(function() {
            // executes when HTML-Document is loaded and DOM is ready

            // breakpoint and up  
            $(window).resize(function() {
                if ($(window).width() >= 980) {

                    // when you hover a toggle show its dropdown menu
                    $(".navbar .dropdown-toggle").hover(function() {
                        $(this).parent().toggleClass("show");
                        $(this).parent().find(".dropdown-menu").toggleClass("show");
                    });

                    // hide the menu when the mouse leaves the dropdown
                    $(".navbar .dropdown-menu").mouseleave(function() {
                        $(this).removeClass("show");
                    });

                    // do something here
                }
            });



            // document ready  
        });
    </script>
</body>

</html>