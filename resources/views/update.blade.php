@extends('layouts.structure')
@section('title','Update')

@section('content')
    <center><h1>Update</h1></center>
    <br>
    <form action="{{route('updatevideogame')}}" method="POST">
        @csrf
        <input type="hidden" name="game_id" id="" value='{{$game->id}}'>
        <input type="text" placeholder="Nombre del videojuego" name="name_game" value="{{$game->name}}">
            <select name="categoria_id" id="">
                @forelse($categories as $category)
                    <option value="{{$category->id}}" @if($category->id == $game->category_id) selected @endif >{{$category->name}}</option>                
                @empty
                    <option value="#"><h2>No hay datos</h2></option>                    
                @endforelse
            </select>
            <input type="submit" value="Enviar">        
    </form>
@endsection
