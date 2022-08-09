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
use App\Models\Identif_type;

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
        //dd($employees);
        //$employees = Employee::find(1);
        //dd($employees->arls);
        return view('administrador.employees.index', compact('employees'));
    }

    
    public function create()
    {
        $eps = Eps::pluck('eps_entity_name','id');
        $arl = Arl::pluck('arl_entity_name','id');
        $afp = Afp::pluck('afp_entity_name','id');
        $identif_type = Identif_type::pluck('clasification','id');
        return view('administrador.employees.create', compact('eps', 'arl','afp','identif_type'));
    }

   
    public function store(EmployeeStoreRequest $request)
    {
        //dd($request);
        $employee = Employee::create([
            'name'              => $request->name,
            'lastname'          => $request->lastname,
            'identif_type_id'   => $request ->identif_type_id,
            'identif_number'    => $request ->identif_number,
            'salary'            => $request ->salary,
            'salary_per_day'    => $request ->salary_per_day,
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
        $eps = Eps::pluck('eps_entity_name','id');
        $arl = Arl::pluck('arl_entity_name','id');
        $afp = Afp::pluck('afp_entity_name','id');
        $identif_type = Identif_type::pluck('clasification','id');
     
        return view('administrador.employees.edit',compact('employee','eps', 'arl','afp','identif_type'));
    }


    public function update(EmployeeUpdateRequest $request, Employee $employee)
    {
        try
        {
            
            $employee->update($request->all());
            
            Alert::toast('Empleado editado exitosamente', 'success');
            return redirect()->route('administrador.employees.index');


        }catch(Exception $e)
        {
            Alert::toast('Ocurrio un error con la actualización', 'error');
            return redirect()->route('administrador.employees.index');
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
