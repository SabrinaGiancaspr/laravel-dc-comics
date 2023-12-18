@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <form action="{{ route('comics.store') }}" method="POST" >

      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Titolo">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrivi il comic"></textarea>

      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Image (url)</label>
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="thumb comic">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input type="number" class="form-control" name="price" id="price" placeholder="prezzo($)">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">series</label>
        <input type="text" class="form-control" name="series" id="series" placeholder="serie">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">type</label>
        <input type="text" class="form-control" name="type" id="type" rows="3" placeholder="tipo comic"></textarea>
      </div>

      <div class="">
        <input type="submit" class="btn btn-primary" value="crea">
      </div>

    </form>
  </div>
</section>

@endsection