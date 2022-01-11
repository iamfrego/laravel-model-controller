@extends('layouts.app');

@section('content')
    <div class="container">
        <h1>My Movie</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo praesentium possimus rem nulla. Dolor possimus ea vel sed suscipit ut beatae.</p>


        <section class="books">
            

            @forelse ($movies as $movie)
                <div class="movie">
                    <h4>{{$movie->title}}</h4>
                    <h5>{{$movie->original_title}}</h5>
                    <div class="description">
                        <p>{{$movie->nationality}}</p>
                        <p>{{$movie->date}}</p>
                        <p>{{$movie->vote}}</p>

                    </div>

                </div>
            @empty
                <p>Sorry, no movie aviables now</p>
            @endforelse
        </section>

    </div>
@endsection