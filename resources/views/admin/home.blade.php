@extends('layouts.admin')
@section('content')
<div class="">
    <div class="d-flex">
    <div class="btn-group mt-4 ml-5 align-items-center">
        <a href="{{ route('admin.articulo.create') }}" class="btn btn-info" >Añadir Articulo</a>
    </div>
    <div class="btn-group mt-4 ml-5 align-items-center">
        <a href="{{ route('admin.tablehome') }}" class="btn btn-info" >Formato tabla</a>

    </div>
    <div class="mt-4   " style="margin-left: 620px;">
        @if (count($articulos))
            {{ $articulos->links() }}
        @endif
    </div>
    </div>
@foreach($articulos as $articulo)
        <div class="row articulo mt-5 ">
            <div class="col d-flex flex-column align-items-center mt-2  " >
                <h3 class="line mb-1" >{{ $articulo->titulo }}</h3>
                <h4>{{ $articulo->categoria->name }}</h4>
                <div class="row  text-justify">
                    <img  class="col rounded h-25 col-md-3 ml-lg-5 ml-md-2 ml-sm-1" src="{{ $articulo->imagen }}" alt="">
                    <p class="col col-lg-5 ml-lg-5 ml-md-2 ml-sm-1">{{$articulo->descripcion}}</p>
                    <p class="ml-lg-3 ml-md-0 ml-sm-0 text-center ">Fecha de creación:<br><b>{{$articulo->created_at}}</b></p>
                </div>
                <div class="btn btn-info bt1  mb-5"> <a href="{{ route('admin.articulo.edit',[$articulo->slug ])}}">Edit</a>
            </div>
          </div>
        </div>
    @endforeach


@endsection