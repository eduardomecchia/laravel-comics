<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <!-- Website header -->
        <header id="site-header">
            <div class="header-top">
                <div class="container">
                    <a href="#">DC POWER&trade; VISA&reg;</a>
                    <a href="#">ADDITIONAL DC SITES</a>
                </div>
            </div>

            <div class="container">
                <a href="/" class="logo">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="">
                </a>

                <nav class="header-menu">
                    <a href="#">Characters</a>
                    <a href="/comics">Comics</a>
                    <a href="#">Movies</a>
                    <a href="#">Tv</a>
                    <a href="#">Games</a>
                    <a href="#">Collectibles</a>
                    <a href="#">Videos</a>
                    <a href="#">Fans</a>
                    <a href="#">News</a>
                    <a href="#">Shop</a>

                    <div class="searchbox">
                        <input type="text" placeholder="Search"> 
                    </div>
                </nav>
            </div>

            <div class="jumbotron"></div>
        </header>
        
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

        <!-- Website footer -->
        <footer id="site-footer">
            <div class="container">
                <div class="menus">
                    <ul class="footer-menu">
                        <li><h2 class="menu-heading">DC Comics</h2></li>
                        <li><a href="#">Characters</a></li>
                        <li><a href="/comics">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
    
                        <li>
                            <ul class="footer-menu">
                                <li><h2 class="menu-heading">Shop</h2></li>
                                <li><a href="#">Shop DC</a></li>
                                <li><a href="#">Shop DC Collectibles</a></li>
                            </ul>
                        </li>
                    </ul>
    
                    <ul class="footer-menu">
                        <li><h2 class="menu-heading">DC</h2></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy policy (New)</a></li>
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talent Workshops</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
    
                    <ul class="footer-menu">
                        <li><h2 class="menu-heading">Sites</h2></li>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>

                <div class="disclaimer">
                    <div>
                        All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.
                    </div>

                    <a href="#">Cookies Settings</a>
                </div>
            </div>
            <div class="call-to-action">
                <div class="container">
                    <button>SIGN-UP NOW!</button>

                    <div class="social">
                        <span>FOLLOW US</span>

                        <a href="#">
                            <img src="{{ asset('img/footer-facebook.png') }}" alt="">
                        </a>

                        <a href="#">
                            <img src="{{ asset('img/footer-twitter.png') }}" alt="">
                        </a>

                        <a href="#">
                            <img src="{{ asset('img/footer-youtube.png') }}" alt="">
                        </a>

                        <a href="#">
                            <img src="{{ asset('img/footer-pinterest.png') }}" alt="">
                        </a>

                        <a href="#">
                            <img src="{{ asset('img/footer-periscope.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>