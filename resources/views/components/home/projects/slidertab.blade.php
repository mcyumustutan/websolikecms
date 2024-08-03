<section class="package-area  section-padding2 position-relative  goreme-bg-3">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="border-section-title">
                    <h4 class="title"> {{ __('websolike.Göreme Projeleri')}}</h4>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <!-- Tab Buttons -->
                <ul class="nav nav-pills package-pills" id="pills-tab" role="tablist">
                    <li class="nav-item package-item" role="presentation">
                        <button class="nav-link package-nav active" id="pills-tamamlanan-projeler-tab" data-bs-toggle="pill" data-bs-target="#pills-tamamlanan" role="tab" aria-controls="pills-tamamlanan" aria-selected="true">
                            Tamamlanan Projeler
                        </button>
                    </li>
                    
                    
                    <li class="nav-item package-item" role="presentation">
                        <button class="nav-link package-nav" id="pills-devam-projeler-tab" data-bs-toggle="pill" data-bs-target="#pills-devam" role="tab" aria-controls="pills-devam" aria-selected="true">
                            Devam Eden Projeler
                        </button>
                    </li>

                    
                    <li class="nav-item package-item" role="presentation">
                        <button class="nav-link package-nav" id="pills-planlanan-projeler-tab" data-bs-toggle="pill" data-bs-target="#pills-planlanan" role="tab" aria-controls="pills-planlanan" aria-selected="true">
                            Planlanan Projeler
                        </button>
                    </li>
                </ul>
                <!-- Tab contents -->
                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade active show" id="pills-tamamlanan" role="tabpanel" aria-labelledby="pills-tamamlanan-projeler-tab">
                        @include('components.home.projects.tabs.finished')
                    </div>

                    <div class="tab-pane fade" id="pills-devam" role="tabpanel" aria-labelledby="pills-devam-projeler-tab">
                        @include('components.home.projects.tabs.ongoing')
                    </div>

                    <div class="tab-pane fade" id="pills-planlanan" role="tabpanel" aria-labelledby="pills-planlanan-projeler-tab">
                        @include('components.home.projects.tabs.planned')
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>