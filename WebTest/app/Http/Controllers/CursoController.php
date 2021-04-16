<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view("curso.index");
    }

    public function create(){
        return view("curso.create");
    }

    public function show($curso){
        return view("curso.show", compact('curso'));
    }
}

/**
 * con compact() con este metodo nos devuelve un array
 * que seria -> ['curso' => $curso]
 */
