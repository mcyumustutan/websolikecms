@if($page->has_subpages && count($subPages['data'])>0)
<section class="news-area ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12">
                <div class="position-relative mb-60 mt-60">
                    <h4 class="title">
                        {{ __('websolike.Related Pages')}}
                    </h4>
                </div>
            </div>
        </div>
        <div class="row g-4">

            @foreach ($subPages['data'] as $subPage)


            <div class="col-xl-3 col-lg-3 col-sm-6 ">
                <article class="news-card-two h-100">
                    <figure class="news-banner-two imgEffect  d-flex justify-content-center">
                        <a href="{{ $page->url }}/{{$subPage['url']}}">
                            <img src="{{ $subPage['cover'] }}" alt="{{ $subPage['title'] }}" class="img-fluid">
                        </a>
                    </figure>

                    <div class="news-content">

                        <h4 class="title">
                            <a href="{{ $page->url }}/{{$subPage['url']}}">
                                {{$subPage['title']}}
                            </a>

                            <p class="date">{{$subPage['display_date']}}</p>
                        </h4>

                    </div>
                </article>
            </div>

            @endforeach
        </div>


        <div class="col-12 text-center">

            <div class="d-flex justify-content-center mt-4">
                <nav class="pagination-container">
                    <div class="pagination">
                        <span class="pagination-inner">
                            @foreach ($subPages['links'] as $link)
                            <a class="{{ $link['active'] ? 'pagination-active' : '' }}" href="{{$link['url']}}">
                                {{__($link['label']) }}
                            </a>
                            @endforeach
                        </span>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
@endif