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
    @foreach($pruebas as $prueba)
      <tr>
        <th>{{ $prueba->id }}</th>
        <td>{{ $prueba->name }}</td>
        <td>{{ $prueba->description }}</td>
        <td>
          <a class="btn btn-small btn-success" href="{{ URL::to('prueba/' . $prueba->id ) }}">Show</a>
          <a class="btn btn-small btn-info" href="{{ URL::to('prueba/' . $prueba->id . '/edit') }}">Edit</a>
          <form action="{{ URL::to ('prueba.destroy', ['id' => $prueba->id])}}" method="post">
            @method("delete")
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection