


    @extends('layouts.app')
    @section('content')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<div class="containercontact" style="height: 60vh; ">
    <h1 style="margin-left: 540px;margin-right: 40px; " >Ayudanos a Mejorar!</h1>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    {!! Form::open(['route'=>'contactus.store']) !!}
    <div style="margin-left: 150px;margin-right: 40px; width: 70em;" class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        {!! Form::label('Name:') !!}
        {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
        <span  class="text-danger">{{ $errors->first('name') }}</span>
    </div>
    <div style="margin-left: 150px;margin-right: 40px; width: 70em;" class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        {!! Form::label('Email:') !!}
        {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
        <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>
    <div style="margin-left: 150px;margin-right: 40px; width: 70em;" class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
        {!! Form::label('Message:') !!}
        {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
        <span class="text-danger">{{ $errors->first('message') }}</span>
    </div>
    <div style="margin-left: 150px;margin-right: 40px; width: 70em;" class="form-group">
        <button class="btn btn-success">Contact US!</button>
    </div>
    {!! Form::close() !!}
</div>

@endsection
