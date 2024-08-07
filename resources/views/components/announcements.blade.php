<section class="hero-padding mt-5">
    <div class="container">


        <div class="row">
            <div class="col-lg-9 mb-4 rounded">
                <div class="rounded">
                    <div class="swiper announcement-swiper rounded">
                        <div class="swiper-wrapper rounded">
                            @foreach ($projectsArray['announcements'] as $duyuru)

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
                            @foreach ($projectsArray['announcements'] as $duyuru)

                            <div class="swiper-slide rounded">
                                <img src="{{$duyuru->cover}}" alt="{{$duyuru['title']}}" class="rounded">
                            </div>

                            @endforeach

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-3">


                <div class="profile-card-2 shadow">
                    <img src="{{asset('images/omer-eren.jpg')}}" class="img rounded">

                    <div class="profile-icons" style="background: rgba(0,0,0,.5);">
                        <a class=" " href="{{config('app.url')}}/tr/kurumsal/baskan">
                            Özgeçmiş <i class="ri-arrow-right-up-line"></i>
                        </a>
                        <a class=" " href="{{config('app.url')}}/tr/kurumsal/mesaj">
                            Başkandan Mesaj <i class="ri-arrow-right-up-line"></i>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/baskanomereren/">
                            <i class="ri-instagram-line fs-4"></i>
                        </a>
                        <a target="_blank" href="{{$settings['facebookcom']}}">
                            <i class="ri-facebook-line fs-4"></i>
                        </a>
                        <a target="_blank" href="https://x.com/baskanomereren">
                            <i class="ri-twitter-line fs-4"></i>
                        </a>
                    </div>
                </div>
                <div class="mayor-name">
                    <b>ÖMER</b> EREN
                    <p>T.C. Göreme Belediye Başkan</p>
                </div>

            </div>

        </div>

    </div>


    @include('components/shapes')
</section>