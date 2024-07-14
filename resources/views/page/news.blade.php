@extends('layouts.master')

@section('title', $page->title)

@section('content')


@include('components.breadcrumb')

<!-- Destination area S t a r t -->
<section class="page-details-section ">
    <div class="container">
        <div class="row g-4">
            @php
            $column_size = 12;
            if($page->has_sidebar) $column_size = 8;
            @endphp
            <div class="col-xl-{{$column_size}} col-lg-{{$column_size}}">
                @if(!is_null($page->banner))
                <div class="news-details-banner imgEffect mt-50">
                    <div class="w-50">
                        <img src="{{$page->banner}}" alt="{{$page->title}}" title="{{$page->title}}" class="img-fluid">
                    </div>
                </div>
                @endif
                <div class="news-details-content">
                    <p class="pera">{!! $page->content_primary !!}</p>
                    <p class="pera">{{$page->content_secondary}}</p>

                    @if(count($galleries)>0)

                    <div class="galleries">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12">
                                <div class="position-relative mb-20 mt-20">
                                    <h5>
                                        {{ __('websolike.Photo Gallery')}}
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-xl-12 col-lg-12">
                                <div class="destination-details-banner o-hidden">
                                    <div class="swiper destinationSwiper-active">
                                        <div class="swiper-wrapper">
                                            @foreach ($galleries as $key => $gallery)
                                            <div class="swiper-slide">
                                                <img src="{{$gallery->getUrl()}}" alt="{{$page->title}}" height="500px">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endif

                    @if(count($files)>0)
                    <div class="files">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12">
                                <div class="position-relative mb-20 mt-20">
                                    <h5>
                                        {{ __('websolike.Files Attachments')}}
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <ul>
                            @foreach ($files as $key => $file)
                            <li><a href="{{$file->getUrl()}}">{{$file->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    @endif


                </div>




            </div>



        </div>
    </div>
</section>
<!--/ End-of Destination -->



<section class="news-area ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12">
                <div class="position-relative mb-60 mt-60">
                    <h4 class="title">
                        {{ __('websolike.Diğer Haberler')}}
                    </h4>
                </div>
            </div>
        </div>
        <div class="row g-4">

            @foreach ($subPages['data'] as $subPage)


            <div class="col-xl-3 col-lg-3 col-sm-6 ">
                <article class="news-card-two h-100">
                    <figure class="news-banner-two imgEffect  d-flex justify-content-center">
                        <a href="{{ $page->url }}/{{$subPage['url']}}">
                            <img src="{{ $subPage['cover'] }}" alt="{{ $subPage['title'] }}" class="img-fluid">
                        </a>
                    </figure>

                    <div class="news-content">

                        <h4 class="title">
                            <a href="{{ $page->url }}/{{$subPage['url']}}">
                                {{$subPage['title']}}
                            </a>

                            <p class="date">{{$subPage['display_date']}}</p>
                        </h4>

                    </div>
                </article>
            </div>

            @endforeach
        </div>


        <div class="col-12 text-center">

            <div class="d-flex justify-content-center mt-4">
                <nav class="pagination-container">
                    <div class="pagination">
                        <span class="pagination-inner">
                            @foreach ($subPages['links'] as $link)
                            <a class="{{ $link['active'] ? 'pagination-active' : '' }}" href="{{$link['url']}}">
                                {{__($link['label']) }}
                            </a>
                            @endforeach
                        </span>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

@endsection