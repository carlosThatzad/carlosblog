@extends('layouts.app')
@section('content')
    <article>
        <div class="container ">
            @foreach($articulos as $articulo)
                <div class="row articulo mt-5 ">
                    <div class="col d-flex flex-column align-items-center mt-2  " >
                        <h3 class="line mb-1" >{{ $articulo->titulo }}</h3> <h4>{{ $articulo->categoria->name }}</h4>

                        <div class="row  text-justify">
                            <img  class="col rounded h-25 col-md-3 ml-lg-5 ml-md-2 ml-sm-1" src="{{ $articulo->imagen }}" alt="">
                            <p class="col col-lg-5 ml-lg-5 ml-md-2 ml-sm-1">{{$articulo->descripcion}}</p>
                            <p class="ml-lg-3 ml-md-0 ml-sm-0 text-center ">Fecha de creación:<br><b>{{$articulo->created_at}}</b></p>
                        </div>
                        <div class="bt1">
                            <a class=" row btn-lg  mb-3 btn btn-dark botoninfo" href="{{ route('articulo.show', [$articulo->slug])}}">ver mas</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </article>
    <footer>
        <div class="downnav mt-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </footer>
@endsection