@extends("layouts.app")

@section("title", "DC Comics")

@section("content")
    <div class="container">
        @foreach($comics as $comic)
            <div class="comic">
                <img src="{{ $comic['thumb'] }}" alt="">
                <div class="comic-series">{{ $comic["series"] }}</div>
            </div>
        @endforeach
    </div>
@endsection