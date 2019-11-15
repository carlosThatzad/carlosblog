<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Laravel</title>
</head>
<body>
<section class="homebase">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CARLOSBLOG ~</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacto">Contacto</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorías
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">HTML</a>
                    <a class="dropdown-item" href="#">CSS</a>
                    <a class="dropdown-item" href="#">JS</a>
                    <a class="dropdown-item" href="#">C++</a>
                    <a class="dropdown-item" href="#">PHP</a>
                    <a class="dropdown-item" href="#">MySQl</a>
                    <a class="dropdown-item" href="#">Java</a>
                    <a class="dropdown-item" href="#">Laravel</a>
                    <a class="dropdown-item" href="#">Bootstrap</a>
                    <a class="dropdown-item" href="#">XML</a>
                   <!-- <div class="dropdown-divider"></div>-->

                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" role="button" tabindex="-1" aria-disabled="true">Login</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
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

<script src="{{mix('js/app.js')}}"></script>

</body>
</section>
</html>
