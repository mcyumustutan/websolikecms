@extends('layouts.master')

@section('title')
{{ $settings['site-basligi'] }}
@endsection

@section('content')
<!-- Hero area S t a r t-->
<section class="hero-padding-for-three video-overlay position-relative" style="min-height: 750px; padding-top: 270px;">

    @foreach ($sliders as $slider)
    <!-- Video -->
    <div class="hero-bg-video">
        <video class="hero-slider-video video-cover" poster="images/hero/hero-three-banner.png" loop autoplay muted>
            <source src="{{Storage::url('public/sliders/' . $slider['img_url'])}}" type="video/mp4">

        </video>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-xl-12 d-flex align-items-center justify-content-center">
                <div class="hero-caption-three position-relative z-3">
                    <h4 class="title wow fadeInUp" data-wow-delay="0.0s">
                        {{$slider['title']}}
                    </h4>
                    <p class="pera wow fadeInUp" data-wow-delay="0.1s"> {{$slider['info']}}</p>
                </div>

            </div>
        </div>
    </div>

    @endforeach

</section>
<!--/ End-of Hero-->


<section class="special-area position-relative pt-4">
    <div class="container">
        <div class="row">
            <div id="stories" class="storiesWrapper d-flex justify-content-center"></div>
        </div>
    </div>
</section>

<!-- @include('components.announcements') -->
@include('components.announcements')


@include('components.newslists')

@include('components.home.projects.slidertab')


@include('components.about')

<section class=" section-padding2">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-lg-8">
                <div class="section-title mx-526 mb-30">
                    <h4 class="title">Göreme'nin Muhteşem Atmosferini Keşfedin!</h4>
                    <p class="pera">
                        Kapadokya'nın peri bacaları, adeta bir masal diyarından çıkmış gibi gökyüzüne uzanır ve bölgenin eşsiz coğrafyasını gözler önüne serer.
                    </p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="discover-circle ">
                    <a href="{{config('app.url')}}/{{App::getLocale()}}/goreme" class="discover-btn">{{__('websolike.Discover More')}} <i class="ri-arrow-right-up-line"></i></a>
                </div>
            </div>
        </div>
        <div class="about-banner-two">
            <h4 class="watermark-text ">Göreme'yi Keşfedin!</h4>
            <div class="video-section">
                <!-- Video -->
                <div class="hero-bg-video">
                    <video class="hero-slider-video video-cover radius-30" poster="{{asset('images/pexels-shvets-2563678.jpg')}}" loop autoplay muted>
                        <source src="{{asset('images/videos/travel4.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <img src="{{asset('images/pexels-shvets-2563678.jpg')}}" alt="travello">
                <div class="rectangle-shape d-none d-sm-block">
                    <div class="sticky-corner right-corner">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M35 0V35C35 15.67 19.33 0 -1.53184e-05 0H35Z" fill="#daedef"></path>
                        </svg>
                    </div>
                    <div class="sticky-corner bottom-corner">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M35 0V35C35 15.67 19.33 0 -1.53184e-05 0H35Z" fill="#daedef"></path>
                        </svg>
                    </div>
                </div>
                <a href="https://www.youtube.com/embed/PmN-ab5rocw" class="d-none d-sm-block " data-fancybox="video-gallery">
                    <div class="video-player">
                        <i class="ri-play-fill"></i>
                    </div>
                </a>
            </div>
        </div>

        <div class="shape-bg">
            <img src="{{asset('images/icon/bg-shape.png')}}" alt="travello">
        </div>
        <div class="shape-bg-about">
            <img src="{{asset('images/icon/bg-shape-2.png')}}" alt="travello">
        </div>

    </div>
</section>



