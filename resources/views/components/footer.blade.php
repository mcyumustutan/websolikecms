<!-- Footer S t a r t -->
<footer>
    <div class="footer-wrapper footer-bg">
        <div class="container">
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
                <div class="footer-body">
                    <div class="footer-content">
                        <div class="d-flex flex-column gap-20">
                            <div class="logo">
                                <img src="{{ asset('images/logo/logo.png')}}" alt="Websolike" class="changeLogo">
                            </div>
                            <p class="pera">

                            </p>
                        </div>
                        <div class="footer-right">
                            <h4 class="title">SMS Listesine Abone Ol</h4>
                            <div class="subscribe-wraper">
                                <input class="footer-search" type="search" name="footer" placeholder="Telefon Numaranız">
                                <button class="subscribe-btn">Abone Ol</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <ul class="listing">
                        <!-- <li class="single-list">
                            <a href="terms-condition.html" class="single">Terms of usa</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between gap-14 flex-wrap">
                            <p class="pera">
                                © <span class="current-year">{{date('Y')}}</span> Websolike. All rights reserved
                            </p>
                            <p class="pera">Powered by @Websolike</p>
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

<!-- jquery-->
<script src="{{ asset('js/jquery-3.7.0.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap-5.3.0.min.js')}}"></script>
<!-- Plugin -->
<script src="{{ asset('js/plugin.js')}}"></script>
<!-- Main js-->
<script src="{{ asset('js/main.js')}}"></script>