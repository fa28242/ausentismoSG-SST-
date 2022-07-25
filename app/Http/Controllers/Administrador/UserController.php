<?php

namespace App\Http\Controllers\Administrador;

use Exception;
use App\Models\User;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use PhpParser\Node\Stmt\TryCatch;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:administrador.users.index');
    }




    public function index()
    {
        $users = User::where('status', '1')->get();
       
        return view('administrador.users.index', compact('users'));
    }

   
    public function create()
    {
        return view('administrador.users.create');
    }

  
    public function store(UserStoreRequest $request)
    {
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'status' => '1',
                'password' => bcrypt($request->password),
            ]);
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
        return view('administrador.users.edit',compact('user'));
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
                'name' => $request->name,
                'email' => $request->email,
                'status' => $user->status,
                'password' => $password
            ]);
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
