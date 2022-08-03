<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Requests\EmployeeStoreRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\Employee;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;
use App\Http\Controllers\Controller;
use App\Models\Afp;
use App\Models\Arl;
use App\Models\Eps;

class EmployeeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('can:administrador.employees.index')->only('index');
        $this->middleware('can:administrador.employees.create')->only('create','store');
        $this->middleware('can:administrador.employees.edit')->only('edit','update');
        $this->middleware('can:administrador.employees.destroy')->only('destroy');
    }


    public function index()
    {
        $employees = Employee::where('status','1')->get();
        $eps = Eps::find($employees->eps_id);
        $arl = Arl::find($employees->arl_id);
        $afp = Afp::find($employees->afp_id);
        return view('administrador.employees.index', compact('employees','eps','arl','afp'));
    }

    
    public function create()
    {
        
        return view('administrador.employees.create');
    }

   
    public function store(EmployeeStoreRequest $request)
    {
        $employee = Employee::create([
            'name'              => $request->name,
            'lastname'          => $request->lastname,
            'identif_type_id'   => $request ->identif_type_id,
            'identif_number'    => $request ->identif_number,
            'salary'            => $request ->salary,
            'position'          => $request ->position,
            'work_area'         => $request ->work_area,
            'eps_id'            => $request ->eps_id,
            'arl_id'            => $request ->arl_id,
            'afp_id'            => $request ->afp_id,
            'status'            => '1',
            
        ]);
        
        Alert::toast('Empleado guardado exitosamente', 'success');
        return redirect()->route('administrador.users.index');
    }

   
    public function show(Employee $employee)
    {
        //
    }

    
    public function edit(Employee $employee)
    {
        
     
        return view('administrador.employees.edit',compact('employee'));
    }


    public function update(EmployeeUpdateRequest $request, Employee $employee)
    {
        try
        {
            
            $employee->update($request->all());
            
            Alert::toast('Empleado editado exitosamente', 'success');
            return redirect()->route('administrador.users.index');


        }catch(Exception $e)
        {
            Alert::toast('Ocurrio un error con la actualización', 'error');
            return redirect()->route('administrador.users.index');
        }
    }

  
    public function destroy(Employee $employee)
    {
        try
        {
            $employee->update([
                'status' => '0'
            ]);
            Alert::toast('Empleado eliminado exitosamente', 'success');
            return redirect()->route('administrador.employees.index');
        }
        catch(Exception $e)
        {
            Alert::toast('Ocurrio un error con la eliminación', 'error');
            return redirect()->route('administrador.employees.index');
        }
    }
}
