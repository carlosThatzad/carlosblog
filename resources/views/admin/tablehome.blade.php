
@extends('layouts.admin')
@section('content')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <div style="height: auto;">

        <div class="btn-group mt-5 ml-5 mb-4">
            <a href="{{ route('admin.articulo.create') }}" class="btn btn-info" >Añadir Articulo</a>
        </div>

        <table col="8" class="table table-striped table-dark" align="center" style=" width: 80%;">

    <thead >
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Nombre categoria</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Fecha de creacion</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
        <tbody >
            @foreach($articulos as $articulo)

            <tr>
                <td>{{ $articulo->titulo }}</td>
                <td>{{ $articulo->categoria->name }}</td>
                <td>{{$articulo->descripcion}}</td>
                <td>{{$articulo->created_at}}</td>
                <td>
                    <button type="button" class="btn btn-default btn-lg" href="{{ route('admin.articulo.edit',[$articulo->slug ])}}" >
                    <a href="{{ route('admin.articulo.edit',[$articulo->slug ])}}">
                    <span class="glyphicon glyphicon-pencil" href="{{ route('admin.articulo.edit',[$articulo->slug ])}}"></span>
                    </a>
                    </button>
                </td>
            </tr>

             @endforeach
        </tbody>
    </table>

@endsection