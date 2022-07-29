<?php

namespace App\Http\Controllers\Administrador;

use Exception;
use App\Models\User;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:administrador.users.index')->only('index');
        $this->middleware('can:administrador.users.create')->only('create','store');
        $this->middleware('can:administrador.users.edit')->only('edit','update');
        $this->middleware('can:administrador.users.destroy')->only('destroy');
    }




    public function index()
    {
        $users = User::where('status', '1')->get();
       
        return view('administrador.users.index', compact('users'));
    }

   
    public function create()
    {
        $employees = Employee::all();
        $listaRoles = Role::pluck('name','id');
        return view('administrador.users.create',compact('listaRoles','employees'));
    }

  
    public function store(UserStoreRequest $request)
    {
        try {
            $result = Employee::find($request->employee);

            $user = User::create([
                'name' => $result->name.' '.$result->lastname,
                'email' => $request->email,
                'status' => '1',
                'password' => bcrypt($request->password),
                'employee_id' => $request->employee
            ]);
            $user->roles()->sync($request->roles);

            Alert::success('Guardado !', 'Usuario guardado correctamente');
            return redirect()->route('administrador.users.index');
        }catch (Exception $e) {
            Alert::error('Error Title', 'Error Message');
            return redirect()->route('administrador.users.index');
            /* return"Ha ocurrido un error"; */
        }
    }


    public function show($id)
    {
        //
    }

    
    public function edit(User $user)
    {
        $employee = Employee::find($user->employee_id);
        $listaRoles = Role::pluck('name','id');
        return view('administrador.users.edit',compact('user','listaRoles','employee'));
    }

 
    public function update(UserUpdateRequest $request, User $user)
    {
        try {

            if ($request->password == null) {
                $password = $user->password;
            }
            else{
                $password = bcrypt($request->password);
            }

            $user -> update([
                
                'email' => $request->email,
                'status' => $user->status,
                'password' => $password
            ]);
            $user->roles()->sync($request->roles);
            Alert::success('Actualizado !', 'Usuario actualizado correctamente');
            return redirect()->route('administrador.users.index');
        }catch (Exception $e) {
            Alert::error('ERROR', 'Ha ocurrido un error');
            return redirect()->route('administrador.users.index');
            /* return"Ha ocurrido un error"; */
        }
    }

   
    public function destroy(User $user)
    {
        try {
            $user -> update([
                
                'status' => '0'
                
            ]);
            Alert::success('Borrado !', 'Usuario inactivado correctamente');
            return redirect()->route('administrador.users.index');

        }catch (Exception $e) {

        }
    }
}
