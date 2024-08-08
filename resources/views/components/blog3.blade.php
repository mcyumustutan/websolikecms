<section class="mt-4 pt-4 pb-5 mb-5 position-relative wow fadeInUp">
    <div class="container">

        <div class="row justify-content-center position-relative z-10">
            <div class="col-xl-7 col-lg-7">
                <div class="section-title mx-auto text-center">
                <img src="{{asset('images/kulturel-miras.png')}}" class="img-fluid"  width="645" header="142"/>
                    <h4 class="title">
                        {{__('websolike.Kültürel Miras')}}
                    </h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="swiper favSwiper-active">
                <div class="swiper-wrapper">
                    @foreach ($projectsArray['kulturelMiras'] as $exp)

                    <div class="swiper-slide">
                        <div class="col mb-4">
                            <article class="news-card-two wow fadeInUp bg-white" data-wow-delay="0.0s" style="border:none">
                                <figure class="news-banner-two imgEffect">
                                    <a href="{{config('app.url')}}/{{$exp['lang']}}/{{$exp['url']}}"><img src="{{$exp->box}}" alt="{{$exp['title']}}"></a>
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

    
    @include('components/shapes')
</section>