<section class="hero-padding-two" style="min-height: 940px;">
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
                </div>

            </div>

            <div class="col-lg-3">


                <div class="profile-card-2">
                    <img src="{{asset('images/baskan2-4x5.jpg')}}" class="img img-responsive rounded">
                    <div class="profile-name">Ömer Eren</div>
                    <div class="profile-button">
                        <a class="btn-primary-icon-sm radius-20" href="{{config('app.url')}}/tr/kurumsal/baskan">
                            Özgeçiş <i class="ri-arrow-right-up-line"></i>
                        </a>
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
                <a class="btn-primary-icon-sm mt-10" href="{{config('app.url')}}/tr/kurumsal/mesaj">
                    Başkandan Mesaj <i class="ri-arrow-right-up-line"></i>
                </a>
                <a class="btn-primary-icon-sm mt-10" href="{{config('app.url')}}/tr/kurumsal/fotograf">
                    Fotoğraf Galerisi <i class="ri-arrow-right-up-line"></i>
                </a>
            </div>

        </div>

    </div>
    <div class="shape-one d-none d-lg-block">
        <img src="{{asset('images/ai/_2f52f284-6985-4518-aabc-70a659ec2b3f.jpeg')}}" alt="{{ $settings['site-basligi'] }}" width="450">
    </div>
</section>