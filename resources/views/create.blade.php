@extends('layouts.app')

@section('content')
<div class="container">
  <h1>deposer une annonce</h1>
  <hr>
  <form action="{{ route('ad.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="Title">titre de l annonce</label>
      <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="Title"
        aria-describedby="title" name="title">
      @if($errors->has('title'))

      <span class="invalid-feedback">{{ $errors->first('title') }}</span>
      @endif
    </div>
    <div class="mb-3">
      <label for="description">description de l annonce</label>
      <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description"
        id="description" cols="30" rows="10"></textarea>
      @if($errors->has('description'))

      <span class="invalid-feedback">{{ $errors->first('description') }}</span>
      @endif
    </div>
    <div class="mb-3">
      <label for="Localisation">localisation</label>
      <input type="text" class="form-control {{ $errors->has('localisation') ? 'is-invalid' : '' }}" id="localisation"
        name="localisation">
      @if($errors->has('localisation'))

      <span class="invalid-feedback">{{ $errors->first('localisation') }}</span>
      @endif
    </div>
    <div class="mb-3">
      <label for="Price">price</label>
      <input type="text" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" id="price" name="price">
      @if($errors->has('price'))

      <span class="invalid-feedback">{{ $errors->first('price') }}</span>
      @endif
    </div>


    <button type="submit" class="btn btn-primary">soumettre notre annonce</button>
  </form>
</div>
@endsection