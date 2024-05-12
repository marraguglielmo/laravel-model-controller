@extends('layout.main')

@section('content')
    <section class="movies-list top-list">
        <div class="container">
            <h2 class="text-center">Top Film 2024</h2>
            <div class="row row-cols-4">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="gm_card text-center">
                            <div class="card-img">
                                <img src="{{ $movie->cover_image }}" alt="{{ $movie->title }}">
                            </div>
                            <div class="card-text">
                                <h3 class="card-title mb-2">
                                    {{ $movie->original_title }}
                                </h3>
                                <div class="card-date">
                                    {{ $movie->date }}
                                </div>
                                <div class="card-vote">
                                    voto: {{ $movie->vote }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
