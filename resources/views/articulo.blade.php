@extends('layouts.app')

@section('content')
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
        <div class="row d-flex justify-content-center mt-2  ">
            <div class="col-lg-8 d-flex flex-column align-items-center articulo ">
        <div class="form-group mt-2">
            <label for="exampleFormControlTextarea1">Comentarios:</label>
            <div class="btn-group mb-3 ml-5 align-items-center">



            </div>
            <textarea class="form-control form11 " id="exampleFormControlTextarea1" rows="4"></textarea>

            <h3>Comments</h3>
                {{ Form::open(['route' => ['coments.store'], 'method' => 'POST']) }}
                <p>{{ Form::textarea('body', old('body')) }}</p>
                {{ Form::hidden('post_id', $articulo->id) }}
                <p>{{ Form::submit('Send') }}</p>
                {{ Form::close() }}

            @forelse ($articulo->coments as $coment)
                <p> {{$coment->created_at}}</p>
                <p>{{ $coment->body }}</p>
                <hr>
            @empty
                <p>Este post no tiene comentarios añade el primero!</p>
            @endforelse

        </div>
            </div>
        </div>


@endsection







