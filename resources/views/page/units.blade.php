@extends('layouts.master')

@section('title', $page->title)

@section('content')

@include('components.breadcrumb')

<section class="page-details-section">
    <div class="container">
        <div class="row  g-4 py-1 pt-0 mb-40">
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

                    @if($page->highlited_value_3)
                    <div class="col-lg-4 rounded">
                        <ul>
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
            </div>


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
                <a href="{{$subPage['fullurl']}}">
                    <article class="news-card-two">


                        <div class="news-content">

                            <h3 class="title">
                                {{$subPage['title']}}

                                @if($subPage['highlited_value_1'])
                                <div class="count">
                                    {{$subPage['highlited_value_1']}}
                                </div>
                                @endif
                            </h3>

                        </div>
                    </article>
                </a>
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