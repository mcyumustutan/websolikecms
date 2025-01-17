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
                    @endif



                </div>




                <div class="clearfix"></div>


                @if(in_array('organisationtree',$page->widgets??[]))
                @include('modules.organisationtree.organisationtree')
                @endif


                <div class="clearfix"></div>
                @include('components.gallery')
                @include('components.files')
            </div>


        </div>
    </div>
    </div>
</section>

 

@endsection