@extends('layouts.master')

@section('title', $page->title)

@section('content')


@include('components.breadcrumb')
<section class="page-details-section">
    <div class="container">
        <div class="row g-4 bg-white rounded py-4">
            @php
            $column_size = 12;
            if($page->has_sidebar) $column_size = 8;
            @endphp
            <div class="col-xl-{{$column_size}} col-lg-{{$column_size}}">
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

                </div>


                <div class="col-lg-12">

                    @if(!is_null($page->banner))
                    <div class=" float-start max-w-50 m-2">
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


@if($page->has_subpages && count($subPages['data'])>0)
<section class="news-area profile-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12">
                <div class="position-relative mb-60 mt-60">
                </div>
            </div>
        </div>

        <div class="row g-4 gap-4">

            @foreach ($subPages['data'] as $subPage)

            <div class="profile_card p-2">
                <div class="d-flex align-items-start">
                    <div class="image m-2">
                        <img src="{{ $subPage['cover'] }}" class="rounded" alt="{{ $subPage['title'] }}" title="{{ $subPage['title'] }}" width="155">
                    </div>
                    <div class="ml-3 w-100">
                        <h4 class="mb-0 mt-2">{{ $subPage['title'] }}</h4>
                        <span>{{ $subPage['meta_description'] }}</span>

                        <div class="button mt-2 d-flex flex-column align-items-start">

                            @if($subPage['highlited_icon_1'])
                            <p class="d-flex align-items-center gap-1">
                                <i class="ri-mail-line fs-4"></i> {{ $subPage['highlited_icon_1'] }}
                            </p>
                            @endif

                            @if($subPage['highlited_icon_2'])
                            <p class="d-flex align-items-center gap-1">
                                <i class="ri-phone-line fs-4"></i> {{ $subPage['highlited_icon_2'] }}
                            </p>
                            @endif
                            <a href="{{ $subPage['fullurl'] }}" class="btn btn-sm btn-primary w-100 ml-2">Detaylar</a>
                        </div>
                    </div>
                </div>
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