@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
  <h1>Create an element</h1>
  {{ Form::model($prueba, array('route' => array('prueba.update', %prueba->id), 'method' => 'PUT')) }}

    <div class="form-group">
      {{ Form::label('name', 'Name') }}
      <!-- cambiar input por null -->
      {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
      {{ Form::label('description', 'Description') }}
      {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('edit the shark!', array('class' => 'btn btn-primary')) }}

  {{ Form::close() }}
  
@endsection