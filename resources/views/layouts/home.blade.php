@extends('layouts.master')

@section('title')
{{ $settings['site-basligi'] }}
@endsection

@section('content')

<section class="hero-padding-for-three video-overlay position-relative d-flex justify-content-center align-items-center" style="min-height: 940px; padding-top: 270px;">

    @foreach ($sliders as $slider)
    <!-- Video -->
    <div class="hero-bg-video">
        <video class="hero-slider-video video-cover" poster="{{Storage::url('public/sliders/' . $slider['img_url'])}}" loop autoplay muted>
            <!-- <source src="{{Storage::url('public/sliders/' . $slider['img_url'])}}" type="video/mp4"> -->
        </video>
    </div>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row ">
            <div class="col-xl-12">
                <div class="hero-caption-three  ">
                    <h4 class="title wow fadeInUp rounded" data-wow-delay="0.0s">
                        {{$slider['title']}}...
                    </h4>
                    @if($slider['info'])
                    <p class="pera wow fadeInUp" data-wow-delay="0.1s"> {{$slider['info']}}</p>
                    @endif
                </div>

            </div>
        </div>
    </div>

    @endforeach

</section>



@include('components.stories')

@include('components.announcements')

@include('components.newslists')

@include('components.home.projects.slidertab')

@include('components.blog')

@include('components.blog2')


<iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1558.0943119395045!2d34.829173!3d38.644543000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152a68781e85e3ab%3A0x6ae1a0b9171a33c1!2sGoreme%20Municipality!5e0!3m2!1sen!2str!4v1720032635247!5m2!1sen!2str" height="650" style="border: 15px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
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

    var thumbSwiper = new Swiper(".thumb-mySwiper", {
      spaceBetween: 10,
      slidesPerView: 10,
      freeMode: true,
      watchSlidesProgress: true,
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
        thumbs: {
            swiper: thumbSwiper,
        },
        loop: true
    });


    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".mySwiper", {
        grabCursor: false,
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