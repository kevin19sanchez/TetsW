<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
         //return view('welcome');
    return view('home');
    }

    /**
     * cuando creamos el metodo invoke es solo para administra una unica ruta
     */
}
