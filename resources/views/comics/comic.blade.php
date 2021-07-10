@extends("layouts.app")

@php
    $uri = $_SERVER["REQUEST_URI"];
    $id = $uri[strlen($uri) - 1];
    $comic = $comics[$id];
@endphp

@section("title", $comic["title"])

@section("content")
    <div class="bar"></div>

    <section class="wrapper">
        <div class="container single-comic">
            <div class="thumbnail">
                <img src="{{ $comic['thumb'] }}" alt="">

                <span class="type">{{ $comic["type"] }}</span>

                <span class="gallery">View gallery</span>
            </div>

            <!-- Info about the selected comic -->
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

            <!-- Advertising banner -->
            <div class="ad">
                <h5 class="ad-heading">Advertisement</h5>

                <a href="#">
                    <img src="{{ asset('img/adv.jpg') }}" alt="">
                </a>
            </div>
        </div>
    </section>

    <!-- Talent and specs of the selected comic -->
    <section class="comic-details">
        <div class="container details">
            <div class="talent">
                <h4>Talent</h4>

                <div class="art">
                    <div class="label">Art by:</div>

                    <ul>
                        @foreach($comic["artists"] as $artist)
                            @if(!$loop->last)
                                <li>
                                    <a href="#">{{ $artist }},&nbsp;</a>
                                </li>
                            @else
                                <li>
                                    <a href="#">{{ $artist }}</a>
                                </li>    
                            @endif
                        @endforeach
                    </ul>
                </div>

                <div class="writers">
                    <div class="label">Written by:</div>

                    <ul>
                        @foreach($comic["writers"] as $writer)
                            @if(!$loop->last)
                                <li>
                                    <a href="#">{{ $writer }},&nbsp;</a>
                                </li>
                            @else
                                <li>
                                    <a href="#">{{ $writer }}</a>
                                </li>    
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="specs">
                <h4>Specs</h4>

                <div class="series">
                    <div class="label">Series:</div>

                    <a href="#">{{ $comic["series"] }}</a>
                </div>

                <div class="price-tag">
                    <div class="label">U.S. Price:</div>

                    <div>{{ $comic["price"] }}</div>
                </div>

                <div class="sale-date">
                    <div class="label">On Sale Date:</div>

                    <div>{{ $comic["sale_date"] }}</div>
                </div>
            </div>
        </div>
    </section>
@endsection