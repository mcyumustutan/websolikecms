<!--
We will create a family tree using just CSS(3)
The markup will be simple nested lists
-->
<div class="idari-yapi w-100">

    <div class="row mb-4">
        <div class="col-sm-12">
            <div class="baskan">
                <a href="https://www.corum.bel.tr/kurumsal/baskan" class="d-flex flex-column shadow rounded-3 px-2 py-4 baskan-link">
                    <div>
                        <p class="baskan-isim text-center p-0 m-0">
                            ÖMER EREN</p>
                        <p class="baskan-unvan text-center p-0 m-0">
                            Göreme Belediye Başkanı</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    @if($page->has_subpages && count($subPages['data'])>0)



    @php
    $limitedItems = array_chunk($subPages['data'], 6);
    @endphp



    @foreach ($limitedItems as $subPages)
    <div class="row g-2 belediye-bt py-3">
        @foreach ($subPages as $subPage)
        <div class="col-4 col-sm">
            <div class="baskan-yardimci pb-4">
                <a href="{{$subPage['fullurl']}}" class="d-flex flex-column align-items-center justify-content-center shadow rounded-3 by-link px-1 py-4">
                    <span class="b-baslik">{{$subPage['title']}}</span>
                </a>
            </div>

        </div>
        @endforeach
    </div>
    @endforeach
    @endif


</div>

