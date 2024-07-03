@extends('layouts.master')

@section('title', $page->title)




@section('content')
@include('components.breadcrumb')

<!-- Destination area S t a r t -->
<section class="page-details-section section-padding2">
    <div class="container">

        <div class="row y-gap-30 pb-4">

            <p>{{ $page->content_primary }}</p>
            <p>{{ $page->content_socondary }}</p>



            <div class="col-lg-4 col-sm-6">
                <div class="px-30 text-center">
                    <h3 class="text-20 md:text-24 fw-700">
                        <i class="ri-map-pin-line"></i>
                        <br>Adres
                    </h3>

                    <div class="mt-20 md:mt-10">
                        GÖREME / NEVŞEHIR
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="px-30 text-center">
                    <h3 class="text-20 md:text-24 fw-700">
                        <i class="ri-mail-line"></i>
                        <br>E-Mail
                    </h3>

                    <div class="mt-20 md:mt-10">
                        <a href="mailto:belediye@goreme.bel.tr">belediye@goreme.bel.tr</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="px-30 text-center">
                    <h3 class="text-20 md:text-24 fw-700">
                        <i class="ri-phone-line"></i>
                        <br>Telefon
                    </h3>

                    <div class="mt-20 md:mt-10">
                        <a href="#">+90 384 271 20 01</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
                <div class="contact">
                    <h4 class="contact-heading">Göreme İletişim Hattı</h4>
                    <form method="post" class="contact-form">
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <input class="custom-form" type="text" placeholder="Adınız">
                            </div>
                            <div class="col-sm-6">
                                <input class="custom-form" type="text" placeholder="E-Posta Adresiniz">
                            </div>
                            <div class="col-sm-6">
                                <input class="custom-form" type="text" placeholder="Telefon Numaranız">
                            </div>
                            <div class="col-sm-6">
                                <input class="custom-form" type="text" placeholder="Konu">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="custom-form-textarea" id="exampleFormControlTextarea1" rows="3" placeholder="MEsajınız..."></textarea>
                            </div>
                        </div>
                        <div class="mt-40">
                            <button type="submit" class="send-btn">Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Map -->
<iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1558.0943119395045!2d34.829173!3d38.644543000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152a68781e85e3ab%3A0x6ae1a0b9171a33c1!2sGoreme%20Municipality!5e0!3m2!1sen!2str!4v1720032635247!5m2!1sen!2str" height="500" style="border: 15px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe>
<!-- / Map -->

@endsection