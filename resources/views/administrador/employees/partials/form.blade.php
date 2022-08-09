<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="form-group">
                {!! Form::label('name', 'Nombres') !!}
                {!! Form::text('name', null, [
                    'class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : null),
                    'placeholder' => 'Ingrese Nombre del empleado',
                ]) !!}
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>* {{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="form-group">
                {!! Form::label('lastname', 'Apellidos') !!}
                {!! Form::text('lastname', null, [
                    'class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : null),
                    'placeholder' => 'Ingrese Apellidos del Empleado',
                ]) !!}
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
            <div class="form-group">
                {!! Form::label('identif_type_id', 'Tipo de Identificación') !!}
                {!! Form::select('identif_type_id', $identif_type, null, [
                    'class' => 'form-control',
                    'placeholder' => 'Elige el tipo de documento',
                ]) !!}
                @error('identif_type_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>* {{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-3">
            <div class="form-group">
                {!! Form::label('identif_number', 'Número de Idenficación') !!}
                {!! Form::text('identif_number', null, [
                    'class' => 'form-control' . ($errors->has('identif_number') ? ' is-invalid' : null),
                    'placeholder' => 'Número de identificación',
                ]) !!}
                @error('identif_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>* {{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-3">
            <div class="form-group">
                {!! Form::label('salary', 'Salario Mensual') !!}
                {!! Form::text('salary', null, [
                    'class' => 'form-control' . ($errors->has('salary') ? ' is-invalid' : null),
                    'placeholder' => 'Salario mensual',
                    'id' => 'salary',
                    'step' => '0.1',
                ]) !!}
                @error('salary')
                    <span class="invalid-feedback" role="alert">
                        <strong>* {{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-3">
            <div class="form-group">
                {!! Form::label('salary_per_day', 'Salario por día') !!}
                {!! Form::text('salary_per_day', null, [
                    'class' => 'form-control' . ($errors->has('salary_per_day') ? ' is-invalid' : null),
                    'placeholder' => 'Salario por día',
                    'id' => 'salary_per_day',
                    'step' => '0.1',
                    'readonly',
                ]) !!}
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
            <div class="form-group">
                {!! Form::label('position', 'Posicion') !!}
                {!! Form::text('position', null, [
                    'class' => 'form-control' . ($errors->has('position') ? ' is-invalid' : null),
                    'placeholder' => 'Ingrese Posición del empleado',
                ]) !!}
                @error('position')
                    <span class="invalid-feedback" role="alert">
                        <strong>* {{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="form-group">
                {!! Form::label('work_area', 'Área de trabajo') !!}
                {!! Form::text('work_area', null, [
                    'class' => 'form-control' . ($errors->has('work_area') ? ' is-invalid' : null),
                    'placeholder' => 'Ingrese Area de Trabajo del Empleado',
                ]) !!}
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
            <div class="form-group">
                {!! Form::label('eps_id', 'EPS') !!}
                {!! Form::select('eps_id', $eps, null, ['class' => 'form-control', 'placeholder' => 'Elige la EPS']) !!}
                @error('eps_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>* {{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group">
                {!! Form::label('arl_id', 'ARL') !!}
                {!! Form::select('arl_id', $arl, null, ['class' => 'form-control', 'placeholder' => 'Elige la ARL']) !!}
                @error('arl_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>* {{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="form-group">
                {!! Form::label('afp_id', 'AFP') !!}
                {!! Form::select('afp_id', $afp, null, ['class' => 'form-control', 'placeholder' => 'Elige la AFP']) !!}
                @error('afp_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>* {{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

    </div>
    <script>
        /**
         * Currency format - extended.
         * Currency sign
         *
         * @param  amount:number
         * @param  fractionDigits:number
         * @return String
         */
        const extendedFormatCurrency = (amount, fractionDigits = 2) =>
            amount.toLocaleString('es-CO', {
                style: 'currency',
                currency: 'COP',
                minimumFractionDigits: fractionDigits
            })

        // Removing specials chars and underscore
        const removeSpecialChars = (string) =>
            string.replace(/[^\w\d]|_/gi, "");

        // Listening keyup event
        document.getElementById('salary').addEventListener('keyup', (e) => {
            let el = e.target;
            // Initialising aria-label attribute
            if (el.value === '') el.ariaLabel = '';

            // RegEx: only letters
            let exp = /[a-zA-Z]/;

            // Validating typed char
            if (exp.test(e.key)) {
                if (e.key === 'Backspace' || e.key === 'Delete') {
                    el.ariaLabel = removeSpecialChars(el.value);
                    el.value = el.ariaLabel;
                }
            } else {
                el.ariaLabel = removeSpecialChars(el.value);
                el.value = el.ariaLabel;
            }

            // Formatting input value and assigning calculated value
            el.value = extendedFormatCurrency(Number(el.ariaLabel), 0);
            document.getElementById('salary_per_day').value = extendedFormatCurrency(el.ariaLabel / 30);
        });
    </script>
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
