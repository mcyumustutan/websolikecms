@extends('layouts.master')

@section('title', $page->title)

@section('content')


@include('components.breadcrumb')

<section class="page-details-section">
    <div class="container">
        <div class="row g-4">
            @php
            $column_size = 12;
            if($page->has_sidebar) $column_size = 8;
            @endphp
            <div class="col-xl-{{$column_size}} col-lg-{{$column_size}}">



                @if(!is_null($page->banner))
                <div class="mt-50">
                    <img src="{{$page['banner']}}" alt="{{$page->title}}" title="{{$page->title}}" class="img-fluid">
                </div>
                @endif


                <div class="news-details-content">
                    <div class="d-flex flex-wrap align-items-center gap-20 mt-20">

                        @if($page->display_date)
                        <div class="count">
                            <p class="pera">
                                <i class="ri-calendar-todo-fill"></i> {{$page['display_only_date']}}
                                @if($page['display_only_hour']!=="00:00")
                                <i class="ri-time-line"></i> {{$page['display_only_hour']}}
                                @endif
                            </p>
                        </div>
                        @endif

                        @if($page->highlited_value_1)
                        <div class="divider"></div>
                        <div class="count">
                            <p class="pera">{!!$page->highlited_icon_1!!} {{$page->highlited_value_1}}</p>
                        </div>
                        @endif



                    </div>

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

            @if($page->has_sidebar)
            @include('components.sidebar')
            @endif

        </div>
    </div>
</section>


@if(in_array('solutioncenter',$page->widgets??[]))
form
@endif

@if($page->has_subpages)
@include('components/pagination')
@endif

@endsection