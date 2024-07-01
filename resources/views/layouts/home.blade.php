@extends('layouts.master')

@section('title', config('app.name'))

@section('content')

<!-- Hero area S t a r t-->
<section class="hero-padding-for-three video-overlay position-relative" style="min-height: 650px;">


    @foreach ($sliders as $slider)
    <!-- Video -->
    <div class="hero-bg-video">
        <video class="hero-slider-video video-cover" poster="images/hero/hero-three-banner.png" loop autoplay muted>
            <source src="{{Storage::url('public/sliders/' . $slider['img_url'])}}" type="video/mp4">

        </video>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-xl-12">
                <div class="hero-caption-three position-relative z-3">
                    <h4 class="title wow fadeInUp" data-wow-delay="0.0s">
                        {{$slider['title']}}
                    </h4>
                    <p class="pera wow fadeInUp" data-wow-delay="0.1s"> {{$slider['info']}}</p>
                </div>

            </div>
        </div>
    </div>

    @endforeach

</section>
<!--/ End-of Hero-->

@include('components.announcements')

<!-- About Us area S t a r t -->
<section class="about-area">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-5 col-lg-6">
                <div class="section-title mx-430 mb-30 w-md-100">
                    <h4 class="title">
                        Başkan Özgeçmiş
                    </h4>
                    <p class="pera">
                        01.01.1964 yılında Nevşehir’in Göreme Kasabası’nda doğdu. İlkokul eğitimini Göreme,
                        ortaokul ve lise eğitimini Nevşehir’de tamamlayan Ömer Eren sırasıyla Göreme İlkokulu, H.
                        Lütfi Pamukçu Ortaokulu ve Nevşehir Lisesi’nde eğitim hayatını tamamladı.
                    </p>
                    <p class="pera">

                        1986 yılında turizme atılan Ömer Eren, 1986-1995 yılları arasında Göreme Belediyesi’nde
                        makam şoförlüğüne başladı. 1995 yılında makam şoförlüğünü bırakan Eren turizme devam
                        etti. 1999 yılındaki yerel seçimde muhtar adayı olan Eren seçim sonucunda Göreme Kasabası,
                        İsali-Gaferli-Avcılar Mahallesi muhtarı olarak seçildi. 2004 yılana kadar muhtarlık yapan
                        Eren, 31 Mart 2019 yerel seçimde halkının tam desteğini alarak Göreme Belediye Başkanı
                        oldu. Ömer Eren, evli ve iki çocuk babasıdır.
                    </p>
                    <div class="section-button mt-27 d-inline-block">
                        <a href="about.html" class="btn-primary-icon-sm radius-20">
                            <p class="pera mt-0">Learn More</p>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="about-count-section about-count-before-bg">
                    <div class="banner">
                        <img src="https://www.goreme.bel.tr/assets/media/baskan2.jpg" alt="travello">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End-of About US-->



