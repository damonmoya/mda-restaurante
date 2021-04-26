@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
  <h1>Create an element</h1>
  {{ Form::open(array('url' => 'pruebas')) }}

    <div class="form-group">
      {{ Form::label('name', 'Name') }}
      {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
      {{ Form::label('description', 'Description') }}
      {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the shark!', array('class' => 'btn btn-primary')) }}

  {{ Form::close() }}
  
@endsection