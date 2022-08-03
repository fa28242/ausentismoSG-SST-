<?php

namespace App\Http\Controllers\Ausentismo;

use Exception;
use App\Models\Employee;
use App\Models\Inability;
use Illuminate\Http\Request;
use App\Models\Inability_type;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\InabilityStoreRequest;
use App\Http\Requests\InabilityUpdateRequest;

class InabilityController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('can:ausentismo.inabilities.index')->only('index');
        $this->middleware('can:ausentismo.inabilities.create')->only('create','store');
        $this->middleware('can:ausentismo.inabilities.edit')->only('edit','update');
        $this->middleware('can:ausentismo.inabilities.destroy')->only('destroy');
    }

    public function index()
    {
        $employees = Employee::all();
        $inability_type = Inability_type::pluck('inability_type_name','id');
        return view('ausentismo.inabilities.index', compact('employees', 'inability_type'));
    }

   
    public function create()
    {
        $employees = Employee::all();
        $inability_types = Inability_type::all();
        return view('ausentismo.inabilities.create',compact('employees','inability_types'));
    }

    
    public function store(InabilityStoreRequest $request)
    {
        try {
            //$result = Employee::find($request->employee);

            $inability = Inability::create([
                'employee_id' => $request->employee,
                'inability_type_id' => $request->inability_type,
                'date_start'=> $request->date_start,
                'date_finish'=> $request->date_finish,
                'total_inability_days'=> $request->total_inability_days,
                'clasification'=> $request->clasification,
                'inability_amount'=> $request->inability_amount,
                'inability_company_amount'=> $request->inability_company_amount,
                'inability_entity_amount'=> $request->inability_entity_amount,
                
            ]);
            
            Alert::success('Guardado !', 'Ausentismo guardado correctamente');
            return redirect()->route('ausentismo.inabilities.index');
        }catch (Exception $e) {
            Alert::error('Error Title', 'Error Message');
            return redirect()->route('ausentismo.inabilities.index');
            /* return"Ha ocurrido un error"; */
        }
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(Inability $inability)
    {
        return view('ausentismo.inabilities.edit',compact('employee'));
    }

   
    public function update(InabilityUpdateRequest $request, Inability $inability)
    {
        try
        {
            
            $inability->update($request->all());
            
            Alert::toast('Ausentismo editado exitosamente', 'success');
            return redirect()->route('ausentismo.inabilities.index');


        }catch(Exception $e)
        {
            Alert::toast('Ocurrio un error con la actualización', 'error');
            return redirect()->route('ausentismo.inabilities.index');
        }
    }

    
    public function destroy(Inability $inability)
    {
        $inability->delete();
        Alert::toast('Ausentismo eliminado correctamente','success');
        return redirect()->route('ausentismo.inabilities.index');
    }
}
