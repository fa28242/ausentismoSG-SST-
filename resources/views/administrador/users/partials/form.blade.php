@if (!empty($employee))
    {!! Form::label('employee', 'Empleado') !!}
    {!! Form::text('employee', $employee->full_name , ['class' => 'form-control', 'readonly']) !!}
@else
    <div class="form-group">
        {!! Form::label('employee', 'Eliga un empleado') !!}
        <select name="employee" id="employee_id" class="form-control">
            @foreach ($employees as $employee)
                <option value="{{$employee->id}} ">{{$employee->full_name}}</option>
            @endforeach
        </select>
    </div>
@endif
<div  class="form-group">
    {!! Form::label('email', 'Correo Electrónico') !!}
    {!! Form::text('email', null,['class' => 'form-control'. ($errors->has('email') ? ' is-invalid' : null), 'placeholder' => 'Ingrese Correo del usuario']) !!}
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>* {{ $message }}</strong>
        </span>
    @enderror
</div>
{{-- <div  class="form-group">
    {!! Form::label('status', 'Status') !!} <br>
    {!! Form::select('status', ['1' => 'Activo', '0' => 'Inactivo']) !!}
    {{-- /*{!! Form::text('status', null,['class' => 'form-control', 'placeholder' => 'Ingrese Status del usuario']) !!} </div>*/ --}}
  
<div  class="form-group">
    {!! Form::label('password', 'Clave') !!}
    {!! Form::password('password', ['class' => 'form-control'. ($errors->has('password') ? ' is-invalid' : null), 'placeholder' => 'Ingrese password', 'style' =>'width:100%;']) !!}
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>* {{ $message }}</strong>
        </span>
    @enderror
</div>

<div  class="form-group">
    {!! Form::label('roles', 'Elija un Rol') !!}
    {!! Form::select('roles', $listaRoles,null,['class' => 'form-control', 'placeholder' => 'Elige un Rol']) !!}
    
    
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>* {{ $message }}</strong>
        </span>
    @enderror
</div>
