<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;

class JuegosController extends Controller
{
    //Get
    public function getJuegos(){
        $juegos = Juego::all();
        return $juegos;
    }
    //Post
    public function crearJuego(Request $request){
        $juego = new Juego();
        $juego->id = $request->id;
        $juego->nombre = $request->nombre;
        $juego->fecha_lanzamiento = $request->fecha_lanzamiento;
        $juego->plataforma = $request->plataforma;
        
        $juego->save();
        return $juego;
    }
    //Put
    public function updateJuego(Request $request, Juego $juego){
        
        $juego->nombre = $request->nombre;
        $juego->fecha_lanzamiento = $request->fecha_lanzamiento;
        $juego->plataforma = $request->plataforma;
        
        $juego->save();
        return $juego;
    }
    //Delete
    public function deleteJuego(Juego $juego){
        $juego->delete();
        return "ok";
    }


    //GetById
    public function getJuegoById(Juego $juego){
        return $juego;
    }
}
