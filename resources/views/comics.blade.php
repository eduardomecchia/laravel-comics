@extends("layouts.app")

@section("title", "DC Comics")

@section("content")
    <div class="container">
        @foreach($comics as $comic)
            <div class="comic">
                <div class="comic-series">{{ $comic["series"] }}</div>
                <img src="{{ $comic['thumb'] }}" alt="">
            </div>
        @endforeach
    </div>
@endsection