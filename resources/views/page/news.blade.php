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
                                        {{ __('websolike.Haber Fotoğrafları')}}
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-xl-12 col-lg-12 d-flex flex-wrap gap-2">
                                @foreach ($galleries as $key => $gallery)
                                <a class="fancy-gallery-box" data-fancybox="gallery" data-src="{{$gallery->getUrl()}}">
                                    <img src="{{$gallery->getUrl()}}" alt="{{$page->title}}" height="150" />
                                </a>
                                @endforeach
                            </div>
                        </div>

                    </div>


                    <link rel="stylesheet" href="{{asset('plugins/fancybox/fancybox.css')}}" />
                    <script src="{{asset('plugins/fancybox/fancybox.umd.js')}}"></script>
                    <script>
                        Fancybox.bind('[data-fancybox="gallery"]', {});
                    </script>
                    <style>
                        .fancy-gallery-box {
                            width: 150px;
                            height: 150px;
                            background-color: white;
                            border: 10px solid white;
                            overflow: hidden;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }

                        .fancy-gallery-box img {
                            height: 100%;
                            width: auto;
                            transition: 1s all ease;
                        }

                        .fancy-gallery-box img:hover {
                            transform: scale(1.1)
                        }
                    </style>

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