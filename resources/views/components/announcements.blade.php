<section class="hero-padding mt-5">
    <div class="container">


        <div class="row">
            <div class="col-lg-9 mb-4 rounded">
                <div class="rounded">
                    <div class="swiper announcement-swiper rounded">
                        <div class="swiper-wrapper rounded">
                            @foreach ($projectsArray['news'] as $duyuru)

                            <div class="swiper-slide rounded">
                                <img src="{{$duyuru->cover}}" alt="{{$duyuru['title']}}" class="rounded">
                                <div class="content position-absolute">
                                    <a href="{{$duyuru['fullurl']}}">
                                        <p class="title">{{$duyuru['title']}}</p>
                                        <p class="description">{{$duyuru['meta_description']}}</p>


                                        <div class="image-badge">
                                            <p>
                                                <i class="ri-calendar-todo-fill"></i> {{$duyuru['display_only_date']}}
                                                @if($duyuru['display_only_hour']!=="00:00")
                                                <i class="ri-time-line"></i> {{$duyuru['display_only_hour']}}
                                                @endif
                                            </p>
                                        </div>


                                    </a>

                                </div>
                            </div>

                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <div thumbsSlider="" class="swiper thumb-mySwiper rounded p-1  mt-1 shadow  bg-white ">
                        <div class="swiper-wrapper rounded">
                            @foreach ($projectsArray['news'] as $duyuru)

                            <div class="swiper-slide rounded">
                                <img src="{{$duyuru->cover}}" alt="{{$duyuru['title']}}" class="rounded">
                            </div>

                            @endforeach

                        </div>
                    </div>
                </div>

            </div>


            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card mayor-card  border-0 rounded shadow">
                    <div class="card-body p-0">
                        <div class="card-img">
                            <img src="{{asset('images/omer-eren.jpg')}}" alt="" class="">
                        </div>
                        <div class="p-4 text-center">
                            <h5 class="mb-0">ÖMER EREN</h5>
                            <p class="small text-muted">T.C. Göreme Belediye Başkanı</p>
                            <a class="card-link" href="{{config('app.url')}}/tr/kurumsal/baskan">
                                Özgeçmiş <i class="ri-arrow-right-up-line"></i>
                            </a>
                            <a class="card-link" href="{{config('app.url')}}/tr/kurumsal/mesaj">
                                Başkandan Mesaj <i class="ri-arrow-right-up-line"></i>
                            </a>
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