<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegosController; 
use App\Models\Juego;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/games', function () {
    
    $juegos = Juego::all();
    return view('games',[
        'juegos' => $juegos
    ]);
    
})->name('games');
Route::get('/ver_juego/{id}', function ($id) {
    return view('ver_juego', [
        'juego' => Juego::findOrFail($id)
    ]);
    
})->name('ver_juego');



Route::get("juegos",[JuegosController::class, "getJuegos"])->name('juegos.get');
Route::post("juegos",[JuegosController::class, "crearJuego"])->name('juegos.post');
Route::put("juegos/{juego}",[JuegosController::class, "updateJuego"])->name('juegos.put');
Route::delete("juegos/{juego}",[JuegosController::class, "deleteJuego"])->name('juegos.delete');



Route::get("juegos/{juego}",[JuegosController::class, "getJuegoById"]);
