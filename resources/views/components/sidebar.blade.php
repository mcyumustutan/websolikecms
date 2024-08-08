<div class="col-xl-4 col-lg-5 pt-48">
    <div class="row g-4 position-sticky top-0">
        <div class="col-lg-12">
            <div class="search-filter-section">

                <div class="heading">
                    <h4 class="title">{{ __('websolike.Recent News') }}</h4>
                </div>
                <ul class="recent-news-list">

                    @foreach ($subPages['data'] as $subPage)
                    <li class="list">
                        <h4 class="title line-clamp-1">
                            <a href="{{ $page->url }}/{{$subPage['url']}}"> {{$subPage['title']}}</a>
                        </h4>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>

    </div> 