@extends('adminlte::page')

@section('title', 'CREAR EMPLEADOS')

@section('content_header')
    <h1>CREACIÓN de Empleados</h1>


@stop

@section('content')

    <div class="card">
      
      <div class="card-body">
        {!! Form::open(['route' => 'administrador.employees.store']) !!}
           @include('administrador.employees.partials.form')
           {!! Form::submit('Crear Empleado',['class' => 'btn btn-outline-primary btn-sm']) !!}
        {!! Form::close() !!}
      </div>
    </div>
    

@stop

