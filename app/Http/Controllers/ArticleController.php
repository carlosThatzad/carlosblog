<?php

namespace carlosblog\Http\Controllers;

use carlosblog\Articulo;

use Illuminate\Http\Request;
class ArticleController extends Controller
{
    function show($slug){

        $articulo = Articulo::where('slug', '=', $slug)->first();

        return view('articulo')
            ->with('articulo', $articulo);

    }

}
