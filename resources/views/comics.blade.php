@extends("layouts.app")

@section("title", "DC Comics")

@section("content")
    <div class="container">
        <h2>Current series</h2>

        @foreach($comics as $comic)
            <div class="comic">
                <img src="{{ $comic['thumb'] }}" alt="">
                <div class="comic-series">{{ $comic["series"] }}</div>
            </div>
        @endforeach
    </div>
@endsection