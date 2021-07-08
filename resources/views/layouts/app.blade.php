<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body>
        <header id="site-header">
            <div class="container">
                <div class="logo">
                    <img src="{{asset('img/dc-logo.png')}}" alt="">
                </div>

                <nav class="menu">
                    <a href="#">Characters</a>
                    <a href="#">Comics</a>
                    <a href="#">Movies</a>
                    <a href="#">Tv</a>
                    <a href="#">Games</a>
                    <a href="#">Collectibles</a>
                    <a href="#">Videos</a>
                    <a href="#">Fans</a>
                    <a href="#">News</a>
                    <a href="#">Shop</a>
                </nav>
            </div>
        </header>
        
        <main id="main-content">
            <div class="container">
                main content
            </div>
        </main>

        <footer id="site-footer">
            <div class="container">
                footer content
            </div>
        </footer>
    </body>
</html>