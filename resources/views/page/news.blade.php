@extends('layouts.master')

@section('title', $page->title)

@section('content')


@include('components.breadcrumb')

<section class="page-details-section">
    <div class="container">
        <div class="row g-4 bg-white rounded py-4 pt-0">
            @php
            $column_size = 12;
            if($page->has_sidebar) $column_size = 9;
            @endphp


            <!-- @if($page->has_sidebar)
            @include('components.sidebar')
            @endif -->

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

                    @if($page->highlited_value_1)
                    <div class="divider"></div>
                    <div class="count">
                        <p class="pera">{!!$page->highlited_icon_1!!} {{$page->highlited_value_1}}</p>
                    </div>
                    @endif



                </div>


                <div class="col-lg-12 gap-4">

                    @if(!is_null($page->banner))
                    <div class=" float-start max-w-50 mx-4 ml-0">
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

        </div>
    </div>
    </div>
</section>

 
@if(count($subPages['data'])>0)
<section class="news-area ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12">
                <div class="position-relative mb-20 mt-60">
                    <h4 class="title">
                        {{ __('websolike.Son Haberler')}}
                    </h4>
                </div>
            </div>
        </div>
        <div class="row g-4">

            @foreach ($subPages['data'] as $subPage)


            <div class="col-xl-3 col-lg-3 col-sm-6 ">
                <article class="news-card-two">
                    <figure class="news-banner-two imgEffect   justify-content-center align-items-center" style="min-height: 260px;">
                        <a href="{{$subPage['url']}}">
                            <img src="{{ $subPage['cover'] }}" alt="{{ $subPage['title'] }}"  >
                        </a>
                    </figure>

                    <div class="news-content">

                        <h3 class="title">
                            <a href="{{$subPage['url']}}">
                                {{$subPage['title']}}
                            </a>

                            @if($subPage['display_date'])
                            <div class="count">
                                <p class="pera">
                                    <i class="ri-calendar-todo-fill"></i> {{$subPage['display_only_date']}}
                                    @if($subPage['display_only_hour']!=="00:00")
                                    <i class="ri-time-line"></i> {{$subPage['display_only_hour']}}
                                    @endif
                                </p>
                                @if($subPage['highlited_value_1'])
                                {{$subPage['highlited_value_1']}}
                                @endif
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