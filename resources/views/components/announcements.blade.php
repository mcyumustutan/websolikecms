<section class="">
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

                @php
                if($wheather['icon']){
                $weatherimgpath = 'images/weather/'.$wheather['icon'] .'.svg';
                }
                @endphp

                @if(isset($weatherimgpath))
                <div class="d-flex justify-content-center align-items-center px-2 rounded fs-2 mt-4" style="background: rgba(32, 198, 239, 0.2);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(5px);
-webkit-backdrop-filter: blur(5px);
border: 1px solid rgb(255 255 255 / 30%);">
                    <span class="fw-bold text-black">{{$wheather['temp']}} &deg;C</span> <img src="{{asset($weatherimgpath)}}" />
                    <p><span class="text-capitalize fs-5">{{$wheather['summary']}}</span></p>
                </div>
                @endif
            </div>

        </div>

    </div>
</section>