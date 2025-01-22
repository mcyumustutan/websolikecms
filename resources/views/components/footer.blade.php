<!-- Footer S t a r t -->
<footer>
    @if($settings['whatsapp'])
    <a class="" style="position: fixed; bottom: 120px; right: 26px; z-index: 9999;" href="https://api.whatsapp.com/send?phone={{$settings['whatsapp']}}" target="_blank">
        <img src="{{asset('images/whatsapp.png')}}" width="46" height="46" />
    </a>
    @endif

    <div class="brand-area bg-white pb-20 pt-20">
        <div class="container">
            <div class="swiper brandSwiper-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-light p-3 rounded">
                        <a href="https://webtapu.tkgm.gov.tr/" target="_blank">
                            <img src="{{ asset('images/external-links/webtapu.png')}}" height="50" alt="Webtapu || TKGM" width="100">
                        </a>
                    </div>
                    <div class="swiper-slide bg-light p-3 rounded">
                        <a href="https://giris.turkiye.gov.tr/Giris/" target="_blank">
                            <img src="https://cdn.e-devlet.gov.tr/themes/izmir/images/login/edk-logo.png" height="50" alt="e-Devlet Kapısı" width="100">
                        </a>
                    </div>
                    <div class="swiper-slide bg-light p-3 rounded">
                        <a href="https://www.cimer.gov.tr/" target="_blank">
                            <img src="https://www.cimer.gov.tr/images/cimer-logo.png?v=lQKsw0kBsLpa_mg-cuZmnGs5sXEXQtrMNvQGX7n__38" height="50" alt="Cimer" width="100">
                        </a>
                    </div>
                    <div class="swiper-slide bg-light p-3 rounded">
                        <a href="https://kapadokyaalan.ktb.gov.tr/" target="_blank">
                            <img src="https://kapadokyaalan.ktb.gov.tr/images/ktb_logo_.png" height="50" alt="Kapadokya Alan Başkanlığı" width="100">
                        </a>
                    </div>
                    <div class="swiper-slide bg-light p-3 rounded">
                        <a href="https://www.ilan.gov.tr/" target="_blank">
                            <img src="https://medya.ilan.gov.tr/assets/img/logo.svg" height="50" alt="ilan.gov.tr - Türkiye'nin İlan Portalı" width="100">
                        </a>
                    </div>
                    <div class="swiper-slide bg-light p-3 rounded">
                        <a href="https://www.tbb.gov.tr/Tr/" target="_blank">
                            <img src="https://www.tbb.gov.tr/img/logo.png" height="50" alt="Türkiye Belediyeler Birliği" width="100">
                        </a>
                    </div>
                    <div class="swiper-slide bg-light p-3 rounded">
                        <a href="https://www.resmigazete.gov.tr/" target="_blank">
                            <img src="{{ asset('images/external-links/resmi-gazete.png')}}" height="50" width="100" alt="Türkiye Belediyeler Birliği">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-wrapper footer-bg">
        <div class="footer-middle-area">
            <div class="container">
                <div class="footer-body">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="footer-tittle">
                                <img src="{{ asset('images/logo/logo-with-bg.png')}}" alt="{{ $settings['site-basligi'] }}" title="{{ $settings['site-basligi'] }}" class="changeLogos" style="position: relative;top: -38px;">
                            </div>

                            <div class="d-flex justify-content-between gap-14 flex-wrap mt-5">
                                <div class="d-flex align-items-center gap-2">
                                    @if($settings['instagramcom'])
                                    <a target="_blank" href="{{$settings['instagramcom']}}">
                                        <img src="{{asset('images/social/instagram.png')}}" width="36" alt="{{ $settings['site-basligi'] }}" title="{{ $settings['site-basligi'] }}" />
                                    </a>
                                    @endif

                                    @if($settings['xcom'])
                                    <a target="_blank" href="{{$settings['xcom']}}">

                                        <img src="{{asset('images/social/x.png')}}" width="36" alt="{{ $settings['site-basligi'] }}" title="{{ $settings['site-basligi'] }}" />
                                    </a>
                                    @endif

                                    @if($settings['whatsapp'])
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{$settings['whatsapp']}}">
                                        <img src="{{asset('images/social/whatsapp.png')}}" width="36" alt="{{ $settings['site-basligi'] }}" title="{{ $settings['site-basligi'] }}" />
                                    </a>
                                    @endif

                                    @if($settings['facebookcom'])
                                    <a target="_blank" href="{{$settings['facebookcom']}}">
                                        <img src="{{asset('images/social/facebook.png')}}" width="36" alt="{{ $settings['site-basligi'] }}" title="{{ $settings['site-basligi'] }}" />
                                    </a>
                                    @endif

                                    @if($settings['youtubecom'])
                                    <a target="_blank" href="{{$settings['youtubecom']}}">
                                        <img src="{{asset('images/social/youtube.png')}}" width="36" alt="{{ $settings['site-basligi'] }}" title="{{ $settings['site-basligi'] }}" />
                                    </a>
                                    @endif

                                </div>
                            </div>

                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">{{__('websolike.SMS Listesi')}}</h4>
                                    <p>Güncel Bilgiler, Etkinlikler ve Duyurular İçin SMS Listesine Kaydolun</p>
                                    <a href="{{config('app.url')}}/{{App::getLocale()}}/sms-listesi" class="btn-primary-sm radius mt-1">{{__('websolike.SMS Listesine Kaydol')}}</a>
                                </div> 
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">{{__('websolike.Çalışma Saatleri')}}</h4>
                                    <ul class="w-75">
                                        <li class="w-100"><a>Pazartesi <span class="float-end">08:00 - 17:00</span></a></li>
                                        <li class="w-100"><a>Salı <span class="float-end">08:00 - 17:00</span></a></li>
                                        <li class="w-100"><a>Çarşamba <span class="float-end">08:00 - 17:00</span></a></li>
                                        <li class="w-100"><a>Perşembe <span class="float-end">08:00 - 17:00</span></a></li>
                                        <li class="w-100"><a>Cuma <span class="float-end">08:00 - 17:00</span></a></li>
                                        <li class="w-100"><a>Cumartesi <span class="float-end">Kapalı</span></a></li>
                                        <li class="w-100"><a>Pazar <span class="float-end">Kapalı</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">{{__('websolike.İletişim')}}</h4>
                                    <ul>
                                        @if($settings['sabit-telefon-numarasi'])
                                        <li>
                                            <a target="_blank" href="tel:{{$settings['sabit-telefon-numarasi']}}">
                                                <i class="ri-phone-line fs-4"></i> {{$settings['sabit-telefon-numarasi']}}
                                            </a>
                                        </li>
                                        @endif

                                        @if($settings['e-posta'])
                                        <li>
                                            <a target="_blank" href="mailto:{{$settings['e-posta']}}">
                                                <i class="ri-mail-line fs-4"></i> {{$settings['e-posta']}}
                                            </a>
                                        </li>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between gap-14 flex-wrap pb-20">

                            <p class="pera fw-light text-muted">
                                &copy; {{date('Y')}} Tüm hakları Göreme Belediyesi’nde Saklıdır.
                            </p>

                            <p class="pera fw-light text-muted" ">
                                <a href=" https://websolike.com" target="_blank"><img src="{{asset('images/websolike.com-logo.png')}}" alt="Websolike Medya Ajansı" width="100" /></a>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</footer>
<!--/ End-of Footer -->

<!-- Scroll Up  -->
<div class="progressParent" id="back-top">
    <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>