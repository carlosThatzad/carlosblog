<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Laravel</title>
</head>
<body>

@include('layouts.header')
@section('nav')
@endsection
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

    @include('layouts.footer')
    @section('footer')
    @endsection

</html>