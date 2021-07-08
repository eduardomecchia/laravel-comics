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
            <div class="logo">
                Logo
            </div>

            <nav class="menu">
                Nav links
            </nav>
        </header>
        
        <main id="main-content">
            Main content
        </main>

        <footer id="site-footer">
            Footer Content
        </footer>
    </body>
</html>