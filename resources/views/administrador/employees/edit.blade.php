@extends('adminlte::page')

@section('title', 'EDITAR EMPLEADOS')

@section('content_header')
    <h1>EDICIÓN de Empleados</h1>


@stop

@section('content')

    <div class="card">
      
      <div class="card-body">
        {!! Form::model($employee,['route' => ['administrador.employees.update', $employee], 'method' => 'PUT']) !!}
                   @include('administrador.employees.partials.form')
           {!! Form::submit('Editar Empleado',['class' => 'btn btn-outline-primary btn-sm']) !!}
        {!! Form::close() !!}
      </div>
    </div>
    

@stop

