
<div  class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null,['class' => 'form-control'. ($errors->has('name') ? ' is-invalid' : null), 'placeholder' => 'Ingrese Nombre del usuario']) !!}
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>* {{ $message }}</strong>
        </span>
    @enderror
</div>
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
    {!! Form::password('password', ['class' => 'form-control'. ($errors->has('password') ? ' is-invalid' : null), 'placeholder' => 'Ingrese password']) !!}
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>* {{ $message }}</strong>
        </span>
    @enderror
</div>
