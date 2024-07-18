@extends('layouts.master')

@section('title')
{{ $settings['site-basligi'] }}
@endsection

@section('content')

<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide .content {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        background: -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(0, 0, 0, 0.8)));
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
        height: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        padding: 35px;
    }

    .swiper-slide .content .title {
        font-size: 1.2rem;
        font-weight: bold;
        color: white;
    }

    .swiper-slide .content .desciption {
        font-size: 2rem;
        font-weight: bold;
        color: white;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper {
        width: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    .swiper-slide {
        background-size: cover;
        background-position: center;
    }

    .mySwiper2 {
        height: 80%;
        width: 100%;
    }

    .mySwiper {

        height: 80px;
        box-sizing: border-box;
        padding: 10px 0;
    }

    .mySwiper .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
        opacity: 1;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .profile-card-4 {
        max-width: 370px;
        background-color: #FFF;
        border-radius: 5px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        position: relative;
        cursor: pointer;
    }

    .profile-card-4 img {
        transition: all 0.25s linear;
    }

    .profile-card-4 .profile-content {
        position: relative;
        padding: 15px;
        background-color: #FFF;
    }

    .profile-card-4 .profile-name {
        font-weight: bold;
        position: absolute;
        left: 0px;
        right: 0px;
        top: -70px;
        color: #FFF;
        font-size: 16px;
        background: rgb(0 0 0 / 50%);
    }

    .profile-card-4 .profile-name p {
        font-weight: 600;
        font-size: 13px;
        letter-spacing: 1.5px;
    }

    .profile-card-4 .profile-description {
        color: #777;
        font-size: 12px;
        padding: 10px;
    }

    .profile-card-4 .profile-overview {
        padding: 15px 0px;
    }

    .profile-card-4 .profile-overview p {
        font-size: 10px;
        font-weight: 600;
        color: #777;
    }

    .profile-card-4 .profile-overview h4 {
        color: #273751;
        font-weight: bold;
    }

    .profile-card-4 .profile-content::before {
        content: "";
        position: absolute;
        height: 20px;
        top: -10px;
        left: 0px;
        right: 0px;
        background-color: #FFF;
        z-index: 0;
    }

    .profile-card-4:hover img {
        transform: rotate(5deg) scale(1.1, 1.1);
        filter: brightness(110%);
    }
</style>

<!-- Hero area S t a r t-->
<section class="hero-padding-for-three video-overlay position-relative" style="min-height: 650px;">


    @foreach ($sliders as $slider)
    <!-- Video -->
    <div class="hero-bg-video">
        <video class="hero-slider-video video-cover" poster="images/hero/hero-three-banner.png" loop autoplay muted>
            <source src="{{Storage::url('public/sliders/' . $slider['img_url'])}}" type="video/mp4">

        </video>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-xl-12">
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

@include('components.announcements')

@include('components.about')

@include('components.home.projects.slidertab')



<!-- About Us area S t a r t -->
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


            <!-- <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                <article class="news-card-two wow fadeInUp bg-white" data-wow-delay="0.0s">
                    <div class="card text-dark card-has-bg" style="background-image:url('{{$exp->box}}');">

                        <div class="card-img-overlay d-flex flex-column">
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

                            <div class="card-footer">
                                <div class="media">
                                    <p>
                                        <a herf="{{config('app.url')}}/{{$exp['lang']}}/{{$exp['url']}}">{{$exp['title']}}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div> -->


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



@include('components.newslists')


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
</script>

<script>
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
</script>
@endsection