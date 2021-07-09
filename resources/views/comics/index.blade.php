@extends("layouts.app")

@section("title", "DC Comics")

@section("content")
    <div class="container comics">
        <h2>Current series</h2>

        @foreach($comics as $id => $comic)
            <a href="{{ route('comic', $id) }}" class="comic">
                <img src="{{ $comic['thumb'] }}" alt="">
                <div class="comic-series">{{ $comic["series"] }}</div>
            </a>
        @endforeach
    </div>
@endsection