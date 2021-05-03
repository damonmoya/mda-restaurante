@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
  <h1>{{$action }} an element</h1>
  <form action="@if ($action == 'create') {{ route('mesa.store') }} @else mesa/' . $mesa->idTable @endif " method="POST">
  @csrf
  @if ($action == "Edit") 
    @method('PUT')
  @endif
  @if ($action == "Show")
  <fieldset disabled="disabled" style="border:none;">
  @endif
    <div class="mb-3">
      <label for="name" class="form-label">Capacity</label>
      <input type="text" class="form-control" id="capacity" aria-describedby="capacity" value="@if ($action == 'Create') '' @else {{$mesa->capacity}} @endif">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Availability</label>
      <input type="text" class="form-control" id="availability" aria-describedby="availability" value="@if ($action == 'Create') '' @else {{$mesa->availability}} @endif">
    </div>
    <div>
      @if ($action != "Show")
      <button type="submit" class="btn btn-primary">{{$action}}</button>
      @endif
      <a class="btn btn-secundary" href="{{ route('mesa.index')}}">Cancel</a>
    </div>
  @if ($action == "show")
  </fieldset>
   @endif
  </form>
  
@endsection