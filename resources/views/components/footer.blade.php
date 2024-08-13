<!-- Footer S t a r t -->
<footer>
    @if($settings['whatsapp'])
    <a class="" style="position: fixed; bottom: 120px; right: 26px; z-index: 9999;" href="https://api.whatsapp.com/send?phone={{$settings['whatsapp']}}" target="_blank">
        <img src="{{asset('images/whatsapp.png')}}" width="46" height="46" />
    </a>
    @endif

    @if($settings['e-posta'])
    <a class="" style="position: fixed; bottom: 180px; right: 28px; z-index: 9999;" href="mailto:{{$settings['e-posta']}}" target="_blank">
        <img src="{{asset('images/email.png')}}" width="42" height="42" />
    </a>
    @endif

    <div class="footer-wrapper footer-bg mt-20">

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
                                    <h4 class="title">SMS Listesi</h4>
                                    <p>Güncel Bilgiler, Etkinlikler ve Duyurular İçin SMS Listesine Kaydolun</p>
                                    <a href="{{config('app.url')}}/{{App::getLocale()}}/sms-listesi" class="btn-primary-sm radius mt-1">SMS Listesine Kaydol</a>
                                </div>
                                <div class="footer-tittle mt-5">
                                    <h4 class="title">Çözüm Merkezi</h4>
                                    <p>Çözüm Merkezimizle Yanınızdayız: Sorunlarınızı Dinliyor, Çözüyoruz!</p>
                                    <a href="{{config('app.url')}}/{{App::getLocale()}}/cozum-merkezi" class="btn-primary-sm radius mt-1"> Çözüm Merkezine Ulaş </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Çalışma Saatleri</h4>
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
                                    <h4 class="title">İletişim</h4>
                                    <ul>
                                        @if($settings['sabit-telefon-numarasi'])
                                        <li>
                                            <a target="_blank" href="tel:{{$settings['sabit-telefon-numarasi']}}">
                                                <i class="ri-phone-line fs-4"></i> {{$settings['sabit-telefon-numarasi']}}
                                            </a>
                                        </li>
                                        @endif

                                        @if($settings['mobil-telefon-numarasi'])
                                        <li>
                                            <a target="_blank" href="tel:{{$settings['mobil-telefon-numarasi']}}">
                                                <i class="ri-smartphone-line fs-4"></i> {{$settings['mobil-telefon-numarasi']}}
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
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center gap-14 flex-wrap">

                            <p class="pera fw-light text-muted" style="font-size: 12px;">
                                <a href="https://websolike.com" target="_blank">@Websolike</a>
                                tarafından Göreme Belediyesine özel olarak yaptırılmıştır. &copy; {{date('Y')}} Tüm hakları Göreme Belediyesi’nde Saklıdır.
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