@extends('layouts.master')

@section('title', $page->title)




@section('content')
@include('components.breadcrumb')

<!-- Destination area S t a r t -->
<section class="page-details-section py-4">
    <div class="container">

        <div class="row bg-white rounded p-4">

            <p>{{ $page->content_primary }}</p>
            <p>{{ $page->content_socondary }}</p>


            <div class="col-lg-6">

                <div class="uk-first-column p-4">

                    <div>
                        <div class="fs18 fw6 d-flex align-items-center gap-2">
                            <span class="uk-margin-small-right text-blue uk-text-large uk-icon" uk-icon="icon:location;ratio: 2">
                                <svg width="28" height="28" viewBox="0 0 20 20">
                                    <path fill="none" stroke="#000" stroke-width="1.01" d="M10,0.5 C6.41,0.5 3.5,3.39 3.5,6.98 C3.5,11.83 10,19 10,19 C10,19 16.5,11.83 16.5,6.98 C16.5,3.39 13.59,0.5 10,0.5 L10,0.5 Z"></path>
                                    <circle fill="none" stroke="#000" cx="10" cy="6.8" r="2.3"></circle>
                                </svg>
                            </span> Adres
                        </div>
                        <div class="uk-text-medium uk-margin-small-top">
                            {{$settings['adres']}}
                        </div>
                        <hr>
                    </div>


                    <div>
                        <div class="fs18 fw6 d-flex align-items-center gap-2">
                            <span class="uk-margin-small-right text-blue uk-text-large uk-icon" uk-icon="icon:phone;ratio: 2">
                                <svg width="28" height="28" viewBox="0 0 20 20">
                                    <path fill="none" stroke="#000" d="M15.5,17 C15.5,17.8 14.8,18.5 14,18.5 L7,18.5 C6.2,18.5 5.5,17.8 5.5,17 L5.5,3 C5.5,2.2 6.2,1.5 7,1.5 L14,1.5 C14.8,1.5 15.5,2.2 15.5,3 L15.5,17 L15.5,17 L15.5,17 Z"></path>
                                    <circle cx="10.5" cy="16.5" r=".8"></circle>
                                </svg>
                            </span> Telefon
                        </div>
                        <div class="uk-text-medium uk-margin-small-top uk-text-large">
                            <div>
                                <a href="tel:{{$settings['sabit-telefon-numarasi']}}" class="hover-top uk-display-inline-block" aria-label="Telefon" title="Telefon">
                                    {{$settings['sabit-telefon-numarasi']}}
                                </a>
                            </div>
                            <hr>
                        </div>
                    </div>

                    @if($settings['faks'])
                    <div>
                        <div class="fs18 fw6 d-flex align-items-center gap-2">
                            <span class="uk-margin-small-right text-blue uk-text-large uk-icon" uk-icon="icon:print;ratio: 2">
                                <svg width="28" height="28" viewBox="0 0 20 20">
                                    <polyline fill="none" stroke="#000" points="4.5 13.5 1.5 13.5 1.5 6.5 18.5 6.5 18.5 13.5 15.5 13.5"></polyline>
                                    <polyline fill="none" stroke="#000" points="15.5 6.5 15.5 2.5 4.5 2.5 4.5 6.5"></polyline>
                                    <rect width="11" height="6" fill="none" stroke="#000" x="4.5" y="11.5"></rect>
                                    <rect width="8" height="1" x="6" y="13"></rect>
                                    <rect width="8" height="1" x="6" y="15"></rect>
                                </svg>
                            </span> Faks
                        </div>
                        <div class="uk-text-medium uk-margin-small-top uk-text-large">
                            <div>{{$settings['faks']}}</div>
                        </div>
                        <hr>
                    </div>
                    @endif

                    @if($settings['whatsapp'])
                    <a href="https://api.whatsapp.com/send?phone={{preg_replace('/^\s?|[^\d]/', '', $settings['whatsapp'])}}" target="_blank">
                        <div class="fs18 fw6 d-flex align-items-center gap-2">
                            <span class="uk-margin-small-right text-blue uk-text-large uk-icon" uk-icon="icon:whatsapp;ratio: 2" style="color: #60a862;">
                                <svg width="28" height="28" viewBox="0 0 20 20">
                                    <path d="M16.7,3.3c-1.8-1.8-4.1-2.8-6.7-2.8c-5.2,0-9.4,4.2-9.4,9.4c0,1.7,0.4,3.3,1.3,4.7l-1.3,4.9l5-1.3c1.4,0.8,2.9,1.2,4.5,1.2 l0,0l0,0c5.2,0,9.4-4.2,9.4-9.4C19.5,7.4,18.5,5,16.7,3.3 M10.1,17.7L10.1,17.7c-1.4,0-2.8-0.4-4-1.1l-0.3-0.2l-3,0.8l0.8-2.9 l-0.2-0.3c-0.8-1.2-1.2-2.7-1.2-4.2c0-4.3,3.5-7.8,7.8-7.8c2.1,0,4.1,0.8,5.5,2.3c1.5,1.5,2.3,3.4,2.3,5.5 C17.9,14.2,14.4,17.7,10.1,17.7 M14.4,11.9c-0.2-0.1-1.4-0.7-1.6-0.8c-0.2-0.1-0.4-0.1-0.5,0.1c-0.2,0.2-0.6,0.8-0.8,0.9 c-0.1,0.2-0.3,0.2-0.5,0.1c-0.2-0.1-1-0.4-1.9-1.2c-0.7-0.6-1.2-1.4-1.3-1.6c-0.1-0.2,0-0.4,0.1-0.5C8,8.8,8.1,8.7,8.2,8.5 c0.1-0.1,0.2-0.2,0.2-0.4c0.1-0.2,0-0.3,0-0.4C8.4,7.6,7.9,6.5,7.7,6C7.5,5.5,7.3,5.6,7.2,5.6c-0.1,0-0.3,0-0.4,0 c-0.2,0-0.4,0.1-0.6,0.3c-0.2,0.2-0.8,0.8-0.8,2c0,1.2,0.8,2.3,1,2.4c0.1,0.2,1.7,2.5,4,3.5c0.6,0.2,1,0.4,1.3,0.5 c0.6,0.2,1.1,0.2,1.5,0.1c0.5-0.1,1.4-0.6,1.6-1.1c0.2-0.5,0.2-1,0.1-1.1C14.8,12.1,14.6,12,14.4,11.9"></path>
                                </svg>
                            </span> Whatsapp
                        </div>
                        <div class="uk-text-medium uk-margin-small-top uk-text-large">
                            <div>{{$settings['whatsapp']}}</div>
                        </div>
                    </a>
                    <hr>
                    @endif

                    @if($settings['kep-adresi'])
                    <div>
                        <div class="fs18 fw6 d-flex align-items-center gap-2">
                            <span class="uk-margin-small-right text-blue uk-text-large uk-icon" uk-icon="icon:mail;ratio: 2">
                                <svg width="28" height="28" viewBox="0 0 20 20">
                                    <polyline fill="none" stroke="#000" points="1.4,6.5 10,11 18.6,6.5"></polyline>
                                    <path d="M 1,4 1,16 19,16 19,4 1,4 Z M 18,15 2,15 2,5 18,5 18,15 Z"></path>
                                </svg>
                            </span> Kep Adresi
                        </div>
                        <div class="uk-text-medium uk-margin-small-top uk-text-large">
                            <div>{{$settings['kep-adresi']}}</div>
                        </div>
                        <hr>
                    </div>
                    @endif


                </div>

            </div>
            <div class="col-lg-6">
                <!-- Map -->
                <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1558.0943119395045!2d34.829173!3d38.644543000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152a68781e85e3ab%3A0x6ae1a0b9171a33c1!2sGoreme%20Municipality!5e0!3m2!1sen!2str!4v1720032635247!5m2!1sen!2str" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <!-- / Map -->
            </div>
        </div>


        <div class="row bg-white rounded p-4 mt-4">
            <div class="col-lg-12">
                <hr>

                @if(in_array('solutioncenter',$page->widgets??[]))
                @include('modules.solutioncenter.form')
                @endif


                @if(in_array('smscsignup',$page->widgets??[]))
                @include('modules.smscsignup.form')
                @endif

            </div>
        </div>



    </div>

</section>

@endsection