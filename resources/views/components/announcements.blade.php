<div class="container">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="border-section-title">
                <h4 class="title"> {{ __('websolike.Göreme Haberler')}}</h4>
            </div>
        </div>
    </div>
</div>
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