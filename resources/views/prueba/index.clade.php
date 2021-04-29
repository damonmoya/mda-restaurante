@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach($pruebas as $key => $value)
      <tr>
        <th>$value->id</th>
        <td>$value->name</td>
        <td>$value->description</td>
        <td>
          <a class="btn btn-small btn-success" href="{{ URL::to('prueba/' . $value->id) }}">Show</a>
          <a class="btn btn-small btn-info" href="{{ URL::to('prueba/' . $value->id . '/edit') }}">Edit</a>
          <form action="{{ route('prueba.destroy', $value->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection