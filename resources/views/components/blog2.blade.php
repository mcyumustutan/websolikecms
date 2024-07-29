<section class="section-padding2 bg-goreme">
    <div class="container">


        <div class="row">
            <div class="col-lg-12 mb-8 mt-20">
                <div class="border-section-title">
                    <h4 class="title">Yapılacak Aktiviteler</h4>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="swiper favSwiper-active">
                <div class="swiper-wrapper">
                    @foreach ($projectsArray['activityBoxes'] as $exp)

                    <div class="swiper-slide">
                        <div class="col mb-4">
                            <article class="news-card-two wow fadeInUp bg-white" data-wow-delay="0.0s" style="border:none">
                                <figure class="news-banner-two imgEffect">
                                    <a href="{{config('app.url')}}/{{$exp['lang']}}/{{$exp['url']}}"><img src="{{$exp->box}}" alt="travello"></a>
                                </figure>
                                <div class="card-body">
                                    <small class="card-meta mb-4">
                                        <a herf="{{config('app.url')}}/{{$exp['lang']}}/{{$exp['url']}}">{{$exp['title']}}</a>
                                    </small>

                                    @if($exp['meta_description'])
                                    <h4 class="card-title mt-4">
                                        <a herf="{{config('app.url')}}/{{$exp['lang']}}/{{$exp['url']}}">{{$exp['meta_description']}}</a>
                                    </h4>
                                    @endif

                                </div>
                            </article>
                        </div>
                    </div>

                    @endforeach



                </div>

                <div class="swiper-button-next">
                    <i class="ri-arrow-right-s-line"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="ri-arrow-left-s-line"></i>
                </div>
            </div>
        </div>
    </div>

</section>