@extends('layout.main')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                @foreach ($movies as $movie)
                    <div class="gm_card">
                        <div class="card-img">
                            <img src="{{$movie->cover_image}}" alt="">
                        </div>
                        <div class="card-title">
                            {{$movie->original_title}}
                        </div>
                        <div class="card-date">
                            {{$movie->date}}
                        </div>
                        <div class="card-vote">
                            voto: {{$movie->vote}}
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</section>

@endsection
