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
    @foreach($pedidos as $pedido)
      <tr>
        <th>{{ $pedido->id }}</th>
        <td>{{ $pedido->name }}</td>
        <td>{{ $pedido->description }}</td>
        <td>
          <a class="btn btn-small btn-success" href="{{ URL::to('pedido/' . $pedido->id ) }}">Show</a>
          <a class="btn btn-small btn-info" href="{{ URL::to('pedido/' . $pedido->id . '/edit') }}">Edit</a>
          <form action="{{ route ('pedido.destroy', $pedido->id)}}" method="post">
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