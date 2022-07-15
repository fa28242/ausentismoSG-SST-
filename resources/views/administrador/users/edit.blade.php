@extends('adminlte::page')

@section('title', 'EDITAR USUARIOS')

@section('content_header')
    <h1>EDICIÓN de Usuarios</h1>


@stop

@section('content')

    <div class="card">
      
      <div class="card-body">
        {!! Form::model($user,['route' => ['administrador.users.update', $user], 'method' => 'PUT']) !!}
                   @include('administrador.users.partials.form')
           {!! Form::submit('Editar Usuario',['class' => 'btn btn-primary btn-sm']) !!}
        {!! Form::close() !!}
      </div>
    </div>
    

@stop

