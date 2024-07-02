@extends('layouts.master')

@section('title', config('app.name'))

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

@include('components.explore')

@include('components.newslists')




@endsection