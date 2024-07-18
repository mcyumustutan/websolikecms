<!-- Pricing S t a r t -->
<section class="pricing-area bottom-padding section-bg-before-two">
    <div class="container">

        <div class="position-relative">
            <div class="row g-4">


                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="price-card h-calc wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-flex gap-7 mb-2">
                            <h4 class="title">GÖREME'DEN HABERLER</h4>
                        </div>
                        <ul class="feature-points">

                            @foreach ($projectsArray['news'] as $duyuru)

                            <li class="feature-point w-full">
                                <a href="{{config('app.url')}}/{{$duyuru['lang']}}/{{$duyuru['url']}}" class=" w-100">
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
                        <div class="button-section">
                            <a href="{{config('app.url')}}/{{App::getlocale()}}/tum-haberler">
                                <div class="btn-primary-icon-outline">
                                    <span class="pera">Tümünü Gör</span>
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </a>
                        </div>
                        <div class="imp-note">

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="price-card h-calc wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-flex gap-7 mb-2">
                            <h4 class="title">İHALE DUYURULARI</h4>
                        </div>
                        <ul class="feature-points">

                            @foreach ($projectsArray['bids'] as $duyuru)

                            <li class="feature-point w-full">
                                <a href="{{config('app.url')}}/{{$duyuru['lang']}}/{{$duyuru['url']}}" class=" w-100">
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
                        <div class="button-section">
                            <a href="{{config('app.url')}}/{{App::getlocale()}}/tum-ihaleler">
                                <div class="btn-primary-icon-outline">
                                    <span class="pera">Tümünü Gör</span>
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </a>
                        </div>
                        <div class="imp-note">

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="price-card h-calc wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-flex gap-7 mb-2">
                            <h4 class="title">VEFAT DUYURULARI</h4>
                        </div>
                        <ul class="feature-points">

                            @foreach ($projectsArray['bids'] as $duyuru)

                            <li class="feature-point w-full">
                                <a href="{{config('app.url')}}/{{$duyuru['lang']}}/{{$duyuru['url']}}" class=" w-100">
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
                        <div class="button-section">
                            <a href="{{config('app.url')}}/{{App::getlocale()}}/tum-ihaleler">
                                <div class="btn-primary-icon-outline">
                                    <span class="pera">Tümünü Gör</span>
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </a>
                        </div>
                        <div class="imp-note">

                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</section>
<!--/ End of Pricing -->