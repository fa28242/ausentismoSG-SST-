
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-6">
                <div  class="form-group">
                    {!! Form::label('name', 'Nombres') !!}
                    {!! Form::text('name', null,['class' => 'form-control'. ($errors->has('name') ? ' is-invalid' : null), 'placeholder' => 'Ingrese Nombre del empleado']) !!}
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>* {{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        </div>
        <div class="col-12 col-sm-6">
                <div  class="form-group">
                    {!! Form::label('lastname', 'Apellidos') !!}
                    {!! Form::text('lastname', null,['class' => 'form-control'. ($errors->has('lastname') ? ' is-invalid' : null), 'placeholder' => 'Ingrese Apellidos del Empleado']) !!}
                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>* {{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-3">
                <div  class="form-group">
                    {!! Form::label('identif_type', 'Tipo de Idenficación') !!}
                    {!! Form::text('identif_type', null,['class' => 'form-control'. ($errors->has('identif_type') ? ' is-invalid' : null), 'placeholder' => 'Tipo de identificación']) !!}
                    @error('identif_type')
                        <span class="invalid-feedback" role="alert">
                            <strong>* {{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        </div>
        <div class="col-12 col-sm-3">
                <div  class="form-group">
                    {!! Form::label('identif_number', 'Número de Idenficación') !!}
                    {!! Form::text('identif_number', null,['class' => 'form-control'. ($errors->has('identif_number') ? ' is-invalid' : null), 'placeholder' => 'Número de identificación']) !!}
                    @error('identif_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>* {{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        </div>
      <div class="col-12 col-sm-3">
        <div  class="form-group">
            {!! Form::label('salary', 'Salario Mensual') !!}
            {!! Form::text('salary', null,['class' => 'form-control'. ($errors->has('salary') ? ' is-invalid' : null), 'placeholder' => 'Salario mensual']) !!}
            @error('salary')
                <span class="invalid-feedback" role="alert">
                    <strong>* {{ $message }}</strong>
                </span>
            @enderror
        </div>
      </div>
      <div class="col-12 col-sm-3">
        <div  class="form-group">
            {!! Form::label('salary_per_day', 'Salario por día') !!}
            {!! Form::text('salary_per_day', null,['class' => 'form-control'. ($errors->has('salary_per_day') ? ' is-invalid' : null), 'placeholder' => 'Salario por día']) !!}
            @error('salary_per_day')
                <span class="invalid-feedback" role="alert">
                    <strong>* {{ $message }}</strong>
                </span>
            @enderror
        </div>
      </div>
    </div> 
        <div class="row">
                <div class="col-12 col-sm-6">
                <div  class="form-group">
                    {!! Form::label('position', 'Posicion') !!}
                    {!! Form::text('position', null,['class' => 'form-control'. ($errors->has('position') ? ' is-invalid' : null), 'placeholder' => 'Ingrese Posición del empleado']) !!}
                    @error('position')
                        <span class="invalid-feedback" role="alert">
                            <strong>* {{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div  class="form-group">
                        {!! Form::label('work_area', 'Área de trabajo') !!}
                        {!! Form::text('work_area', null,['class' => 'form-control'. ($errors->has('work_area') ? ' is-invalid' : null), 'placeholder' => 'Ingrese Area de Trabajo del Empleado']) !!}
                        @error('work_area')
                            <span class="invalid-feedback" role="alert">
                                <strong>* {{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
        </div>
        
      <div class="row">
        <div class="col-12 col-sm-4">
            <div  class="form-group">
                {!! Form::label('eps', 'EPS') !!}
                {!! Form::text('eps', null,['class' => 'form-control'. ($errors->has('eps') ? ' is-invalid' : null), 'placeholder' => 'Ingrese Area de Trabajo del Empleado']) !!}
                @error('eps')
                    <span class="invalid-feedback" role="alert">
                        <strong>* {{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div  class="form-group">
                {!! Form::label('arl', 'ARL') !!}
                {!! Form::text('arl', null,['class' => 'form-control'. ($errors->has('arl') ? ' is-invalid' : null), 'placeholder' => 'Ingrese Area de Trabajo del Empleado']) !!}
                @error('arl')
                    <span class="invalid-feedback" role="alert">
                        <strong>* {{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div  class="form-group">
                {!! Form::label('afp', 'AFP') !!}
                {!! Form::text('afp', null,['class' => 'form-control'. ($errors->has('afp') ? ' is-invalid' : null), 'placeholder' => 'Ingrese Area de Trabajo del Empleado']) !!}
                @error('afp')
                    <span class="invalid-feedback" role="alert">
                        <strong>* {{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
    </div>
  </div>

















{{-- <div  class="form-group">
    {!! Form::label('roles', 'Elija un Rol') !!}
    {!! Form::select('roles', $listaRoles,null,['class' => 'form-control', 'placeholder' => 'Elige un Rol']) !!}
    
    
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>* {{ $message }}</strong>
        </span>
    @enderror
</div> --}}