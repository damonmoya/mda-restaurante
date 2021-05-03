@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
  
<a class="btn btn-secundary" href="{{ route('mesa.create')}}">Create</a>

  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Capacity</th>
        <th scope="col">Availability</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach($mesas as $mesa)
      <tr>
        <th>{{ $mesa->idTable }}</th>
        <td>{{ $mesa->capacity }}</td>
        <td>{{ $mesa->availability }}</td>
        <td>
          <a class="btn btn-small btn-success" href="{{ URL::to('mesa/' . $mesa->idTable ) }}">Show</a>
          <a class="btn btn-small btn-info" href="{{ URL::to('mesa/' . $mesa->idTable . '/edit') }}">Edit</a>
          <form action="{{ route ('mesa.destroy', $mesa->idTable)}}" method="post">
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