<section class="section-padding2 bg-goreme">
    <div class="container">


        <div class="row">
            <div class="col-lg-12 mb-8 mt-20">
                <div class="border-section-title">
                    <h4 class="title">Göreme Hakkında</h4>
                </div>
            </div>
        </div>


        <div class="row">

            @foreach ($explore as $exp)

            <div class="col-xl-3 col-lg-3 col-sm-6">
                <article class="news-card-two wow fadeInUp bg-white" data-wow-delay="0.0s" style="border:none">
                    <figure class="news-banner-two imgEffect">
                        <a href="{{config('app.url')}}/{{$exp['lang']}}/{{$exp['url']}}"><img src="{{$exp->box}}" alt="travello"></a>
                    </figure>
                    <div class="card-body">
                        <small class="card-meta mb-4">
                            <a herf="{{config('app.url')}}/{{$exp['lang']}}/{{$exp['url']}}">{{$exp['title']}}</a>
                        </small>

                        @if($exp['meta_description'])
                        <h4 class="card-title mt-4">
                            <a herf="{{config('app.url')}}/{{$exp['lang']}}/{{$exp['url']}}">{{$exp['meta_description']}}</a>
                        </h4>
                        @endif

                    </div>
                </article>
            </div>

            @endforeach



        </div>
    </div>

</section>


@include('components.explore')

<!--/ End-of About US-->





<!-- Map -->
<iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1558.0943119395045!2d34.829173!3d38.644543000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152a68781e85e3ab%3A0x6ae1a0b9171a33c1!2sGoreme%20Municipality!5e0!3m2!1sen!2str!4v1720032635247!5m2!1sen!2str" height="500" style="border: 15px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe>
<!-- / Map -->


<link rel="stylesheet" href="{{ asset('plugins/story/style.css')}}" />

<!-- lib styles -->
<link rel="stylesheet" href="{{ asset('plugins/story/zuck.min.css')}}" />
<link rel="stylesheet" href="{{ asset('plugins/story/skins/snapgram.min.css')}}" />
<script src="{{ asset('plugins/story/zuck.min.js')}}"></script>
<script src="{{ asset('plugins/story/script.js')}}"></script>
<script src="{{ asset('js/jquery-3.7.0.min.js')}}"></script>
<script src="{{ asset('js/plugin.js')}}"></script>


<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });

    var currentSkin = getCurrentSkin();
    var stories = window.Zuck(document.querySelector('#stories'), {
        backNative: false,
        previousTap: true,
        skin: currentSkin['name'],
        autoFullScreen: false,
        avatars: currentSkin['params']['avatars'],
        paginationArrows: currentSkin['params']['paginationArrows'],
        list: currentSkin['params']['list'],
        cubeEffect: currentSkin['params']['cubeEffect'],
        localStorage: true,
        language: { // if you need to translate :)
            unmute: 'Sesi Kapat',
            keyboardTip: 'Bir sonrakini görmek için boşluğa basın',
            visitLink: 'Ziyaret Et',
            time: {
                ago: 'önce',
                hour: 'Saat',
                hours: 'Saat',
                minute: 'Dakika',
                minutes: 'Dakika',
                fromnow: 'Şu andan itibaren',
                seconds: 'Saniye',
                yesterday: 'Dün',
                tomorrow: 'Yarın',
                days: 'Gün'
            },
        },
        stories: [
            @foreach($projectsArray['stories'] as $story) {
                id: '{{$story["id"]}}',
                photo: '{{$story["photo"]}}',
                name: '{{$story["name"]}}',
                time: '{{$story["time"]}}',
                lastUpdated: '{{$story["time"]}}',
                seen: false,
                localStorage: false,
                items: [
                    @foreach($story['items'] as $item) {
                        id: '{{$item["id"]}}',
                        seen: false,
                        localStorage: false,
                        type: 'photo',
                        src: '{{$item["cover"]}}',
                        preview: '{{$item["cover"]}}',
                        link: '{{$item["fullurl"]}}',
                        linkText: '{{$item["title"]}}',
                        time: '{{$item["display_date_original"]}}',
                        lastUpdated: '{{$item["display_date_original"]}}',
                    },

                    @endforeach
                ]
            },
            @endforeach
        ]
    });

    var swiper = new Swiper(".announcement-swiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
        loop: true
    });


    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".mySwiper", {
        grabCursor: true,
        effect: "creative",
        loop: true,
        navigation: {
            nextEl: ".swiper-events-button-next",
            prevEl: ".swiper-events-button-prev",
        },
        creativeEffect: {
            prev: {
                shadow: true,
                translate: [0, 0, -400],
            },
            next: {
                translate: ["100%", 0, 0],
            },
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
        on: {
            autoplayTimeLeft(s, time, progress) {
                progressCircle.style.setProperty("--progress", 1 - progress);
                progressContent.textContent = `${Math.ceil(time / 1000)}s`;
            }
        }
    });
</script>
@endsection