@extends('layouts.master')

@section('title', $page->title)

@section('content')


@include('components.breadcrumb')
<section class="page-details-section">
    <div class="container">
        <div class="row g-4 bg-white rounded py-4 pt-0">
            @php
            $column_size = 12;
            if($page->has_sidebar) $column_size = 8;
            @endphp
            <div class="col-xl-{{$column_size}} col-lg-{{$column_size}}">
                <div class="d-flex flex-wrap align-items-center gap-20  ">

                    @if($page['highlited_icon_1'])
                    <p class="card-text">
                        <img src="{{asset('images/rozet/') .'/'. $page['highlited_icon_1'] }}.png" alt="{{$page['highlited_icon_1']}}"
                            style="width: 40px; height: 40px;">
                    </p>
                    @endif
                    @if($page['highlited_icon_1'])
                    <p class="card-text">
                        {{$page['highlited_icon_1']}}
                    </p>
                    @endif

                </div>


                <div class="col-lg-12">

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

                <div class="clearfix"></div>
                @include('components.gallery')
                @include('components.files')
            </div>

            @if($page->has_sidebar)
            @include('components.sidebar')
            @endif

        </div>
    </div>
    </div>
</section>
<style>
    .custom-card {
        margin-bottom: 20px;
        text-align: center;
    }

    .custom-card img {
        max-width: 100%;
        height: auto;
    }

    .card-title {
        margin-bottom: 5px;
    }
</style>

@if($page->has_subpages && count($subPages['data'])>0)
<section class="news-area profile-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12">
                <div class="position-relative mb-60 mt-60">
                </div>
            </div>
        </div>


        <div class="container mt-4">
            <div class="row">

                @foreach ($subPages['data'] as $subPage)

                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="card custom-card">

                        @if($subPage['is_clickable'])
                        <a href="{{ $subPage['fullurl'] }}">
                            @endif

                            <img src="{{ $subPage['cover'] }}" class="rounded" alt="{{ $subPage['title'] }}" title="{{ $subPage['title'] }}">


                            @if($subPage['is_clickable'])
                        </a>
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $subPage['title'] }}</h5>
                            @if($subPage['highlited_icon_1'])
                            <p class="card-text">
                                <img src="{{asset('images/rozet/') .'/'. $subPage['highlited_icon_1'] }}.png" alt="{{$subPage['highlited_icon_1']}}"
                                    style="width: 40px; height: 40px;">
                            </p>
                            @endif
                            @if($subPage['highlited_value_1'])
                            <p class="card-text">
                                {{$subPage['highlited_value_1']}}
                            </p>
                            @endif
                            @if($subPage['highlited_value_2'])
                            <p class="card-text">
                                {{$subPage['highlited_value_2']}}
                            </p>
                            @endif


                        </div>
                    </div>
                </div>

                @endforeach

            </div>
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
<style>
    .profile_card {
        width: 400px;
        border: none;
        border-radius: 10px;

        background-color: #fff;
    }



    .stats {

        background: #f2f5f8 !important;

        color: #000 !important;
    }

    .articles {
        font-size: 10px;
        color: #a1aab9;
    }

    .number1 {
        font-weight: 500;
    }

    .followers {
        font-size: 10px;
        color: #a1aab9;

    }

    .number2 {
        font-weight: 500;
    }

    .rating {
        font-size: 10px;
        color: #a1aab9;
    }

    .number3 {
        font-weight: 500;
    }
</style>
@endsection