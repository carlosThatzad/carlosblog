<?php

namespace carlosblog\Http\Controllers;

use carlosblog\Articulo;

use Illuminate\Http\Request;
class ArticleController extends Controller
{
    function show($slug){

        $articulo = Articulo::where('slug', '=', $slug)->first();

        if(empty($articulo)){
            abort(404);
        }

        return view('articulo')
            ->with('articulo', $articulo);

    }

}
