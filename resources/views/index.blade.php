@extends('layouts.structure')
@section('title','index')

@section('content')
    <center><h1>index</h1></center>    
        <br><br><br>
        <h1>Lista de juegos</h1>


    @forelse($games as $item)
        <li>{{$item}}</li>
    @empty
        <p>La lista de juegos esta vacia</p>
    @endforelse
@endsection