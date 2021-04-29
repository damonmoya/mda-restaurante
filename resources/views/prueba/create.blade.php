@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
  <h1>Create an element</h1>
  <form action="{{ route('prueba.store', $value->id) }}" method="POST">
  @scrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" aria-describedby="name">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Description</label>
      <input type="text" class="form-control" id="description" aria-describedby="description">
    </div>
    <div>
      <button type="submit" class="btn btn-primary">Create</button>
      <button type="button" class="btn btn-secundary">Cancel</button>
    </div>
  </form>

@endsection