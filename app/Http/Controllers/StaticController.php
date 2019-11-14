<?php

namespace carlosblog\Http\Controllers;

use carlosblog\Articulo;
use Illuminate\Http\Request;

class StaticController extends Controller
{

    function home(){
        $articulos = Articulo::orderBy('created_at', 'DESC')->paginate(5);

        return view('prueba')
            ->with('articulos', $articulos);

    }


}
