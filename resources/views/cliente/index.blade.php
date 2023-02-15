@extends('layouts.app')
@section('content')
<div class="container">
    @if (Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible fade-show " role="alert">
            {{Session::get('mensaje')}}
            
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        
            @endif
 {{--<a href="{{ url('/cliente/create')}}" class="btn btn-success mb-4">Register a new costumer</a> 
        boton para ingresar un nuevo usuario, como seria incorrecto ingresar un nuevo usuario yo no lo ocupo
    --}}
<table class="table table-dark table-striped table-hover">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Gender</th>
            <th scope="col">Age</th>
            <th scope="col">DUI</th>
            <th scope="col">Telephone</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $clientes as $cliente)
        <tr>
            <td scope="row">{{ $cliente->id }}</td>
            <td>{{ $cliente->name }}</td>
            <td>{{ $cliente->email}}</td>
            <td>{{ $cliente->address}}</td>
            <td>{{ $cliente->gender}}</td>
            <td>{{ $cliente->age }}</td>
            <td>{{ $cliente->dui}}</td>
            <td>{{ $cliente->telephone}}</td>
            <td>
                <a href="{{ url('/cliente/'.$cliente->id.'/edit') }}" class="btn btn-warning m-1">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <form action="{{ url('/cliente/'.$cliente->id)}}" method="POST" class="d-inline">
                    @csrf
                    {{@method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('¿Quieres Borrar?')" class="btn btn-danger m-1"><i class="fa-solid fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $clientes->links() !!}
</div>
@endsection