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
            $gallery_column_size = 7;
            if($page->has_sidebar){
            $column_size = 8;
            $gallery_column_size = 12;
            }
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
                            <div class="col-xl-{{$gallery_column_size}} col-lg-{{$gallery_column_size}}">
                                <div class="destination-details-banner o-hidden">
                                    <div class="swiper destinationSwiper-active">
                                        <div class="swiper-wrapper">
                                            @foreach ($galleries as $key => $gallery)
                                            <div class="swiper-slide">
                                                <img src="{{$gallery->getUrl()}}" alt="{{$page->title}}" height="auto">
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

            @if($page->has_sidebar)
            @include('components.sidebar')
            @endif

        </div>
    </div>
</section>
<!--/ End-of Destination -->




@if($page->has_subpages)
@include('components/pagination')
@endif

@endsection