@extends('layouts.main');

@section('content')

  <h3 class="text-center">SEZIONE FUMETTI</h3>
{{--   @foreach ($comics as $comic)

    <h4>{{ $comic->id }}</h4>
    <p> {{ $comic->title }} </p>
    <p> {{ $comic->type }} </p>
    <p> {{ $comic->series }} </p>
    <a href="{{ route('comics.show', $comic) }}">SHOW</a>
    
  @endforeach --}}

  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Type</th>
      <th scope="col">Series</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($comics as $comic)
    <tr>
      <th scope="row">{{ $comic->id }}</th>
      <td>{{ $comic->title }}</td>
      <td>{{ $comic->type }}</td>
      <td><a href="{{ route('comics.show', $comic) }}">SHOW</a></td>
    </tr>
    @endforeach
   
  </tbody>
</table>
  
@endsection