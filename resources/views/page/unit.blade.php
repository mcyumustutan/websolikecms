@extends('layouts.master')

@section('title', $page->title)

@section('content')


@include('components.breadcrumb')

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

@php
$column_size = 12;
if($page->has_sidebar) $column_size = 8;
@endphp

<section class="destination-details-section pt-4">
    <div class="container">
        <div class="row g-4">


            @if($page->has_sidebar)
            <div class="col-xl-3 col-lg-5">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="search-filter-section bg-white rounded ">

                            <div class="heading">
                                <h4 class="title">{{ __('websolike.Birimler') }}</h4>
                            </div>
                            <ul class="recent-news-list">

                                @foreach ($subPages['data'] as $subPage)
                                <li class="list">
                                    <h4 class="title">
                                        <a href="{{$subPage['url']}}"> {{$subPage['title']}}</a>
                                    </h4>
                                    @if($subPage['highlited_value_1'])
                                    <span class="fs-6">{{$subPage['highlited_value_1']}}</span>
                                    @endif
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            @endif


            <div class="col-xl-{{$column_size}} col-lg-{{$column_size}}">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class=" bg-white rounded p-4">


                            @if(!is_null($page->cover))
                            <div class=" float-end max-w-50  mx-4 ml-0">
                                <img src="{{$page['cover']}}" alt="{{$page->title}}" title="{{$page->title}}" class="img-fluid rounded" style="max-width: 430px;">
                                @if($page->highlited_value_1)
                                <div class="divider"></div>
                                <div class="count">
                                    <p class="pera">{!!$page->highlited_icon_1!!} {{$page->highlited_value_1}}</p>
                                </div>
                                @endif
                                @if($page->highlited_value_2)
                                <div class="divider"></div>
                                <div class="count">
                                    <p class="pera">{!!$page->highlited_icon_2!!} {{$page->highlited_value_2}}</p>
                                </div>
                                @endif
                            </div>
                            @endif

                            <div class="pera ml-5 mt-1" style="text-align: justify;">
                                {!! $page->content_primary !!}
                                {!! $page->content_secondary !!}
                            </div>

                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>



@if($page->has_subpages && count($subPages['data'])>0)
<section class="news-area pt-4">
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