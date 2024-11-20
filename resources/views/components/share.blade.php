<div class="tag-social-section d-flex justify-content-between gap-16 flex-wrap">

    <div class="social-section">
        <h4 class="title">{{__('websolike.Share')}} :</h4>
        <div class="social-list">
            <div class="f">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{$page->fullUrl}}" class="social-btn">
                    <img src="{{asset('images/social/facebook.png')}}" width="24" />
                </a>
            </div>
            <!-- <div class="i">
                <a href="https://www.instagram.com/?url={{$page->fullUrl}}" class="social-btn">
                    <img src="{{asset('images/social/instagram.png')}}" width="24" />
                </a>
            </div> -->
            <div class="x">
                <a href="https://twitter.com/intent/tweet?url={{$page->fullUrl}}&text={{$page->title}}" class="social-btn">
                    <img src="{{asset('images/social/x.png')}}" width="24" />
                </a>
            </div>
            <div class="w">
                <a href="https://api.whatsapp.com/send?text={{$page->fullUrl}}" class="social-btn">
                    <img src="{{asset('images/social/whatsapp.png')}}" width="24" />
                </a>
            </div>
        </div>
    </div>
</div>