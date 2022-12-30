@extends('layouts.structure')
@section('title','show')
@section('content')
    <center><h1>show</h1></center>
    <br><br>

    @if($category_game)
        <h2>El nombre del videojuego es={{$name_videogame}} y la categoria es= {{$category_game}}</h2>
    @else
        <h2>El nombre del videojuego es={{$name_videogame}}</h2>
    @endif
    
    <h3> {{$fecha}}</h3>
@endsection