@extends("layouts.app")

@section("title", "Laravel Comics")

@section("content")
    <div class="container">
        @foreach($comics as $comic)
            <h1>{{$comic}}</h1>
        @endforeach
    </div>
@endsection