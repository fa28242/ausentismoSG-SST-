<div>
    <div class="card">
        
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                    {!! Form::label('employee', 'Eliga un empleado') !!}
                    <select name="employee" id="employee_id" class="form-control">
                        @foreach ($employees as $employee)
                            <option value="{{$employee->id}} ">{{$employee->full_name}}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class="col-12 col-sm-3">
                tipo doc
              </div>
              <div class="col-12 col-sm-3">
                doc
              </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-4">
                  tipo incap
                </div>
                <div class="col-12 col-sm-4">
                  cargo 
                </div>
                <div class="col-12 col-sm-4">
                  eps
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6">
                  salario
                </div>
                <div class="col-12 col-sm-6">
                  salario por dia
                </div>
                
            </div>

            <div class="row">
                <div class="col-12 col-sm-3">
                  fecha inicio
                </div>
                <div class="col-12 col-sm-3">
                  fecha final 
                </div>
                <div class="col-12 col-sm-3">
                  total dias
                </div>
                <div class="col-12 col-sm-3">
                  clasificacion
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Valor incapacidad</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Valor Incapacidad asumido por la empresa</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Valor Incapacidad Asumido por la entidad</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        
                      </div>
                    </div>
                  </div>
              </div>
          
    </div>
</div>
