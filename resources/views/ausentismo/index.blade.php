@extends('adminlte::page')

@section('title', 'AUSENTISMO')

@section('content_header')
    @include('sweetalert::alert')
    
    <div class="card">
    
        <div class="card-body">
            
            <h1>Gestion de Ausentismos</h1>
        
            <a href="{{ route('ausentismo.inabilities.create') }}" class="btn btn-outline-success btn-sm float-right" > Registrar Ausentismo <i class="fab fa-medrt fa-2x"> </i>  </a>
           
        </div>
    </div>
    
@stop

@section('content')


   <div class="card">
    
     <div class="card-body">
       
        <table class="table table-striped table-bordered" id="inabilitiesTable" >
            <thead>
                <tr>
                    <th>Empleado</th>
                    <th>Tipo de identificación</th>
                    <th>Número de identificación</th>
                    <th>Tipo de Incapacidad</th>
                    <th>Cargo</th>
                    <th>Salario</th>
                    <th>Salario por día</th>
                    <th>EPS</th>
                    <th>Fecha inicio incapacidad</th>
                    <th>Fecha Finaliza Incapacidad</th>
                    <th>Total días Incapacidad</th>
                    <th>Clasificación</th>
                    <th>Valor Incapacidad</th>
                    <th>Valor Asumido Empresa</th>
                    <th>Valor Asumidad Entidad Pagadora</th>
                    
                    <th></th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($inabilities as $inaility)
                
                    <tr>
                        <td> {{ $employee->full_name}}  </td>
                        <td> {{ $employee->identif_type}} </td>
                        <td> {{ $employee->identif_number}} </td>
                        <td> {{ $inability_type->inability_type_name}} </td>
                        <td> {{ $employee->position}} </td>
                        <td> {{ number_format($employee->salary, 0)}} </td>
                        <td> {{ number_format($employee->salaryper_day, 0)}} </td>
                        <td> {{ $employee->eps}} </td>
                        <td> {{ $inability->date_start}} </td>
                        <td> {{ $inability->date_finish}} </td>
                        <td> {{ $inability->total_inability_days}} </td>
                        <td> {{ $inability->clasification}} </td>
                        <td> {{ $inability->inability_amount}} </td>
                        <td> {{ $inability->inability_company_amount}} </td>
                        <td> {{ $inability->inability_entity_amount}} </td>
                     
                   
                        <td> <a href="{{ route('ausentismo.inabilities.edit',$inability) }}"  class="btn btn-outline-primary btn-sm">  <i class="fas fa-edit"></i></a> </td>
                        <td>  
                            <form action="{{ route('ausentismo.inabilities.destroy',$inability) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger btn-sm">  <i class="fas fa-trash"></i ></button>
                                

                            </form>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>

     </div>

   </div>
    

@stop

@push('js')
    <script >
       $(document).ready(function () {
            $('#inabilitiesTable').DataTable({
                responsive:true,
                "language": {
                    "lengthMenu":"Mostrar  " + ` <select class="custom-select custom-select-sm form-control form-control-sm>
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                    <option value="-1">Todos</option>
                                                  </select>` 
                                                  + " registros por página" ,
                "zeroRecords":"No se encontraron registros",
                "info":"Mostrando la página _PAGE_ de _PAGES_",
                "search": '<i class="fas fa-search"></i>  ',
                "paginate":{
                    'next': '<i class="fas fa-chevron-right"></i>',
                    'previous': '<i class="fas fa-chevron-left"></i>',
                }
                }
            });
        });
    </script>
@endpush