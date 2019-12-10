@extends('layouts.admin')
@section('content')

<div class="row d-flex justify-content-center" style="width: 100%;">
    <section class="content " style="width: 50em;">
        <div class="col-md-8 col-md-offset-2 col-lg-12" >
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('success'))
                <div class="alert alert-info">
                    {{Session::get('success')}}
                </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" style="color:white;">Nuevo Articulo</h3>
                </div>
                <div class="panel-body">
                    <div class="table-container">
                        <form method="POST" action="{{ route('articulo.store') }}"  role="form">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="titulo" id="titulo" class="form-control input-sm" placeholder="titulo">
                                    </div>
                                </div>

                            </div>

                            <div class="form-group col-lg-12">
                                <textarea name="descripcion" class="form-control input-sm" placeholder="descripcion"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea name="contenido" class="form-control input-sm" placeholder="contenido"></textarea>
                            </div>
                            <div class="row">


                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="imagen" id="imagen" class="form-control input-sm" placeholder="imagen">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="categoria_id" id="categoria_id" class="form-control input-sm" placeholder="categoria_id">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="submit"  value="Guardar" class="btn btn-success btn-block">
                                    <a href="{{ route('admin.index') }}" class="btn btn-info btn-block" >Atrás</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection