<section class="  about-area  bottom-padding1 position-relative">
    <div class="container">

        <div class="position-relative">
            <div class="row g-4">

                <!-- announcements -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <h2 class="box-title text-uppercase">{{__('websolike.Güncel Duyurular')}}</h2>
                            <div class="controls">
                                <a href="{{config('app.url')}}/{{App::getlocale()}}/tum-duyurular">
                                    <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div>
                        </div>
                        <div class="box-body">
                            <ul>

                                @foreach ($projectsArray['announcements'] as $duyuru)

                                <li class="w-full">
                                    <a href="{{$duyuru['fullUrl']}}" class=" w-100">
                                        <div class="announcement-item w-100">

                                            <div class="announcement-text">
                                                <p class="text-primary">{{$duyuru['short_content']}}</p>
                                                <p>
                                                    <i class="ri-calendar-todo-fill"></i> {{$duyuru['display_only_date']}}
                                                    @if($duyuru['display_only_hour']!=="00:00")
                                                    <i class="ri-time-line"></i> {{$duyuru['display_only_hour']}}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>


                <!-- bids -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <h2 class="box-title text-uppercase">{{__('websolike.İhale Duyuruları')}}</h2>
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

                                            <div class="announcement-text">
                                                <p class="text-primary">{{$duyuru['title']}}</p>

                                                <p>
                                                    <i class="ri-calendar-todo-fill"></i> {{$duyuru['display_only_date']}}
                                                    @if($duyuru['display_only_hour']!=="00:00")
                                                    <i class="ri-time-line"></i> {{$duyuru['display_only_hour']}}
                                                    @endif
                                                </p>


                                                @if($duyuru['highlited_value_1'])
                                                <small><i class="ri-map-pin-line"></i> {{$duyuru['highlited_value_1']}}</small>
                                                @endif
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>


                <!-- deaths -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <h2 class="box-title text-uppercase">{{__('websolike.Vefat Haberleri')}}</h2>
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
                                    <a href="{{config('app.url')}}/{{App::getlocale()}}/vefat-ilanlari?table-search={{$duyuru['adSoyad']}}" class=" w-100">
                                        <div class="announcement-item w-100">

                                            <div class="announcement-text">
                                                <p class="text-primary">{{$duyuru['adSoyad']}}</p>
                                                <p><i class="ri-calendar-todo-fill"></i>{{$duyuru['vefatTarihi']}} <i class="ri-time-line"></i>{{$duyuru['cenazeZamani']}}</p>
                                                <small><i class="ri-map-pin-line"></i> {{$duyuru['cenazeYeri']}}</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>



                <!-- comingEvents -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <h2 class="box-title text-uppercase">{{__('websolike.Yaklaşan Etkinlikler')}}</h2>
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
                                            <div class="event w-100  h-100" style="background-color: white;">
                                                <a href="{{$duyuru['fullUrl']}}" title="{{$duyuru['title']}}">
                                                    <div class="photo rounded" style="width: auto; height: 300px; overflow: hidden;">
                                                        <img width="100%" height="400" class="rounded img-fluid" src="{{$duyuru['cover']}}" alt="{{$duyuru['title']}}">
                                                    </div>
                                                    <div class="info">
                                                        <div class="name p-2 mt-2">
                                                            <strong>{{Str::limit($duyuru['title'],40,'...')}}</strong>
                                                            <p></p>
                                                        </div>
                                                        <div class="items w-100">

                                                            <div class="row">
                                                                <div class="col-sm">
                                                                    <div class="item">
                                                                        <label><i class="ri-calendar-todo-fill"></i></label>
                                                                        <span>{{$duyuru['display_only_date']}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm">
                                                                    <div class="item">
                                                                        <label><i class="ri-time-line"></i></label>
                                                                        <span>{{$duyuru['display_only_hour']}}</span>
                                                                    </div>
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



            </div>
        </div>
    </div>

    @include('components/shapes')
</section>