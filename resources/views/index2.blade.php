@extends('layouts.structure')
@section('title', 'Listado de videojuegos')

@section('content')
    <h1>Listado de juegos</h1>
    <br><br>
    <p><a href="{{route('create')}}">Create videogame</a></p>
    <br>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CATEGORIA_ID</th>
                <th>CREADO</th>                
                <th>ESTADO</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($games as $game)
            <tr>
                <th>{{$game->id}}</th>
                <th><a href="{{route('viewgame', $game->id)}}">{{$game->name}}</a></th>
                <th>{{$game->category_id}}</th>
                <th>{{$game->created_at}}</th>                
                <th>@if ($game->active)
                    <span style="color:green;">ACTIVO</span>
                @else
                    <span style="color:red;">INACTIVO</span>
                @endif</th>
            </tr>
        @empty
            <tr>
                <th><h3>No hay video juegos</h3></th>
            </tr>
        @endforelse            
        </tbody>
    </table>
@endsection