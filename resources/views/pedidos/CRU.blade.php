@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
  <h1>{{ ($action == 'create') ? 'Create' : 'Edit' }} an element</h1>
  <form action="{{ ($action == 'create') ? route('pedido.store', $value->id) : route('pedido.update', $value->id) }}" method="POST">
  @if ($action == "show")
  <fieldset disabled="disabled">
  @endif
  @scrf
  @if ($action == "edit") 
    @method('PUT')
  @endif
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" aria-describedby="name" value="{{ ($pedido == 'create') ? '' : $pedido->name }}">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Description</label>
      <input type="text" class="form-control" id="description" aria-describedby="description" value="{{ ($pedido == 'create') ? '' : $pedido->description }}">
    </div>
    <div>
      @if ($action != "show")
      <button type="submit" class="btn btn-primary">{{ ($action == 'create') ? 'Create' : 'Edit' }}</button>
      @endif
      <button type="button" class="btn btn-secundary">Cancel</button>
    </div>
  @if ($action == "show")
  </fieldset>
   @endif
  </form>
  
@endsection