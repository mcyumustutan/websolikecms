<!-- About Us area S t a r t -->
<section class="about-area">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-7 col-lg-6">
                <div class="section-title mx-10 mb-30">
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
                            <p class="pera mt-0">Başkan</p>
                            <i class="ri-arrow-right-up-line"></i>
                        </a>

                    </div>
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
            <div class="col-xl-5 col-lg-6">
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