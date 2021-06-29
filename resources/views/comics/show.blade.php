@extends('layouts.main')

@section('content')

  <h4 class="text-center">Sezione Show</h4>
  <p>{{ $comic->title }}</p>
  <p>{{ $comic->description }}</p>
  <img src="{{ $comic->image }}" alt="{{ $comic->title }}">

  
@endsection