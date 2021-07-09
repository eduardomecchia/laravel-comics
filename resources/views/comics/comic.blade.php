@extends("layouts.app")

@php
    $uri = $_SERVER["REQUEST_URI"];
    $id = $uri[strlen($uri) - 1];
    $comic = $comics[$id];
@endphp

@section("title", $comic["title"])

@section("content")
    <div class="bar"></div>

    <div class="wrapper">
        <div class="container single-comic">
            <img src="{{ $comic['thumb'] }}" alt="">

            <h2 class="comic-title">{{ $comic["title"] }}</h2>

            <div class="price-bar">
                <div>
                    <span>U.S. Price:&nbsp;</span> 
                    <span>{{ $comic["price"] }}</span>
                </div>
            </div>

            <p class="comic-description">{{ $comic["description"] }}</p>
        </div>
    </div>
@endsection