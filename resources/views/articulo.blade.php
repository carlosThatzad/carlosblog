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
        <div class="container-fluid ">
            <div class="row d-flex justify-content-center mt-5 ">
                  <div class="col-lg-8 d-flex flex-column align-items-center articulo ">
                      <h3 class=" mt-3 mb-1 line" >{{ $articulo->titulo }}</h3>
                      <h4 class="mt-2">{{ $articulo->categoria->name }}</h4>

                      <div class="col-lg-6">
                        <img class="img-fluid mb-4" src="{{ $articulo->imagen }}" alt="">
                      </div>
                    <p>{{$articulo->contenido}}</p>
                  </div>
            </div>
        </div>
        </div>
<!--FALTA LINKAR CADA UNO DE LOS BOTONES Y METERLOS EN UNA VISTA PARA PODER USARLA EN TODAS LAS PAGINAS-->
<footer class="page-footer font-small mdb-color lighten-3 mt-4 pt-4">

    <div class="container mt-2">

        <div class="row">

            <div class="col-lg-2 col-md-12 mb-4">

                <div  class=" footimage view overlay z-depth-1-half" style="width:160px;height: 120px;" >
                    <img src="../imagenes/java.jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>

            <div class="col-lg-2 col-md-6 mb-4">

                <div class=" footimage view overlay z-depth-1-half">
                    <img src="../imagenes/c++.png" class="img-fluid"
                         alt="" style="width:160px;height: 120px;">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>

            <div class="col-lg-2 col-md-6 mb-4">

                <div class=" footimage view overlay z-depth-1-half">
                    <img src="../imagenes/html.jpg" class="img-fluid"
                         alt="" style="width:160px;height: 120px;">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>

            <div class="col-lg-2 col-md-12 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="../imagenes/javascript.jpg" class="img-fluid"
                         alt="" style="width:160px;height: 120px;">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>

            <div class="col-lg-2 col-md-6 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="../imagenes/mysql.jpg" class="img-fluid"
                         alt="" style="width:160px;height: 120px;">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <div class="col-lg-2 col-md-6 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="../imagenes/php.png" class="img-fluid"
                         alt="" style="width:160px;height: 120px;">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>

        </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> carlosblog.test[Thatzad]</a>
    </div>
</footer>
</body>
</section>

</html>