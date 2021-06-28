@extends('layouts.main');

@section('content')

  <h3>SEZIONE FUMETTI</h3>
  @foreach ($comics as $comic)

    <h4>{{ $comic->id }}</h4>
    <p> {{ $comic->title }} </p>
    <p> {{ $comic->type }} </p>
    <p> {{ $comic->series }} </p>
    <a href="{{ route('comics.show', $comic) }}">SHOW</a>
    
  @endforeach
  
@endsection