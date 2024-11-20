@extends('layouts.master')

@section('title', $page->title)

@section('content')

@include('components.breadcrumb')

<section class="page-details-section">
    <div class="container">
        <div class="row  g-4 bg-white rounded py-4 pt-0 mb-40">
            @php
            $column_size = 12;
            @endphp

            <div class="col-xl-{{$column_size}} col-lg-{{$column_size}}">
                <div class="d-flex flex-wrap align-items-center gap-20 ">

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


                <div class="col-lg-6">

                    @if(!is_null($page->banner))
                    <div class=" float-start max-w-50  mx-4 ml-0">
                        <img src="{{$page['banner']}}" alt="{{$page->title}}" title="{{$page->title}}" class="img-fluid rounded">
                    </div>
                    @endif
                </div>

                <div class="col-lg-12">
                    <div class="pera ml-5 mt-1" style="text-align: justify;">
                        {!! $page->content_primary !!}
                        {!! $page->content_secondary !!}
                    </div>
                </div>

                <div class="clearfix"></div>
                @include('components.gallery')
                @include('components.files')
                @include('components.share')
            </div>


        </div>
    </div>
    </div>
</section>

@if(count($subPages['data'])>0)
<section class="news-area ">
    <div class="container">

        <div class="row g-4">

            @foreach ($subPages['data'] as $subPage)

            <div class="card shadow-sm" style="min-height: 100px;">
                <div class="row">
                    <div class="col-lg-4 col-xs-12 p-4">
                        <a href="{{$subPage['fullurl']}}"><img src="{{ $subPage['cover'] }}" class="card-img-top img-fluid rounded" alt="{{ $subPage['title'] }}"></a>
                    </div>

                    <div class="col-lg-8 col-xs-12">
                        <div class="card-body">
                            <a href="{{$subPage['fullurl']}}">
                                <h5 class="card-title text-primary">{{ $subPage['title'] }}</h5>
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
                            <p class="card-text border-top mt-4">
                                {{$subPage['meta_description']}}
                            </p>
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

@endsection