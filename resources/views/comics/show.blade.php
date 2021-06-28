@extends('layouts.main')

@section('content')

  <h4>Sezione Show</h4>
  <p>{{ $comic->title }}</p>
  <p>{{ $comic->description }}</p>

  
@endsection