<!-- Packages S t a r t -->
<section class="package-area section-padding2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-7">
                <div class="section-title mx-430 mx-auto text-center">
                    <h4 class="title">
                        GÖREME BELEDİYESİ PROJELERİMİZ
                    </h4>
                </div>
            </div>
        </div>
        <ul class="nav nav-pills package-pills" id="pills-tab" role="tablist">
            <li class="nav-item package-item" role="presentation">
                <button class="nav-link package-nav active" id="pills-london-tab" data-bs-toggle="pill" data-bs-target="#pills-london" role="tab" aria-controls="pills-london" aria-selected="true">
                    Tamamlanan Projeler
                </button>
            </li>
            <li class="nav-item package-item" role="presentation">
                <button class="nav-link package-nav" id="pills-bangkok-tab" data-bs-toggle="pill" data-bs-target="#pills-bangkok" role="tab" aria-controls="pills-bangkok" aria-selected="false">
                    Devam Eden Projeler
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link package-nav" id="pills-hongkong-tab" data-bs-toggle="pill" data-bs-target="#pills-hongkong" role="tab" aria-controls="pills-hongkong" aria-selected="false">
                    Planlanan Projeler
                </button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-london" role="tabpanel" aria-labelledby="pills-london-tab">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-4.png" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-3.png" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-bangkok" role="tabpanel" aria-labelledby="pills-bangkok-tab">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-5.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-6.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-7.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-8.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-hongkong" role="tabpanel" aria-labelledby="pills-hongkong-tab">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-9.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-10.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-11.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-12.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-manchester" role="tabpanel" aria-labelledby="pills-manchester-tab">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-13.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-14.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-15.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-16.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-dubai" role="tabpanel" aria-labelledby="pills-dubai-tab">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-17.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-18.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-19.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="package-card">
                            <div class="package-img imgEffect4">
                                <a href="tour-details.html">
                                    <img src="assets/images/package/package-20.jpg" alt="travello">
                                </a>
                                <div class="image-badge">
                                    <p class="pera">Featured</p>
                                </div>
                            </div>
                            <div class="package-content">
                                <h4 class="area-name">
                                    <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                </h4>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <div class="name">Bangkok, Thailand</div>
                                </div>
                                <div class="packages-person">
                                    <div class="count">
                                        <i class="ri-time-line"></i>
                                        <p class="pera">3 Days 2 Night</p>
                                    </div>
                                    <div class="count">
                                        <i class="ri-user-line"></i>
                                        <p class="pera">2 Person</p>
                                    </div>
                                </div>
                                <div class="price-review">
                                    <div class="d-flex gap-10">
                                        <p class="light-pera">From</p>
                                        <p class="pera">$95</p>
                                    </div>
                                    <div class="rating">
                                        <i class="ri-star-s-fill"></i>
                                        <p class="pera">4.7 (20 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-button d-inline-block">
                    <a href="tour-list.html">
                        <div class="btn-primary-icon-sm">
                            <p class="pera">View All Tour</p>
                            <i class="ri-arrow-right-up-line"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End of Packages -->


<!-- Explore S t a r t -->
<section class="explore-area section-padding2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-7">
                <div class="section-title text-center mx-430 mx-auto position-relative mb-60">
                    <h4 class="title">
                        GÖEME'Yİ KEŞFEDİN
                    </h4>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div class="all-explore" id="v-pills-tab-three" role="tablist" aria-orientation="vertical">
                    <div class="explore-btn active" id="pills-explore-one-tab" data-bs-toggle="pill" data-bs-target="#pills-explore-one" role="tab" aria-controls="pills-explore-one" aria-selected="true">
                        <div class="d-flex gap-16 align-items-center">
                            <div class="explore-icon">
                                <img src="images/icon/explore-1.svg" alt="travello">
                            </div>
                            <h4 class="name">Fishing & Swimming</h4>
                        </div>
                    </div>
                    <div class="explore-btn" id="pills-explore-two-tab" data-bs-toggle="pill" data-bs-target="#pills-explore-two" role="tab" aria-controls="pills-explore-two" aria-selected="true">
                        <div class="d-flex gap-16 align-items-center">
                            <div class="explore-icon">
                                <img src="images/icon/explore-2.svg" alt="travello">
                            </div>
                            <h4 class="name">Music & Relaxing</h4>
                        </div>
                    </div>
                    <div class="explore-btn" id="pills-explore-three-tab" data-bs-toggle="pill" data-bs-target="#pills-explore-three" role="tab" aria-controls="pills-explore-three" aria-selected="true">
                        <div class="d-flex gap-16 align-items-center">
                            <div class="explore-icon">
                                <img src="images/icon/explore-3.svg" alt="travello">
                            </div>
                            <h4 class="name">Trailers & Sports</h4>
                        </div>
                    </div>
                    <div class="explore-btn" id="pills-explore-four-tab" data-bs-toggle="pill" data-bs-target="#pills-explore-four" role="tab" aria-controls="pills-explore-four" aria-selected="true">
                        <div class="d-flex gap-16 align-items-center">
                            <div class="explore-icon">
                                <img src="images/icon/explore-4.svg" alt="travello">
                            </div>
                            <h4 class="name">Mountain & Hill Hiking</h4>
                        </div>
                    </div>
                    <div class="explore-btn" id="pills-explore-five-tab" data-bs-toggle="pill" data-bs-target="#pills-explore-five" role="tab" aria-controls="pills-explore-five" aria-selected="true">
                        <div class="d-flex gap-16 align-items-center">
                            <div class="explore-icon">
                                <img src="images/icon/explore-5.svg" alt="travello">
                            </div>
                            <h4 class="name">Paragliding Tours</h4>
                        </div>
                    </div>
                    <div class="explore-btn" id="pills-explore-six-tab" data-bs-toggle="pill" data-bs-target="#pills-explore-six" role="tab" aria-controls="pills-explore-six" aria-selected="true">
                        <div class="d-flex gap-16 align-items-center">
                            <div class="explore-icon">
                                <img src="images/icon/explore-1.svg" alt="travello">
                            </div>
                            <h4 class="name">Music & Relaxing</h4>
                        </div>
                    </div>
                    <div class="explore-btn" id="pills-explore-seven-tab" data-bs-toggle="pill" data-bs-target="#pills-explore-seven" role="tab" aria-controls="pills-explore-seven" aria-selected="true">
                        <div class="d-flex gap-16 align-items-center">
                            <div class="explore-icon">
                                <img src="images/icon/explore-2.svg" alt="travello">
                            </div>
                            <h4 class="name">Mountain & Hill Hiking</h4>
                        </div>
                    </div>
                    <div class="explore-btn" id="pills-explore-eight-tab" data-bs-toggle="pill" data-bs-target="#pills-explore-eight" role="tab" aria-controls="pills-explore-eight" aria-selected="true">
                        <div class="d-flex gap-16 align-items-center">
                            <div class="explore-icon">
                                <img src="images/icon/explore-1.svg" alt="travello">
                            </div>
                            <h4 class="name">Fishing & Swimming</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="tab-content" id="v-pills-tabContent-three">
                    <div class="tab-pane fade show active" id="pills-explore-one" role="tabpanel" aria-labelledby="pills-explore-one">
                        <div class="explore-conntent">
                            <h4 class="title">Trailers & Sports</h4>
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                dui tellus tempor pretium tincidunt. Id amet sit viverra
                                dolor consectetur elementum. Non at volutpat aliquam ac ac
                                at amet. Ut semper semper sit aliquam penatibus dolor
                                tortor nisl.
                            </p>
                            <ul class="expect-list">
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci. Non sit
                                    lorem dolor placerat faucibus.
                                </li>
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci.
                                </li>
                            </ul>
                        </div>
                        <div class="explore-banner">
                            <img src="images/gallery/about.png" alt="travello">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-explore-two" role="tabpanel" aria-labelledby="pills-explore-two">
                        <div class="explore-conntent">
                            <h4 class="title">Trailers & Sports</h4>
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                dui tellus tempor pretium tincidunt. Id amet sit viverra
                                dolor consectetur elementum. Non at volutpat aliquam ac ac
                                at amet. Ut semper semper sit aliquam penatibus dolor
                                tortor nisl.
                            </p>
                            <ul class="expect-list">
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci. Non sit
                                    lorem dolor placerat faucibus.
                                </li>
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci.
                                </li>
                            </ul>
                        </div>
                        <div class="explore-banner">
                            <img src="images/gallery/music.png" alt="travello">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-explore-three" role="tabpanel" aria-labelledby="pills-explore-three">
                        <div class="explore-conntent">
                            <h4 class="title">Trailers & Sports</h4>
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                dui tellus tempor pretium tincidunt. Id amet sit viverra
                                dolor consectetur elementum. Non at volutpat aliquam ac ac
                                at amet. Ut semper semper sit aliquam penatibus dolor
                                tortor nisl.
                            </p>
                            <ul class="expect-list">
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci. Non sit
                                    lorem dolor placerat faucibus.
                                </li>
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci.
                                </li>
                            </ul>
                        </div>
                        <div class="explore-banner">
                            <img src="images/gallery/sports.png" alt="travello">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-explore-four" role="tabpanel" aria-labelledby="pills-explore-four">
                        <div class="explore-conntent">
                            <h4 class="title">Trailers & Sports</h4>
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                dui tellus tempor pretium tincidunt. Id amet sit viverra
                                dolor consectetur elementum. Non at volutpat aliquam ac ac
                                at amet. Ut semper semper sit aliquam penatibus dolor
                                tortor nisl.
                            </p>
                            <ul class="expect-list">
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci. Non sit
                                    lorem dolor placerat faucibus.
                                </li>
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci.
                                </li>
                            </ul>
                        </div>
                        <div class="explore-banner">
                            <img src="images/gallery/hiking.png" alt="travello">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-explore-five" role="tabpanel" aria-labelledby="pills-explore-five">
                        <div class="explore-conntent">
                            <h4 class="title">Trailers & Sports</h4>
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                dui tellus tempor pretium tincidunt. Id amet sit viverra
                                dolor consectetur elementum. Non at volutpat aliquam ac ac
                                at amet. Ut semper semper sit aliquam penatibus dolor
                                tortor nisl.
                            </p>
                            <ul class="expect-list">
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci. Non sit
                                    lorem dolor placerat faucibus.
                                </li>
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci.
                                </li>
                            </ul>
                        </div>
                        <div class="explore-banner">
                            <img src="images/gallery/paragliding.png" alt="travello">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-explore-six" role="tabpanel" aria-labelledby="pills-explore-six">
                        <div class="explore-conntent">
                            <h4 class="title">Trailers & Sports</h4>
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                dui tellus tempor pretium tincidunt. Id amet sit viverra
                                dolor consectetur elementum. Non at volutpat aliquam ac ac
                                at amet. Ut semper semper sit aliquam penatibus dolor
                                tortor nisl.
                            </p>
                            <ul class="expect-list">
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci. Non sit
                                    lorem dolor placerat faucibus.
                                </li>
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci.
                                </li>
                            </ul>
                        </div>
                        <div class="explore-banner">
                            <img src="images/gallery/music.png" alt="travello">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-explore-seven" role="tabpanel" aria-labelledby="pills-explore-seven">
                        <div class="explore-conntent">
                            <h4 class="title">Trailers & Sports</h4>
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                dui tellus tempor pretium tincidunt. Id amet sit viverra
                                dolor consectetur elementum. Non at volutpat aliquam ac ac
                                at amet. Ut semper semper sit aliquam penatibus dolor
                                tortor nisl.
                            </p>
                            <ul class="expect-list">
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci. Non sit
                                    lorem dolor placerat faucibus.
                                </li>
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci.
                                </li>
                            </ul>
                        </div>
                        <div class="explore-banner">
                            <img src="images/gallery/hiking.png" alt="travello">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-explore-eight" role="tabpanel" aria-labelledby="pills-explore-eight">
                        <div class="explore-conntent">
                            <h4 class="title">Trailers & Sports</h4>
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                dui tellus tempor pretium tincidunt. Id amet sit viverra
                                dolor consectetur elementum. Non at volutpat aliquam ac ac
                                at amet. Ut semper semper sit aliquam penatibus dolor
                                tortor nisl.
                            </p>
                            <ul class="expect-list">
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci. Non sit
                                    lorem dolor placerat faucibus.
                                </li>
                                <li class="list">
                                    Lorem ipsum dolor sit amet consectetur. Platea urna
                                    hendrerit dui eget velit sollicitudin orci.
                                </li>
                            </ul>
                        </div>
                        <div class="explore-banner">
                            <img src="images/gallery/about.png" alt="travello">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End of Explore -->
 


<!-- Pricing S t a r t -->
<section class="pricing-area bottom-padding section-bg-before-two">
    <div class="container">

        <div class="position-relative">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="price-card h-calc wow fadeInUp" data-wow-delay="0.1s">
                        <div class="price-header">
                            <div class="d-flex gap-7 mb-2">
                                <h4 class="title">GÖREME'DEN DUYURULARI</h4>
                            </div>
                        </div>
                        <ul class="feature-points">

                            @foreach ($duyurular as $duyuru)

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
                            <a href="payment.html">
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

@endsection