<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 10/01/20
 * Time: 11:23
 */

namespace carlosblog\Http\Controllers;


use carlosblog\Articulo;

use Illuminate\Http\Request;

class CategorieController extends Controller
{


    function categ($categoria_id){

        $articulos =Articulo::where('categoria_id','=',$categoria_id)->paginate(10);
        if(empty($articulos)){
            abort(404);
        }
        return view('categoria')->with('articulos',$articulos);
    }


}