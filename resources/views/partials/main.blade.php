<div class="jumbo"></div>
    <div class="containerCard">
        <button class="series">Current series</button>
         @include('partials.card')

        <button class="load">Load More</button>
    </div>
    <div class="icons">
        <div class="iconMenu">
            <img src="{{ Vite::asset('public/img/buy-comics-digital-comics.png') }}" alt="" />
            <p>DIGITAL COMICS</p>
        </div>
        <div class="iconMenu">
            <img src="{{ Vite::asset('public/img/buy-comics-merchandise.png') }}" alt="" />
            <p>MERCHANDISE</p>
        </div>
        <div class="iconMenu">
            <img src="{{ Vite::asset('public/img/buy-comics-subscriptions.png') }}" alt="" />
            <p>SUBSCRIPTION</p>
        </div>
        <div class="iconMenu">
            <img src="{{ Vite::asset('public/img/buy-comics-shop-locator.png') }}" alt="" />
            <p>COMIC SHOP LOCATOR</p>
        </div>
        <div class="iconMenu">
            <img src="{{ Vite::asset('public/img/buy-dc-power-visa.svg') }}" alt="" />
            <p>DC POWER VISA</p>
        </div>
    </div>
</div>
