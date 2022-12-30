<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videogame;
use App\Models\category;

class GameController extends Controller
{
    public function index(){        
        $videogames=array("Fifa22","NBA22","MarioCard","Super Mario");
        return view('index', ['games'=>$videogames]);
    }
    public function create(){
        $category=category::all();        
        return view('create', ['categories'=>$category]);
    }
    public function help($name_game, $categoria=null){    
        $date= Now();
         return view('show', ['name_videogame'=>$name_game,
                            'category_game'=>$categoria,
                            'fecha'=>$date]);
    }
    public function index2(){
        $videogames=Videogame::orderby('id', 'desc')->get();
        return view('index2', ['games'=>$videogames]);        
    }
    public function storevideogame(Request $request){
        $game =new Videogame;
        $game->name=$request->name_game;
        $game->category_id=$request->categoria_id;
        $game->active=1;
        $game->save();
        
        return redirect()->route('listgames');
         
    }

    public function view($game_id){
        $game=Videogame::find($game_id);
        $category=category::all();        
        return view('update', ['categories'=>$category,
                                'game'=>$game]);
    }

    public function updatevideogame(Request $request){
        $game =Videogame::find($request->game_id);
        $game->name=$request->name_game;
        $game->category_id=$request->categoria_id;
        $game->active=1;
        $game->save();
        
        return redirect()->route('listgames');
         
    }
}

