@extends('adminlte::page')

@section('title', 'EMPLEADOS')

@section('content_header')
    @include('sweetalert::alert')
    
    <div class="card">
    
        <div class="card-body">
            
            <h1>Gestion de Empleados</h1>
        
            <a href="{{ route('administrador.employees.create') }}" class="btn btn-outline-success btn-sm float-right" > Crear Empleado <i class="fab fa-medrt fa-2x"> </i>  </a>
           
        </div>
    </div>
    
@stop

@section('content')


   <div class="card">
    
     <div class="card-body">
       
        <table class="table table-striped table-bordered" id="employeesTable" >
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Número de identificación</th>
                    <th>Salario</th>
                    <th>Posición</th>
                    <th>Area de trabajo</th>
                    <th>EPS</th>
                    <th>ARL</th>
                    <th>AFP</th>
                    
                    <th></th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                
                    <tr>
                        <td> {{ $employee->name}}  {{ $employee->lastname}} </td>
                        <td> {{ $employee->identif_number}} </td>
                        <td> {{ number_format($employee->salary, 0)}} </td>
                        <td> {{ $employee->position}} </td>
                        <td> {{ $employee->work_area}} </td>
                        <td> {{ $employee->eps}} </td>
                        <td> {{ $employee->arl}} </td>
                        <td> {{ $employee->afp}} </td>
                     
                        {{-- <td> {{ $employee->status}} </td>  --}}
                        <td> <a href="{{ route('administrador.employees.edit',$employee) }}"  class="btn btn-outline-primary btn-sm">  <i class="fas fa-edit"></i></a> </td>
                        <td>  
                            <form action="{{ route('administrador.employees.destroy',$employee) }}" method="post">
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
            $('#employeesTable').DataTable({
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