@extends('layouts.master')

@section('title', $page->title)

@section('content')

<section class="destination-details-section section-padding2">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-12 col-lg-12">
                <div class="news-details-content">
                    <div class="d-flex flex-wrap align-items-center gap-20">
                        <div class="count">
                            <p class="pera">{{$page->display_date}}</p>
                        </div>
                    </div>
                    <h4 class="title">{{$page->title}}</h4>
                    <p class="pera">{{ $page->content_primary }}</p>
                    <p class="pera">{{ $page->content_secondary }}</p>
                </div>

            </div>

        </div>
    </div>
</section>

@if($subPages['data'])

<section class="news-area section-padding2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-7">
                <div class="section-title text-center mx-605 mx-auto position-relative mb-60">
                    <h4 class="title">
                        {{__('Tüm İhaleler')}}
                    </h4>
                </div>
            </div>
        </div>
        <div class="row g-4">

            @foreach ($subPages['data'] as $subPage)


            <div class="col-xl-4 col-lg-4 col-sm-6">
                <article class="news-card-two">
                    <figure class="news-banner-two imgEffect">
                        <a href="{{ $page->url }}/{{$subPage['url']}}"><img src="{{ $subPage['cover'] }}" alt="{{ $subPage['title'] }}"></a>
                    </figure>
                    <div class="news-content">

                        <h4 class="title">
                            <a href="{{ $page->url }}/{{$subPage['url']}}">{{$subPage['title']}}</a>
                        </h4>

                    </div>
                </article>
            </div>

            @endforeach
        </div>


        @include('components/pagination')
    </div>
</section>





@endif

@endsection