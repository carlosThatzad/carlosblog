<?php

namespace carlosblog\Http\Controllers;

use carlosblog\Articulo;
use carlosblog\Coment;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\ComentRequest;


class ComentsController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        $this->middleware('auth');
    }


    public function store(ComentRequest $request)
    {
        $articulo = Articulo::findOrFail($request->post_id);

        Coment::create([
            'body' => $request->body,
            'post_id' => $articulo->id
        ]);
        return redirect()->route('posts.show', $articulo->id);
    }
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function show($post_id)
    {
      $coment = Coment::where('post_id','=',$post_id)->first();
        if(empty($coment)){
            abort(404);
        }

        return view('articulo')
            ->with('coment', $coment);
    }


    public function edit(Coment $coment)
    {
        //
    }

    public function update(Request $request, Coment $coment)
    {
        //
    }

    public function destroy(Coment $coment)
    {
        //
    }
}
