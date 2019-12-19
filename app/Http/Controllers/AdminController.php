<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 3/12/19
 * Time: 12:27
 */

namespace carlosblog\Http\Controllers;
use carlosblog\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    protected $resourceName = "articulos";
    protected $repositoryName = Articulo::class;
    function show()
    {


        return view('admin');

    }
    public function delete( $id )
    {
        $articulo = Articulo::find($id);
        if(!empty($articulo)){

            $articulo->delete();
            return redirect()->route('admin.index')->with('success','Registro eliminado satisfactoriamente');
            //return redireción
        }
       // die('ha llegado fuera del if');
        Abort(404,'Artículo no encontrado');

    }
public function create(){

        return view('admin.articulos.create');
}
    public function edit($slug)
    {
        $articulo = Articulo::where('slug', '=', $slug)->first();

        return view('admin.articulos.post_edit')
            ->with('articulo', $articulo);
    }

    /*public function update($slug)
    {
        $articulo = Articulo::where('slug', '=', $slug)->first();
        $articulo = $this->update([
            'titulo' => $articulo->titulo,
            'descripcion' => $articulo->descripcion,
            'contenido' => $articulo->contenido,
            'imagen' => $articulo->imagen,
            'categoria_id' => $articulo->categoria_id

        ]);
        return redirect('posts');
    }*/
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'titulo' => 'required',
            'descripcion' => 'required',
            'contenido' =>'required',
            'imagen' =>'required',
            'categoria_id'=>'required'

        ]);
        Articulo::create($request->all());
        return redirect()->route('admin.index')->with('success','Registro creado satisfactoriamente');
    }
    public function updatet(Request $request, $id)    {
        dd($request);
       $articulo= Articulo::find($id);



        if(!empty($articulo)){

            $this->validate($request,[
                'titulo' => 'required',
                'descripcion' => 'required',
                'contenido' =>'required',
                'imagen' =>'required',
                'categoria_id'=>'required',

            ]);

            Articulo::find($id)->update($request->all());
            return redirect()->route('admin.index')->with('success','Registro actualizado satisfactoriamente');

        }
      else{
          Abort(404,'Artículo no encontrado');


      }
       //mirar que ha encontrado el id sino abort





    }
    public function update(Request $request , $id)
    {

        $articulo = Articulo::where('id', '=', $id)->first();

        $this->validate(request(),[
            'titulo' => 'required',
            'descripcion' => 'required',
            'contenido' =>'required',
            'imagen' =>'required',
            'categoria_id'=>'required'

        ]);




        /* if(!is_object($articulo))
        {
            $articulo = new $articulo;
        }*/


        $articulo->titulo = Input::get('titulo');
        $articulo->descripcion= Input::get('descripcion');
        $articulo->contenido= Input::get('contenido');
        $articulo->imagen= Input::get('imagen');
        $articulo->categoria_id= Input::get('categoria_id');


        $articulo->save();

//dd($articulo);

    /* return Articulo::update([
            'titulo' => $articulo['titulo'],
            'descripcion' => $articulo['descripcion'],
            'contenido' => $articulo['contenido'],
            'imagen' => $articulo['imagen'],
            'categoria_id' => $articulo['categoria_id'],
            ]);*/

        return redirect()->route('admin.index')->with('success','Registro actualizado satisfactoriamente');
       // return redirect()->route('admin.index');
     // return redirect ('admin.articulos.post_edit');
       //return redirect('admin.articulos.post_edit');
    }
}