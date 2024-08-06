@extends('layouts.master')

@section('title', $page->title)

@section('content')


@include('components.breadcrumb')

<section class="page-details-section">
    <div class="container">
        <div class="row g-4">

            <div class="col-xl-12 col-lg-12">





                <div class="news-details-content">

                    <p class="pera">{!! $page->content_primary !!}</p>
                    <p class="pera">{{$page->content_secondary}}</p>

                </div>






                @if(in_array('solutioncenter',$page->widgets??[]))
                @include('modules.solutioncenter.form')
                @endif




                @if(in_array('smscsignup',$page->widgets??[]))
                @include('modules.smscsignup.form')
                @endif



                @if(in_array('vefatlist',$page->widgets??[]))
                @include('modules.vefatlist.list')
                @endif




            </div>


        </div>
    </div>
</section>



@endsection