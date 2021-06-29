@extends('layouts.main')

@section('content')

  <h3>Sezione Create</h3>
  <h4>Aggiungi un nuovo fumetto</h4>
  
  {{-- form --}}

  <form action="{{ route('comics.store') }}" method="post">
    @csrf
    @method('POST')

   {{--  <input type="text" name="title" placeholder="titolo...">
    
    <input type="text" name="description" placeholder="descrizione..">

    <input type="text" name="price" placeholder="prezzo...">

    <input type="text" name="image" placeholder="url image...">

    <input type="text" name="series" placeholder="serie...">

    <input type="text" name="sale_date" placeholder="data di uscita...">

    <select  id="type" name="type">
      <option value="comic-book">comic book</option>
      <option value="corta">graphic novel</option>
    </select>

    <button type="submit">Invia</button> --}}


    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Title">
    </div>
    <div class="form-group col-md-6">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" name="description" placeholder="Description">
    </div>
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price"  placeholder="Price">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="text" class="form-control" id="image" name="image" placeholder="Image">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="series">Series</label>
      <input type="text" class="form-control" name="series" id="series">
    </div>
    <div class="form-group col-md-4">
      <label for="type">Type</label>
      <select id="type" class="form-control" name="type">
        <option value="comic-book" selected>comic book</option>
        <option value="graphic-novel">graphic novel</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="sale_date">Sale Date</label>
      <input type="text" class="form-control" id="sale_date" name="sale_date">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>


  </form>



@endsection