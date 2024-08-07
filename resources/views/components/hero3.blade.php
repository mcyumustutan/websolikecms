<section class="position-relative justify-content-center align-items-center">
    <!-- Swiper -->
    <div class="swiper mySwiperHero">
        <div class="swiper-wrapper">
            @foreach ($sliders as $slider)
            <div class="swiper-slide">
                <div class="position-absolute" style="height: 100%; width:100%;">
                    <img src="{{Storage::url('public/sliders/' . $slider['img_url'])}}" />
                </div>
                <div class="container d-flex justify-content-center align-items-center wow fadeInUp  w-50">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-caption-three wow fadeInUp text-center">
                                <img src="{{asset('images/kapadokyanin-baskenti.png')}}" class="img-fluid" />
                                <h4 class="title wow fadeInUp rounded  text-uppercase" data-wow-delay="0.0s">
                                    {!!$slider['info']!!}
                                </h4>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>