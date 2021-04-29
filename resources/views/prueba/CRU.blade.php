@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
  <h1>{{ ($prueba == 'create') ? 'Create' : 'Edit' }} an element</h1>
  <form action="{{ ($prueba == 'create') ? route('prueba.store', $value->id) : route('prueba.update', $value->id) }}" method="POST">
  @if ($action == "show")
  <fieldset disabled="disabled">
  @endif
  @scrf
  @if ($action == "edit") 
    @method('PUT')
  @endif
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" aria-describedby="name" value="{{ ($prueba == 'create') ? '' : $prueba->name }}">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Description</label>
      <input type="text" class="form-control" id="description" aria-describedby="description" value="{{ ($prueba == 'create') ? '' : $prueba->description }}">
    </div>
    <div>
      @if ($action != "show")
      <button type="submit" class="btn btn-primary">{{ ($prueba == 'create') ? 'Create' : 'Edit' }}</button>
      @endif
      <button type="button" class="btn btn-secundary">Cancel</button>
    </div>
  @if ($action == "show")
  </fieldset>
   @endif
  </form>
  
@endsection