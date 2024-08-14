<!-- Explore S t a r t -->
<section class="explore-area mt-5 section-padding2">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="border-section-title">
                    <h4 class="title">Yapılacak Aktiviteler</h4>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div class="all-explore" id="v-pills-tab-three" role="tablist" aria-orientation="vertical">
                    @php
                    $sayac = 1;
                    @endphp
                    @foreach ($projectsArray['activityBoxes'] as $duyuru)
                    <div class="explore-btn @if($sayac == 1) show active @endif" id="pills-{{$duyuru['id']}}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{$duyuru['id']}}" role="tab" aria-controls="pills-{{$duyuru['id']}}" aria-selected="true">
                        <div class="d-flex gap-16 align-items-center">
                            <h4 class="name">{{$duyuru['title']}}</h4>
                        </div>
                    </div>
                    @php
                    $sayac++;
                    @endphp
                    @endforeach


                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="tab-content" id="v-pills-tabContent-three">
                    @php
                    $sayac2 = 1;
                    @endphp
                    @foreach ($projectsArray['activityBoxes'] as $duyuru)

                    <div class="tab-pane fade  @if($sayac2 == 1) show active @endif" id="pills-{{$duyuru['id']}}" role="tabpanel" aria-labelledby="pills-{{$duyuru['id']}}">
                        <div class="explore-conntent">
                            <h4 class="title">{{$duyuru['title']}}</h4>
                            <p class="pera">
                                {!!$duyuru['content_secondary']!!}
                            </p>

                        </div>
                        <div class="explore-banner">
                            <img src="{{$duyuru['banner']}}" alt="{{$duyuru['title']}}">
                        </div>
                    </div>

                    @php
                    $sayac2++;
                    @endphp
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End of Explore -->