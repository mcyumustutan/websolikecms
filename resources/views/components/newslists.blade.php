<!-- Pricing S t a r t -->
<section class="pricing-area bottom-padding section-bg-before-two">
    <div class="container">

        <div class="position-relative">
            <div class="row g-4">


                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box shadow" id="box-events">
                        <div class="box-header">
                            <h2 class="box-title">{{__('websolike.Yaklaşan Etkinlikler')}}</h2>
                            <div class="controls">

                                <a class="swiper-events-button-prev"><i class="ri-arrow-left-s-line"></i></a>

                                <a href="{{config('app.url')}}/{{App::getlocale()}}/tum-etkinlikler">
                                    <i class="ri-arrow-right-up-line"></i>
                                </a>

                                <a class="swiper-events-button-next"><i class="ri-arrow-right-s-line"></i></a>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="event-list owl-carousel owl-loaded owl-drag">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($projectsArray['comingEvents'] as $duyuru)
                                        <div class="swiper-slide">
                                            <div class="event w-100">
                                                <a href="{{$duyuru['fullUrl']}}" title="{{$duyuru['title']}}">
                                                    <div class="photo">
                                                        <img width="300" height="400" src="{{$duyuru['cover']}}" alt="{{$duyuru['title']}}">
                                                    </div>
                                                    <div class="info">
                                                        <div class="name p-2 mt-2">
                                                            <strong>{{$duyuru['title']}}</strong>
                                                            <p></p>
                                                        </div>
                                                        <div class="items w-100">

                                                            <div class="d-block">
                                                                <div class="item">
                                                                    <label><i class="ri-calendar-todo-fill"></i></label>
                                                                    <span>{{$duyuru['display_date']}}</span>
                                                                </div>
                                                            </div>

                                                            <div class="d-block">
                                                                <div class="item">
                                                                    <label><i class="ri-map-pin-line"></i></label>
                                                                    <span>{{$duyuru['highlited_value_1']}}</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                    <div class="autoplay-progress">
                                        <svg viewBox="0 0 48 48">
                                            <circle cx="24" cy="24" r="20"></circle>
                                        </svg>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box shadow" id="box-events">
                        <div class="box-header">
                            <h2 class="box-title">{{__('websolike.İhale Duyuruları')}}</h2>
                            <div class="controls">
                                <a href="{{config('app.url')}}/{{App::getlocale()}}/tum-ihaleler">
                                    <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div>
                        </div>
                        <div class="box-body">
                            <ul class="feature-points">

                                @foreach ($projectsArray['bids'] as $duyuru)

                                <li class="feature-point w-full">
                                    <a href="{{$duyuru['fullUrl']}}" class=" w-100">
                                        <div class="announcement-item w-100">
                                            <span class="announcement-icon"><i class="ri-arrow-right-line"></i></span>
                                            <div class="announcement-text">
                                                <p>{{$duyuru['title']}}</p>
                                                <small>{{$duyuru['display_date']}}</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>



                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box shadow" id="box-events">
                        <div class="box-header">
                            <h2 class="box-title">{{__('websolike.Vefat Haberleri')}}</h2>
                            <div class="controls">
                                <a href="{{config('app.url')}}/{{App::getlocale()}}/vefat-ilanlari">
                                    <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div>
                        </div>
                        <div class="box-body">
                            <ul class="feature-points">

                                @foreach ($projectsArray['deaths'] as $duyuru)

                                <li class="feature-point w-full">
                                    <a href="{{$duyuru['fullUrl']}}" class=" w-100">
                                        <div class="announcement-item w-100">
                                            <span class="announcement-icon"><i class="ri-arrow-right-line"></i></span>
                                            <div class="announcement-text">
                                                <p>{{$duyuru['title']}}</p>
                                                <small>{{$duyuru['display_date']}}</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>





            </div>
        </div>
    </div>
</section>
<!--/ End of Pricing -->