@extends('layouts.structure')
@section('title','create')

@section('content')
    <center><h1>create</h1></center>
    <br>
    <form action="{{route('createvideogame')}}" method="POST">
        @csrf
        <input type="text" placeholder="Nombre del videojuego" name="name">
        
            <select name="category_id" id="">
                @forelse($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>                
                @empty
                    <option value="#"><h2>No hay datos</h2></option>                    
                @endforelse
            </select>
            <input type="submit" value="Enviar">        
    </form>
    @error('name')
            <p style="color:red;">{{$message}}</p>
    @enderror
@endsection
