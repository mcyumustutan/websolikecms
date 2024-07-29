 <section class=" feature-area-bg section-padding2">
     <div class="container">
         <div class="row justify-content-center position-relative z-10">
             <div class="col-xl-7 col-lg-7">
                 <div class="section-title mx-430 mx-auto text-center">
                     <h4 class="title">
                         Kültürel Miraslar
                     </h4>
                 </div>
             </div>
         </div>
         <div class="row g-4 position-relative z-10">
             <div class="swiper favSwiper-active">
                 <div class="swiper-wrapper">

                     @foreach ($explore as $exp)
                     <div class="swiper-slide">
                         <div class="col ">
                             <a href="{{$exp['fullUrl']}}" class="destination-banner">
                                 <img src="{{$exp['cover']}}" alt="{{$exp['title']}}">
                                 <div class="destination-content">

                                     @if($exp['highlited_value_2'])
                                     <div class="ratting-badge">
                                         <i class="ri-star-s-fill"></i>
                                         <span>{{$exp['highlited_value_2']}}</span>
                                     </div>
                                     @endif

                                     <div class="destination-info">
                                         <div class="destination-name">
                                             <p class="pera">{{$exp['title']}}</p>

                                             @if($exp['highlited_value_1'])
                                             <div class="location">
                                                 <i class="ri-map-pin-line"></i>
                                                 <p class="name">{{$exp['highlited_value_1']}}</p>
                                             </div>
                                             @endif
                                         </div>
                                         <div class="button-section">
                                             <div class="arrow-btn">
                                                 <i class="ri-arrow-right-line"></i>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </a>
                         </div>
                     </div>
                     @endforeach


                 </div>
                 <div class="swiper-button-next">
                     <i class="ri-arrow-right-s-line"></i>
                 </div>
                 <div class="swiper-button-prev">
                     <i class="ri-arrow-left-s-line"></i>
                 </div>
             </div>
         </div>

     </div>
 </section>