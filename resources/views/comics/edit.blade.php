@extends('layouts.main')

@section('content')

  <h3>Sezione Create</h3>
  <h4>Aggiungi un nuovo fumetto</h4>
  
  {{-- form --}}

  <form action="{{ route('comics.update', $comic) }}" method="post">
    @csrf
    @method('PATCH')

    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $comic->title }}">
    </div>
    <div class="form-group col-md-6">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="{{ $comic->description }}">
    </div>
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price"  placeholder="Price" value="{{ $comic->price }}">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="text" class="form-control" id="image" name="image" placeholder="Image" value="{{ $comic->image }}">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="series">Series</label>
      <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}">
    </div>
    <div class="form-group col-md-4">
      <label for="type">Type</label>
      <select id="type" class="form-control" name="type">
        <option value="comic-book" @if ($comic->type === 'comic book') selected  @endif>comic book</option>
        <option value="graphic-novel" @if ($comic->type === 'graphic novel') selected  @endif>graphic novel</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="sale_date">Sale Date</label>
      <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Send</button>
</form>


  </form>



@endsection