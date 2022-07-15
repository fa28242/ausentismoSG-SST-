@extends('adminlte::page')

@section('title', 'CREAR USUARIOS')

@section('content_header')
    <h1>CREACIÓN de Usuarios</h1>


@stop

@section('content')

    <div class="card">
      
      <div class="card-body">
        {!! Form::open(['route' => 'administrador.users.store']) !!}
           @include('administrador.users.partials.form')
           {!! Form::submit('Crear Usuario',['class' => 'btn btn-primary btn-sm']) !!}
        {!! Form::close() !!}
      </div>
    </div>
    

@stop

