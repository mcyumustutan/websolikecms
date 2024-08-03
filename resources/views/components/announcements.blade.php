<section class="hero-padding-two goreme-bg-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="border-section-title">
                    <h4 class="title"> {{ __('websolike.Haberler')}}</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9 mb-4 rounded">
                <div class="tour-details-banner rounded">
                    <div class="swiper announcement-swiper rounded">
                        <div class="swiper-wrapper rounded">
                            @foreach ($projectsArray['announcements'] as $duyuru)

                            <div class="swiper-slide rounded">
                                <img src="{{$duyuru->cover}}" alt="{{$duyuru['title']}}" class="rounded">
                                <div class="content position-absolute">
                                    <a href="{{$duyuru['fullurl']}}">
                                        <p class="title">{{$duyuru['title']}}</p>
                                        <p class="description">{{$duyuru['meta_description']}}</p>
                                    </a>

                                </div>
                            </div>

                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <div thumbsSlider="" class="swiper thumb-mySwiper rounded p-1  mt-1 shadow  bg-gradient ">
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
                    <img src="{{asset('images/baskan2-4x5.jpg')}}" class="img img-responsive rounded">
                    <div class="profile-name">
                        Ömer Eren
                        <p>T.C. Göreme Belediye Başkan</p>
                    </div>

                    <div class="profile-icons">
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
                <a class="btn-primary-icon-sm mt-10 shadow" href="{{config('app.url')}}/tr/kurumsal/baskan">
                    Özgeçmiş <i class="ri-arrow-right-up-line"></i>
                </a>
                <a class="btn-primary-icon-sm mt-10 shadow" href="{{config('app.url')}}/tr/kurumsal/mesaj">
                    Başkandan Mesaj <i class="ri-arrow-right-up-line"></i>
                </a>
            </div>

        </div>

    </div>


</section>