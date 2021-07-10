@extends("layouts.app")

@section("title", "Comics | DC")

@section("content")
    <div class="container comics">
        <h2>Current series</h2>

        @foreach($comics as $id => $comic)
            <a href="{{ route('comic', $id) }}" class="comic">
                <div class="thumbnail-wrapper">
                    <img src="{{ $comic['thumb'] }}" alt="">
                </div>    

                <div class="comic-series">{{ $comic["series"] }}</div>
            </a>
        @endforeach
    </div>
@endsection