<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Laravel</title>
</head>
<body>
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
                <a class="nav-link" href="#">Contacto</a>
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
<section class="contactobase">

    <form class="form-horizontal mt-5" role="form" method="post" action="index.php">
     <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Nombre</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
         </div>
     </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
         <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
         </div>
        </div>
        <div class="form-group">
            <label for="message" class="col-sm-2 control-label">¿Que nos quieres decir?</label>
            <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"></textarea>
            </div>
        </div>
   <!-- <div class="form-group">
        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Respuesta">
        </div>
    </div>-->
        <div class="form-group">
         <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
          </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
            </div>
        </div>
    </form>
</section>
</body>
<footer>

</footer>
</html>