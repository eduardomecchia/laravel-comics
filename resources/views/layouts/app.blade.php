<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <header id="site-header">
            <div class="header-top">
                <div class="container">
                    <span>DC POWER&trade; VISA&reg;</span>
                    <span>ADDITIONAL DC SITES</span>
                </div>
            </div>

            <div class="container">
                <a href="/" class="logo">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="">
                </a>

                <nav class="menu">
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
                        <input type="text" placeholder="SEARCH"> 
                    </div>
                </nav>
            </div>

            <div class="jumbotron"></div>
        </header>
        
        <main id="main-content">
            @yield("content")
        </main>

        <footer id="site-footer">
            <div class="container">
                footer menu

            </div>
            <div class="call-to-action">
                <div class="container">
                    <button>SIGN UP NOW!</button>

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