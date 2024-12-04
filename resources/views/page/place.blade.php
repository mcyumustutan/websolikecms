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

                    @if($page->highlited_value_1)
                    <div class="divider"></div>
                    <div class="count">
                        <p class="pera">{!!$page->highlited_icon_1!!} {{$page->highlited_value_1}}</p>
                    </div>
                    @endif



                </div>

                <div class="row">

                    <div class="col-lg-8">

                        @if(!is_null($page->banner))
                        <div class=" float-start max-w-50  mx-4 ml-0">
                            <img src="{{$page['banner']}}" alt="{{$page->title}}" title="{{$page->title}}" class="img-fluid rounded" style="max-width: 430px;">
                        </div>
                        @endif

                        <div class="pera ml-5 mt-1" style="text-align: justify;">
                            {!! $page->content_primary !!}
                            {!! $page->content_secondary !!}
                        </div>
                    </div>

                    @if($page->highlited_value_3)
                    <div class="col-lg-4">
                        <ul class="tour-listing">
                            <!-- Single -->
                            <li class="list">
                                <div class="package-content">
                                    <h4 class="area-name">
                                        <a class="text" target="_blank" href="{{$page->highlited_icon_3}}">Adres Bilgisi</a>
                                    </h4>
                                    <div class="location">
                                        <i class="ri-map-pin-line"></i>
                                        <div class="name"><a class="text" target="_blank" href="{{$page->highlited_icon_3}}">{{$page->highlited_value_3}}</a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    @endif

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