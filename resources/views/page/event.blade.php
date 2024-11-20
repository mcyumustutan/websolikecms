@extends('layouts.master')

@section('title', $page->title)

@section('content')

@include('components.breadcrumb')

<section class="page-details-section">
    <div class="container">
        <div class="row  g-4 bg-white rounded py-4 pt-0 mb-40">
            @php
            $column_size = 12;
            if($page->has_sidebar) $column_size = 8;
            @endphp

            <div class="col-xl-{{$column_size}} col-lg-{{$column_size}}">
                <div class="d-flex flex-wrap align-items-center gap-20 ">

                </div>


                <div class="col-lg-12">

                    {!! $page->content_primary !!}
                    {!! $page->content_secondary !!}

                </div>

                <div class="col-lg-6">
                    <div class="photo rounded" style="width: 100%; height: auto; overflow: hidden;">
                        <img class="rounded img-fluid" src="{{$page->cover}}" alt="{{$page->title}}">
                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="pera ml-5 mt-1" style="text-align: justify;">
                        <div class="event-list">
                            <div class="event w-100  h-100" style="background-color: white;">
                                <div class="info">
                                    <div class="name p-2 mt-2">
                                        <strong>{{$page->title}}</strong>
                                        <p></p>
                                    </div>
                                    <div class="items w-100">

                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="item">
                                                    <label><i class="ri-calendar-todo-fill"></i></label>
                                                    <span>{{$page->display_only_date}}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="item">
                                                    <label><i class="ri-time-line"></i></label>
                                                    <span>{{$page->display_only_hour}}</span>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-block">
                                            <div class="item">
                                                <label><i class="ri-map-pin-line"></i></label>
                                                <span>{{$page->highlited_value_1}}</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                @include('components.gallery')
                @include('components.files')
                @include('components.share')
            </div>

            @if($page->has_sidebar)
            @include('components.sidebar')
            @endif

        </div>
    </div>
    </div>
</section>

@if($page->has_subpages && count($subPages['data'])>0)
<section class="news-area ">
    <div class="container">
        <div class="row g-4">

            @foreach ($subPages['data'] as $subPage)


            <div class="col-xl-3 col-lg-3 col-sm-6 ">
                <article class="news-card-two">
                    <figure class="news-banner-two imgEffect   justify-content-center align-items-center" style="height: 260px;">
                        <a href="{{$subPage['fullurl']}}">
                            <img src="{{ $subPage['cover'] }}" alt="{{ $subPage['title'] }}">
                        </a>
                    </figure>

                    <div class="news-content">

                        <h3 class="title">
                            <a href="{{$subPage['fullurl']}}">
                                {{$subPage['title']}}
                            </a>

                            @if($subPage['highlited_value_1'])
                            <div class="count">
                                {{$subPage['highlited_value_1']}}
                            </div>
                            @endif
                        </h3>

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
@endif

@endsection