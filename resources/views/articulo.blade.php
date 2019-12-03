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

        @include('layouts.header')
        @section('nav')
        @endsection


        <div class="container-fluid ">
            <div class="row d-flex justify-content-center mt-5  ">
                  <div class="col-lg-8 d-flex flex-column align-items-center articulo ">
                      <h3 class=" mt-3 mb-1 line" >{{ $articulo->titulo }}</h3>
                      <h4 class="mt-2">{{ $articulo->categoria->name }}</h4>

                      <div id="boximg" class="col-lg-6">
                        <img class="img-fluid mb-2" src="{{ $articulo->imagen }}" alt="">
                      </div>
                    <p>{{$articulo->contenido}}</p>
                  </div>
            </div>
        </div>

@include('layouts.footer')
@section('footer')
@endsection
</section>
</body>


</html>