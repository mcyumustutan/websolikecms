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


                <div class="col-lg-12">

                    @if(!is_null($page->cover))
                    <div class="mt-50">
                        <img src="{{$page->cover}}" alt="{{$page->title}}" title="{{$page->title}}">
                    </div>
                    @endif

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
                @include('components.share')
            </div>

            @if($page->has_sidebar)
            @include('components.sidebar')
            @endif

        </div>
    </div>
    </div>
</section>

@if($page->has_subpages)
@include('components/pagination')
@endif

@endsection