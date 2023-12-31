@extends('layouts.main')

@section("content")
    <h1>home</h1>
    <div class="container d-flex flex-wrap">
        @foreach ($movies as  $key => $movie)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{$movie->image}}" class="card-img-top" alt="...">
                    <h5 class="card-title">{{$movie['title']}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie['original_title']}}</h6>
                    <p class="card-text">{{$movie['nationality']}}</p>
                    <p class="card-text">{{$movie['date']}}</p>
                    <p class="card-text">{{$movie['vote']}}</p>
                    <a href="{{ route('product', ['id' => $movie->id]) }}" class="card-link">Card link</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
