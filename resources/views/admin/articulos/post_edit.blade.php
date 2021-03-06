
@extends('layouts.admin')
@section('content')

<div class="container col-md-8 col-md-offset-2">
    <div class="well well bs-component">
        <form class="form-horizontal" method="POST" >
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            {!! csrf_field() !!}

            <fieldset >
                <legend style="color:white;font-size: 50px ">EDITAR POST</legend>
                <div class="form-group">
                    <label for="titulo" class="col-lg-label" style="color:white;font-size: 30px">Título</label>
                <div class="col-lg-12">
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{!!$articulo->titulo !!}">
                    </div>

                    <div class="col-lg-12  mt-5 ">
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{!!$articulo->descripcion !!}">
                    </div>

                    <div class="col-lg-12 mt-5 " >
                        <input style="height: 100px; " type="text" rows="1" cols="80" class="form-control " id="contenido" name="contenido" value="{!!$articulo->contenido !!}">
                    </div>
                    <div class="col-lg-12  mt-5">
                        <input type="text" class="form-control" id="imagen" name="imagen" value="{!!$articulo->imagen !!}">
                    </div>
                    <div class="col-lg-12  mt-5">
                        <input type="text" class="form-control" id="categoria_id" name="categoria_id" value="{!!$articulo->categoria_id !!}">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button class="ntm btn-primary mt-5 mb-5" ><a href="{{route('admin.index')}}">Cancelar</a></button>
                        <button type="submit" class="ntm btn-primary  mt-5 mb-5"><a href="{{ route('admin.articulo.delete',[$articulo->id])}}">DELETE</a></button>

                        <a href="{{ route('admin.articulo.update', $articulo->id )}}"><button type="submit" class="ntm btn-primary  mt-5 mb-5">Actualizar</button></a>
                    </div>
                </div>



            </fieldset>
        </form>
    </div>
</div>
@endsection
