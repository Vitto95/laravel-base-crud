@extends('layouts.main')

@section('content')

  <h3>Sezione Create</h3>
  <h4>Aggiungi un nuovo fumetto</h4>
  
  {{-- form --}}

  <form action="{{ route('comics.store') }}" method="post">
    @csrf
    @method('POST')

    <input type="text" name="title" placeholder="titolo...">
    
    <input type="text" name="description" placeholder="descrizione..">

    <input type="text" name="price" placeholder="prezzo...">

    <input type="text" name="image" placeholder="url image...">

    <input type="text" name="series" placeholder="serie...">

    <input type="text" name="sale_date" placeholder="data di uscita...">

    <select  id="type" name="type">
      <option value="comic-book">comic book</option>
      <option value="corta">graphic novel</option>
    </select>

    <button type="submit">Invia</button>


  </form>

@endsection