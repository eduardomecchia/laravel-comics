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
            <img class="thumbnail" src="{{ $comic['thumb'] }}" alt="">

            <div class="comic-info">
                <h2 class="comic-title">{{ $comic["title"] }}</h2>

                <div class="price-bar">
                    <div class="price">
                        <span>U.S. Price:&nbsp;</span> 
                        <span>{{ $comic["price"] }}</span>
                    </div>

                    <div class="availability">
                        <span>AVAILABLE</span>
                        <span>Check Availability</span>
                    </div>
                </div>

                <p class="comic-description">{{ $comic["description"] }}</p>
            </div>

            <div class="ad">
                <h5 class="ad-heading">Advertisement</h5>

                <a href="#">
                    <img src="{{ asset('img/adv.jpg') }}" alt="">
                </a>
            </div>
        </div>
    </div>
@endsection