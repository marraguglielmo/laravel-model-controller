@extends('layout.main')

@section('content')

<h1>Movies</h1>

@foreach ($movies as $movie)
<h2>{{$movie->title}}</h2>

@endforeach

@endsection
