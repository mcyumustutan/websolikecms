<div class="container">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="border-section-title">
                <h4 class="title"> {{ __('websolike.Göreme Haberler')}}</h4>
            </div>
        </div>
    </div>
</div>
<!-- Details Banner Slider -->
<div class="tour-details-banner">
    <div class="swiper tourSwiper-active">
        <div class="swiper-wrapper">
            @foreach ($projectsArray['announcements'] as $duyuru)
            <div class="swiper-slide">
                <img src="{{$duyuru->cover}}" alt="{{$duyuru['title']}}">
                <div class="content position-absolute">
                    <a href="{{$duyuru['fullurl']}}">
                        <p class="title">{{$duyuru['title']}}</p>
                        <p class="description">{{$duyuru['meta_description']}}</p>
                    </a>

                </div>
            </div>
            @endforeach

        </div>
        <div class="swiper-button-next"><i class="ri-arrow-right-s-line"></i></div>
        <div class="swiper-button-prev"><i class="ri-arrow-left-s-line"></i></div>
    </div>
</div>
<!-- / Slider-->

<section class="destination-details-section pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="border-section-title">
                    <h4 class="title"> {{ __('websolike.Göreme Haberler')}}</h4>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-xl-8 col-lg-7 offset-lg-2">


                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        @foreach ($projectsArray['announcements'] as $duyuru)
                        <div class="swiper-slide d-flex align-items-end">
                            <img src="{{$duyuru->cover}}" alt="{{$duyuru['title']}}" />
                            <div class="content position-absolute">
                                <p class="title">{{$duyuru['title']}}</p>
                                <p class="description">{{$duyuru['meta_description']}}</p>
                            </div>
                        </div>

                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($projectsArray['announcements'] as $duyuru)
                        <div class="swiper-slide">
                            <img src="{{$duyuru->cover}}" alt="{{$duyuru['title']}}" />
                        </div>

                        @endforeach

                    </div>
                </div>



            </div>

            <!-- <div class="col-xl-4 col-lg-5">
                              <div class="profile-card-4 text-center">
                                  <img src="{{asset('images/baskan2-4x5.jpg')}}" height="520" class="img img-responsive">
                                  <div class="profile-content">
                                      <div class="profile-name">Ömer Eren</div>
                                      <div class="profile-description">T.C Göreme Belediyesi Başkanı</div>
                                      <div class="row">
                                          <div class="d-flex align-items-center justify-content-center">

                                              @if($settings['instagramcom'])
                                              <a target="_blank" href="{{$settings['instagramcom']}}">
                                                  <i class="ri-instagram-line fs-4"></i>
                                              </a>
                                              @endif

                                              @if($settings['xcom'])
                                              <a target="_blank" href="{{$settings['xcom']}}">
                                                  <i class="ri-twitter-line fs-4"></i>
                                              </a>
                                              @endif

                                              @if($settings['whatsapp'])
                                              <a target="_blank" href="https://api.whatsapp.com/send?phone={{$settings['whatsapp']}}">
                                                  <i class="ri-whatsapp-line fs-4"></i>
                                              </a>
                                              @endif

                                              @if($settings['facebookcom'])
                                              <a target="_blank" href="{{$settings['facebookcom']}}">
                                                  <i class="ri-facebook-line fs-4"></i>
                                              </a>
                                              @endif

                                              @if($settings['youtubecom'])
                                              <a target="_blank" href="{{$settings['youtubecom']}}">
                                                  <i class="ri-youtube-line fs-4"></i>
                                              </a>
                                              @endif

                                              @if($settings['tiktokcom'])
                                              <a target="_blank" href="{{$settings['tiktokcom']}}">
                                                  <i class="ri-tiktok-line fs-4"></i>
                                              </a>
                                              @endif

                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div> -->



        </div>
    </div>


    <div class="shape-bg">
        <img src="{{asset('images/icon/bg-shape.png')}}" alt="travello">
    </div>
    <div class="shape-bg-about">
        <img src="{{asset('images/icon/bg-shape-2.png')}}" alt="travello">
    </div>

    <div class="col-12 text-center">
        <div class="section-button d-inline-block">
            <a href="{{config('app.url')}}/{{App::getlocale()}}/tum-duyurular">
                <div class="btn-primary-icon-sm">
                    <p class="pera">{{__('websolike.Tüm Duyurular')}}</p>
                    <i class="ri-arrow-right-up-line"></i>
                </div>
            </a>
        </div>
    </div>

</section>


<!--/ End-of About US-->