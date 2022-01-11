@extends('layouts.app');

@section('content')
    <div class="container">
        <section class="movies">
            
            @forelse ($movies as $movie)
                <div class="movie">
                    <div class="badge">
                        <p>{{$movie->id}}</p>
                    </div>

                   @if ($movie->title == $movie->original_title)
                       <h4 class="title">Title: {{$movie->title}}</h4>
                   @else
                    <h4 class="title">Title: {{$movie->title}}</h4>
                    <h5 class="og_title">Original title: {{$movie->original_title}}</h5>
                   @endif
                    
                   <p class="nationality">Nationality: {{$movie->nationality}}</p>
                   <div class="description">
                        <p class="date">Date: {{$movie->date}}</p>
                        <p class="vote">Vote: {{$movie->vote}}</p>
                    </div>
                </div>
            @empty
                <p>Sorry, no movie aviables now</p>
            @endforelse
        </section>

    </div>
@endsection