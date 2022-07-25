@extends('adminlte::page')

@section('title', 'USUARIOS')

@section('content_header')
    @include('sweetalert::alert')
    
    <div class="card">
    
        <div class="card-body">
            
            <h1>Gestion de Usuarios</h1>
        
            <a href="{{ route('administrador.users.create') }}" class="btn btn-success btn-sm float-right" > Crear Uuario <i class="fab fa-medrt fa-2x"> </i>  </a>
           
        </div>
    </div>
    
@stop

@section('content')


   <div class="card">
    
     <div class="card-body">
       
        <table class="table table-striped table-bordered" id="usersTable" >
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    {{-- <th>Status</th> --}}
                    <th></th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                
                    <tr>
                        <td> {{ $user->name}} </td>
                        <td> {{ $user->email}} </td>
                        {{-- <td> {{ $user->status}} </td>  --}}
                        <td> <a href="{{ route('administrador.users.edit',$user) }}"  class="btn btn-primary btn-sm"> Editar <i class="fas fa-edit"></i></a> </td>
                        <td>  
                            <form action="{{ route('administrador.users.destroy',$user) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar  <i class="fas fa-eraser"></i ></button>
                                

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
            $('#usersTable').DataTable({
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