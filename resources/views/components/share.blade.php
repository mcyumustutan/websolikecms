<div class="tag-social-section d-flex justify-content-between gap-16 flex-wrap">

    <div class="social-section">
        <h4 class="title">{{__('websolike.Share')}} :</h4>
        <div class="social-list">
            <div class="tags">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{$page->fullUrl}}" class="social-btn"><i class="ri-facebook-fill"></i></a>
            </div>
            <div class="socials">
                <a href="https://www.instagram.com/?url={{$page->fullUrl}}" class="social-btn"><i class="ri-instagram-line"></i></a>
            </div>
            <div class="socials">
                <a href="https://twitter.com/intent/tweet?url={{$page->fullUrl}}&text={{$page->title}}" class="social-btn"><i class="ri-twitter-line"></i></a>
            </div>
            <div class="socials">
                <a href="https://api.whatsapp.com/send?text={{$page->fullUrl}}" class="social-btn"><i class="ri-whatsapp-line"></i></a>
            </div>
        </div>
    </div>
</div>