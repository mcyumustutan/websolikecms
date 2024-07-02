   <div class="row g-4 position-relative z-10">

       <div class="row g-4 position-relative z-10">
           <div class="swiper favSwiper-active">
               <div class="swiper-wrapper">

                   @foreach ($projectsArray['projectPlanned'] as $project)

                   <div class="swiper-slide">
                       <div class="">
                           <div class="package-card h-calc">
                               <div class="package-img imgEffect4">
                                   <a href="{{config('app.url')}}/{{$project['lang']}}/{{$project['url']}}">
                                       <img src="{{$project->cover}}" alt="{{$project['title']}}">
                                   </a>
                               </div>
                               <div class="package-content">
                                   <h4 class="area-name">
                                       <a href="{{config('app.url')}}/{{$project['lang']}}/{{$project['url']}}">{{$project['title']}}</a>
                                   </h4>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="swiper-slide">
                       <div class="">
                           <div class="package-card h-calc">
                               <div class="package-img imgEffect4">
                                   <a href="{{config('app.url')}}/{{$project['lang']}}/{{$project['url']}}">
                                       <img src="{{$project->cover}}" alt="{{$project['title']}}">
                                   </a>
                               </div>
                               <div class="package-content">
                                   <h4 class="area-name">
                                       <a href="{{config('app.url')}}/{{$project['lang']}}/{{$project['url']}}">{{$project['title']}}</a>
                                   </h4>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="swiper-slide">
                       <div class="">
                           <div class="package-card h-calc">
                               <div class="package-img imgEffect4">
                                   <a href="{{config('app.url')}}/{{$project['lang']}}/{{$project['url']}}">
                                       <img src="{{$project->cover}}" alt="{{$project['title']}}">
                                   </a>
                               </div>
                               <div class="package-content">
                                   <h4 class="area-name">
                                       <a href="{{config('app.url')}}/{{$project['lang']}}/{{$project['url']}}">{{$project['title']}}</a>
                                   </h4>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="swiper-slide">
                       <div class="">
                           <div class="package-card h-calc">
                               <div class="package-img imgEffect4">
                                   <a href="{{config('app.url')}}/{{$project['lang']}}/{{$project['url']}}">
                                       <img src="{{$project->cover}}" alt="{{$project['title']}}">
                                   </a>
                               </div>
                               <div class="package-content">
                                   <h4 class="area-name">
                                       <a href="{{config('app.url')}}/{{$project['lang']}}/{{$project['url']}}">{{$project['title']}}</a>
                                   </h4>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="swiper-slide">
                       <div class="">
                           <div class="package-card h-calc">
                               <div class="package-img imgEffect4">
                                   <a href="{{config('app.url')}}/{{$project['lang']}}/{{$project['url']}}">
                                       <img src="{{$project->cover}}" alt="{{$project['title']}}">
                                   </a>
                               </div>
                               <div class="package-content">
                                   <h4 class="area-name">
                                       <a href="{{config('app.url')}}/{{$project['lang']}}/{{$project['url']}}">{{$project['title']}}</a>
                                   </h4>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="swiper-slide">
                       <div class="">
                           <div class="package-card h-calc">
                               <div class="package-img imgEffect4">
                                   <a href="{{config('app.url')}}/{{$project['lang']}}/{{$project['url']}}">
                                       <img src="{{$project->cover}}" alt="{{$project['title']}}">
                                   </a>
                               </div>
                               <div class="package-content">
                                   <h4 class="area-name">
                                       <a href="{{config('app.url')}}/{{$project['lang']}}/{{$project['url']}}">{{$project['title']}}</a>
                                   </h4>
                               </div>
                           </div>
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

       <div class="row">
           <div class="col-12 text-center">
               <div class="section-button d-inline-block">
                   <a href="{{config('app.url')}}/{{App::getLocale()}}/projeler/planlanan-projeler">
                       <div class="btn-primary-icon-sm">
                           <p class="pera">Tüm Planlanan Projeler</p>
                           <i class="ri-arrow-right-up-line"></i>
                       </div>
                   </a>
               </div>
           </div>
       </div>
   </div>