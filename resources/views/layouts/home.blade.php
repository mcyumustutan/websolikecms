@extends('layouts.master')

@section('title')
{{ $settings['site-basligi'] }}
@endsection

@section('content')

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
                    <p class="pera">Yeraltı şehirleri ve tarihi kiliseleriyle Kapadokya, her köşesinde binlerce yıllık bir medeniyetin izlerini taşır. Doğayla iç içe olmanın huzurunu yaşatır. Gün batımında kızıl renklere bürünen vadileri ve sessizliği, Kapadokya'nın huzur dolu atmosferini bir kez daha hissettirir.
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
                <a href="https://www.youtube.com/embed/AyHGlH4Nw4g?si=8evLTXdUwcGzGzU3" class="d-none d-sm-block " data-fancybox="video-gallery">
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




@endsection