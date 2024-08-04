<!-- Footer S t a r t -->
<footer>
    @if($settings['sabit-telefon-numarasi'])
    <a class="" style="position: fixed; bottom: 120px; right: 26px; z-index: 9999;" href="tel:{{$settings['sabit-telefon-numarasi']}}" target="_blank">
        <img src="{{asset('images/whatsapp.png')}}" width="46px" />
    </a>
    @endif

    @if($settings['e-posta'])
    <a class="" style="position: fixed; bottom: 180px; right: 28px; z-index: 9999;" href="mailto:{{$settings['e-posta']}}" target="_blank">
        <img src="{{asset('images/email.png')}}" width="42px" />
    </a>
    @endif

    <div class="footer-wrapper footer-bg mt-20">
        <div class="footer-area">
            <div class="row g-4">

                @foreach ($footernGeneralNavigation as $menu)
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-footer-caption">
                        <div class="footer-tittle">
                            <h4 class="title">{{$menu['title']}}</h4>
                            @if($menu['sub'])
                            <ul class="listing">
                                @foreach ($menu['sub'] as $submenu)
                                <li class="single-lsit">
                                    <a href="{{config('app.url')}}/{{$menu['lang']}}/{{$menu['url']}}/{{$submenu['url']}}">{{$submenu['title']}}</a>
                                </li>
                                @endforeach
                            </ul>

                            @endif
                        </div>
                    </div>
                </div>


                @endforeach
            </div>
        </div>
        <div class="footer-middle-area">
            <div class="container">

                <div class="footer-body">
                    <div class="footer-content">
                        <div class="d-flex justify-content-between gap-50 flex-nowrap">

                            <div class="logo">
                                <img src="{{ asset('images/logo/logo.png')}}" alt="Websolike" class="changeLogo">
                            </div>

                            <div class="calisma-saatlari col-lg-6 float-start">
                                <p><b>Çalışma Saatleri</b></p>
                                <ul class="w-100 fs-6">
                                    <li class="w-100 fs-6"><a>Pazartesi <span class="float-end">08:00 - 17:00</span></a></li>
                                    <li class="w-100"><a>Salı <span class="float-end">08:00 - 17:00</span></a></li>
                                    <li class="w-100"><a>Çarşamba <span class="float-end">08:00 - 17:00</span></a></li>
                                    <li class="w-100"><a>Perşembe <span class="float-end">08:00 - 17:00</span></a></li>
                                    <li class="w-100"><a>Cuma <span class="float-end">08:00 - 17:00</span></a></li>
                                    <li class="w-100"><a>Cumartesi <span class="float-end">Kapalı</span></a></li>
                                    <li class="w-100"><a>Pazar <span class="float-end">Kapalı</span></a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="footer-right">

                            <p><b>Hızlı İletişim</b></p>
                            <ul>
                                @if($settings['whatsapp'])
                                <li>
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{$settings['whatsapp']}}">
                                        <i class="ri-whatsapp-line fs-4"></i> {{$settings['whatsapp']}}
                                    </a>
                                </li>
                                @endif

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
                <div class="footer-bottom">

                    <div class="d-flex justify-content-between gap-14 flex-wrap">
                        <div class="d-flex align-items-center">
                            @if($settings['instagramcom'])
                            <a target="_blank" href="{{$settings['instagramcom']}}">
                                <i class="ri-instagram-line fs-4"></i>
                            </a>
                            @endif

                            @if($settings['xcom'])
                            <a target="_blank" href="{{$settings['xcom']}}">
                                <i class="ri-twitter-line fs-4"></i>
                            </a>
                            @endif

                            @if($settings['whatsapp'])
                            <a target="_blank" href="https://api.whatsapp.com/send?phone={{$settings['whatsapp']}}">
                                <i class="ri-whatsapp-line fs-4"></i>
                            </a>
                            @endif

                            @if($settings['facebookcom'])
                            <a target="_blank" href="{{$settings['facebookcom']}}">
                                <i class="ri-facebook-line fs-4"></i>
                            </a>
                            @endif

                            @if($settings['youtubecom'])
                            <a target="_blank" href="{{$settings['youtubecom']}}">
                                <i class="ri-youtube-line fs-4"></i>
                            </a>
                            @endif

                            @if($settings['tiktokcom'])
                            <a target="_blank" href="{{$settings['tiktokcom']}}">
                                <i class="ri-tiktok-line fs-4"></i>
                            </a>
                            @endif

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


        <div class="shape-about-two">
            <img src="{{asset('images/goreme-shape.png')}}">
        </div>

        <div class="shape-bg-about">
            <img src="{{asset('images/goreme-shape.png')}}">
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

<!-- jquery-->
<script src="{{ asset('js/jquery-3.7.0.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap-5.3.0.min.js')}}"></script>
<!-- Plugin -->
<script src="{{ asset('js/plugin.js')}}"></script>
<!-- Main js-->
<script src="{{ asset('js/main.js')}}"></script>