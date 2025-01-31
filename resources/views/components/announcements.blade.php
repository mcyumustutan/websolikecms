<section class="hero-padding mt-4">
    <div class="container">


        <div class="row">
            <div class="col-lg-9 mb-4 rounded">
                <div class="rounded">
                    <div class="swiper announcement-swiper rounded">
                        <div class="swiper-wrapper rounded">
                            @foreach ($projectsArray['news'] as $duyuru)

                            <div class="swiper-slide rounded">
                                <a href="{{$duyuru['fullurl']}}">
                                    <img src="{{$duyuru->cover}}" alt="{{$duyuru['title']}}" class="rounded" style="height: auto;">
                                    <div class="content position-absolute text-left">
                                        <p class="title">{{$duyuru['title']}}</p>
                                        <p class="description">
                                            {{$duyuru['meta_description']}}
                                        </p>
                                        <p class="text-white text-start"><i class="ri-calendar-todo-fill"></i> {{$duyuru['display_only_date']}}</p>
                                    </div>
                                </a>
                            </div>

                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <div thumbsSlider="" class="swiper thumb-mySwiper rounded p-1  mt-1 shadow  bg-white d-none d-sm-none d-lg-block d-xl-block d-md-block">
                        <div class="swiper-wrapper rounded">
                            @foreach ($projectsArray['news'] as $duyuru)

                            <div class="swiper-slide rounded swiper-thumbnail">
                                <img src="{{$duyuru->cover}}" alt="{{$duyuru['title']}}" class="rounded">
                            </div>

                            @endforeach

                        </div>
                    </div>
                </div>

            </div>


            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card mayor-card border-0 rounded shadow">
                    <div class="card-body p-0">
                        <div class="card-img" style="height:525px; overflow: hidden;">
                            <a href="{{config('app.url')}}/tr/kurumsal/baskan"><img src="{{asset('images/omer-eren.jpg')}}" alt="" class=""></a>
                        </div>
                        <div class="pt-2 pb-4 text-center">
                            <h5 class="mb-0 mt-4 fs-1"><span style="font-weight:700">ÖMER</span> <span style="font-weight:700">EREN</span></h5>
                            <p class="small text-muted pb-2">T.C. Göreme Belediye Başkanı</p>

                            <ul class="social list-inline mt-3">
                                <li class="list-inline-item m-0">
                                    <a target="_blank" href="https://www.instagram.com/baskanomereren/">
                                        <img src="{{asset('images/social/instagram.png')}}" width="28" alt="{{ $settings['site-basligi'] }}" title="ÖMER EREN" />
                                    </a>
                                </li>
                                <li class="list-inline-item m-0">
                                    <a target="_blank" href="{{$settings['facebookcom']}}">
                                        <img src="{{asset('images/social/facebook.png')}}" width="28" alt="{{ $settings['site-basligi'] }}" title="ÖMER EREN" />
                                    </a>
                                </li>
                                <li class="list-inline-item m-0">
                                    <a target="_blank" href="https://x.com/baskanomereren">
                                        <img src="{{asset('images/social/x.png')}}" width="28" alt="{{ $settings['site-basligi'] }}" title="ÖMER EREN" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



            </div>

        </div>

    </div>


    @include('components/shapes')
</section>