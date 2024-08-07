@if(count($projectsArray['stories']) > 0)
<section class="special-area position-relative pt-4 mt-5">
    <div class="container">
        <div class="row">
            @endif
            <div id="stories" class="storiesWrapper d-flex justify-content-center"></div>
            @if(count($projectsArray['stories']) > 0)
        </div>
    </div>

    <div class="shape-about-two">
        <img src="{{asset('images/goreme-shape.png')}}">
    </div>

    <div class="shape-bg-about">
        <img src="{{asset('images/goreme-shape.png')}}">
    </div>
</section>
@endif