<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, "index"]);

Route::get('cursos/create', [CursoController::class, "create"]);

Route::get('cursos/{curso}', [CursoController::class, "show"]);

/*Route::get('cursos/{curso}/{categoria?}', function ($curso, $category = null) {
    if($category){
        return "Bienvenidos al curso de $curso de la categoria $category";
    }else{
        return "Bienvenido al curso de: $curso";
    }
});*/

/**
 *1) laravel lee las rutas de arriba para abajo 
 *2) podemos poner mas de dos variables a la ruta
 *3) para poner una variable que sea opcionable se la pone el signo 
 * de interrogacion ? e inicializar la varible de funcion anonima
 * 
 */
