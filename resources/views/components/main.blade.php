<!-- Website content -->
<main id="main-content">
    @yield("content")

    <div class="features">
        <div class="container">
            <a href="#">
                <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                <div>Digital Comics</div>
            </a>

            <a href="#">
                <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                <div>DC Merchandise</div>
            </a>

            <a href="#">
                <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                <div>Subscription</div>
            </a>

            <a href="#">
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                <div>Comic Shop Locator</div>        
            </a>

            <a href="#">
                <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
                <div>DC Power Visa</div>        
            </a>
        </div>
    </div>
</main>