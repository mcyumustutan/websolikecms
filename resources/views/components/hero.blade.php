<section class="position-relative d-flex justify-content-center align-items-center" style="min-height: 940px; padding-top: 270px;">

    @foreach ($sliders as $slider)
    <!-- Video -->
    <div class="hero-bg-video">
        <video class="hero-slider-video video-cover" poster="{{Storage::url('public/sliders/' . $slider['img_url'])}}" loop autoplay muted>
            <!-- <source src="{{Storage::url('public/sliders/' . $slider['img_url'])}}" type="video/mp4"> -->
        </video>
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

    @endforeach

</section>