<style>
    .idari-yapi {
        padding: 30px 0
    }

    .idari-yapi ol,
    .idari-yapi ul {
        list-style: none
    }

    .idari-yapi .baskan {
        display: block;
        width: 380px;
        margin: 0 auto 40px;
        text-decoration: none;
        position: relative
    }

    @media only screen and (max-width: 992px) {
        .idari-yapi .baskan {
            width: 100%;
            margin: 0 auto 15px
        }
    }

    .idari-yapi .baskan::before {
        content: "";
        width: 1px;
        height: 275px;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        background-color: rgb(0 0 0 / .4);
        z-index: 0
    }

    @media only screen and (max-width: 992px) {
        .idari-yapi .baskan::before {
            display: none
        }
    }

    .idari-yapi .baskan-link {
        display: block;
        width: 100%;
        font-family: 'Jost', sans-serif;
        text-decoration: none;
        background-color: #fff;
        border-radius: 8px;
        transition: all .2s ease-in-out
    }

    .idari-yapi .baskan-link:hover {
        background-color: var(--primary-color);
        border-color: var(--primary-color)
    }

    .idari-yapi .baskan .baskan-thumbnail {
        width: 176px;
        height: 176px;
        position: absolute;
        top: -24px;
        left: 36px
    }

    .idari-yapi .baskan .baskan-thumbnail img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 6px solid #fff;
        box-shadow: 0 .15rem 1.75rem 0 rgb(58 59 69 / .15) !important
    }

    .idari-yapi .baskan .baskan-isim {
        text-decoration: none;
        font-weight: 600;
        font-size: 20px;
        color: var(--primary-text-color);
        transition: all .2s ease-in-out
    }

    .idari-yapi .baskan .baskan-unvan {
        text-decoration: none;
        color: var(--secondary-text-color);
        transition: all .2s ease-in-out
    }

    .idari-yapi .baskan:hover .baskan-isim,
    .idari-yapi .baskan:hover .baskan-unvan {
        color: #fff
    }

    .idari-yapi .belediye {
        width: 300px;
        position: relative
    }

    @media only screen and (max-width: 992px) {
        .idari-yapi .belediye {
            width: 100% !important;
            margin: 0 0 8px 0 !important
        }
    }

    .idari-yapi .belediye .b-link {
        width: 100%;
        display: block;
        font-family: 'Jost', sans-serif;
        font-size: 18px;
        font-weight: 500;
        text-align: center;
        text-decoration: none;
        color: var(--primary-text-color);
        background-color: #fff;
        transition: all .2s ease-in-out
    }

    .idari-yapi .belediye .b-link:hover {
        background-color: var(--primary-color);
        color: #fff
    }

    .idari-yapi .belediye::before {
        content: "";
        position: absolute;
        top: 50%;
        width: 96px;
        height: 1px;
        background-color: rgb(0 0 0 / .4);
        z-index: 1
    }

    @media only screen and (max-width: 992px) {
        .idari-yapi .belediye::before {
            display: none
        }
    }

    @media only screen and (min-width: 992px) {
        .idari-yapi .b-right {
            float: right
        }
    }

    .idari-yapi .b-left::before {
        left: 100%
    }

    .idari-yapi .b-right::before {
        right: 100%
    }

    .idari-yapi .belediye-bt {
        position: relative
    }

    .idari-yapi .belediye-bt::before {
        content: "";
        position: absolute;
        width: calc(100% - 246px);
        height: 1px;
        top: -20px;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        background-color: rgb(0 0 0 / .4);
        z-index: 1
    }

    @media only screen and (max-width: 992px) {
        .idari-yapi .belediye-bt::before {
            display: none
        }
    }

    .idari-yapi .baskan-yardimci {
        width: 100%;
        position: relative
    }

    .idari-yapi .baskan-yardimci::before {
        content: "";
        position: absolute;
        top: -43px;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        width: 1px;
        height: 43px;
        background-color: rgb(0 0 0 / .4);
        z-index: 1
    }

    @media only screen and (max-width: 992px) {
        .idari-yapi .baskan-yardimci::before {
            display: none
        }
    }

    .idari-yapi .baskan-yardimci .by-link {
        width: 100%;
        display: block;
        background-color: #fff;
        font-family: 'Jost', sans-serif;
        text-decoration: none;
        transition: all .2s ease-in-out
    }

    .idari-yapi .baskan-yardimci .by-link:hover {
        background-color: var(--primary-color);
        border-color: var(--primary-color)
    }

    .idari-yapi .baskan-yardimci .by-link .b-baslik,
    .idari-yapi .baskan-yardimci .by-link .b-unvan {
        display: block;
        width: 100%;
        text-align: center;
        text-decoration: none;
        color: var(--primary-text-color);
        transition: all .2s ease-in-out
    }

    .idari-yapi .baskan-yardimci .by-link .b-baslik {
        font-weight: 500;
        font-size: 18px
    }

    .idari-yapi .baskan-yardimci .by-link .b-unvan {
        font-weight: 300;
        font-size: 14px
    }

    .idari-yapi .baskan-yardimci .by-link:hover .b-baslik,
    .idari-yapi .baskan-yardimci .by-link:hover .b-unvan {
        color: #fff
    }

    .idari-yapi .mudurluk {
        width: 100%;
        position: relative
    }

    .idari-yapi .mudurluk .m-link {
        width: 100%;
        min-height: 90px;
        display: block;
        background-color: #fff;
        text-decoration: none;
        transition: all .2s ease-in-out
    }

    .idari-yapi .mudurluk .m-link p {
        font-family: 'Jost', sans-serif;
        font-size: 14px;
        font-weight: 400;
        text-decoration: none;
        color: var(--secondary-text-color);
        transition: all .2s ease-in-out;
        margin: 0;
        padding: 0
    }

    .idari-yapi .mudurluk .m-link:hover {
        background-color: var(--primary-color);
        border-color: var(--primary-color)
    }

    .idari-yapi .mudurluk .m-link:hover p {
        color: #fff
    }

    .mudurluk-list-item {
        width: 100%;
        height: 100%;
        display: block;
        background-color: #fff;
        text-decoration: none;
        border: 1px solid var(--content-border);
        border-radius: 12px;
        transition: all .2s ease-in-out;
        transform: scale(1)
    }

    .mudurluk-list-item:hover {
        box-shadow: 0 0 10px 1px rgb(0 48 87 / .1) !important;
        transform: scale(1.03)
    }

    .mudurluk-list-item .mudurluk-baslik {
        width: calc(100% - 80px)
    }

    .mudurluk-list-item .baslik {
        font-family: 'Jost', sans-serif;
        font-weight: 500;
        font-size: 18px;
        color: var(--primary-text-color);
        transition: all .2s ease-in-out
    }

    .mudurluk-list-item:hover .baslik {
        color: var(--color-orange)
    }

    .mudurluk-list-item .icon {
        width: 80px;
        font-size: 30px;
        color: rgb(0 48 87 / .5);
        transition: all .2s ease-in-out
    }

    .mudurluk-list-item:hover .icon {
        color: var(--color-orange)
    }
</style>