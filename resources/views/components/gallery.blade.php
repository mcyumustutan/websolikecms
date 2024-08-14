@if(count($galleries)>0)

<div class="galleries my-4">
     
    <div class="row g-4">
        <div class="col-xl-12 col-lg-12 d-flex flex-wrap gap-2">
            @foreach ($galleries as $key => $gallery)
            <a class="fancy-gallery-box" data-fancybox="gallery" data-src="{{$gallery->getUrl()}}">
                <img src="{{$gallery->getUrl()}}" alt="{{$page->title}}" height="150" />
            </a>
            @endforeach
        </div>
    </div>

</div>


<link rel="stylesheet" href="{{asset('plugins/fancybox/fancybox.css')}}" />
<script src="{{asset('plugins/fancybox/fancybox.umd.js')}}"></script>
<script>
    Fancybox.bind('[data-fancybox="gallery"]', {});
</script>
<style>
    .fancy-gallery-box {
        width: 150px;
        height: 150px;
        background-color: white;
        border: 10px solid white;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .fancy-gallery-box img {
        height: 100%;
        width: auto;
        transition: 1s all ease;
    }

    .fancy-gallery-box img:hover {
        transform: scale(1.1)
    }
</style>

@endif