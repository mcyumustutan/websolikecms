<!-- About Us area S t a r t -->
<section class="why-area">
    <div class="container">
 

        <div class="row">
            <div class="col-lg-12">
                <div class="border-section-title">
                    <h4 class="title"> {{ __('websolike.Göreme Haberler')}}</h4>
                </div>
            </div>
        </div>


        <div class="row g-4">
            <div class="col-xl-7 col-lg-7">
                <div class="tab-content" id="v-pills-tabContent">
                    @php
                    $sayac = 1;
                    @endphp

                    @foreach ($duyurular as $duyuru)
                    <div class="tab-pane fade  @if($sayac == 1) show active @endif" id="v-{{$duyuru['id']}}" role="tabpanel" aria-labelledby="v-{{$duyuru['id']}}-tab">
                        <div class="about-banner imgEffect4">
                            <img src="{{$duyuru->cover}}" alt="{{$duyuru['title']}}">
                        </div>
                    </div>
                    @php
                    $sayac++;
                    @endphp

                    @endforeach
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="key-points position-relative z-12" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @php
                    $sayac2 = 1;
                    @endphp
                    @foreach ($duyurular as $duyuru)
                    <div class="key-point @if($sayac2 == 1) active @endif" id="v-{{$duyuru['id']}}-tab" data-bs-toggle="pill" data-bs-target="#v-{{$duyuru['id']}}" role="tab" aria-controls="v-{{$duyuru['id']}}" aria-selected="true">

                        <div class="key-content">
                            <h4 class="title">{{$duyuru['title']}}</h4>
                            <p class="pera">
                                {{$duyuru['meta_description']}}
                                <small class="text-muted">{{$duyuru['display_date']}}</small>
                                <a href="{{config('app.url')}}/{{$duyuru['lang']}}/{{$duyuru['url']}}">...Devamı</a>
                            </p>
                        </div>
                    </div>
                    @php
                    $sayac2++;
                    @endphp

                    @endforeach

                </div>
            </div>
        </div>


    </div>

</section>
<!--/ End-of About US-->

<div class="row">
    <div class="col-12 text-center">
        <div class="section-button d-inline-block">
            <a href="{{config('app.url')}}/{{$duyuru['lang']}}/tum-duyurular">
                <div class="btn-primary-icon-sm">
                    <p class="pera">{{__('websolike.Tüm Duyurular')}}</p>
                    <i class="ri-arrow-right-up-line"></i>
                </div>
            </a>
        </div>
    </div>
</div>