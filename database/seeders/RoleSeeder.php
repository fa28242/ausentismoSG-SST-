<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    
    public function run()
    {
        //CREAR ROL ADMINISTRATIVO
        $admin = Role::create(['name' => 'ADMINISTRADOR']);
        //Crear Rol de usuario
        $guest = Role::create(['name' => 'VISITANTE']);
        

        //PERMISOS PARA EL ROL ADMINISTRATIVO
        Permission::create(['name'  =>'administrador.users.index','description' => 'Ver usuarios'])->syncRoles([$admin]);
        Permission::create(['name'  =>'administrador.users.create','description' => 'Crear usuarios'])->syncRoles([$admin]);
        Permission::create(['name'  =>'administrador.user.edit','description'=>'editar usuario'])->syncRoles([$admin]);
        Permission::create(['name'  =>'administrador.user.destroy','description'=>'eliminar usuario'])->syncRoles([$admin]);

        Permission::create(['name'  =>'administrador.employees.index','description'=>'mostrar empleado'])->syncRoles([$admin, $guest]);
        Permission::create(['name'  =>'administrador.employees.create','description'=>'crear empleado'])->syncRoles([$admin, $guest]);
        Permission::create(['name'  =>'administrador.employees.edit','description'=>'editar empleado'])->syncRoles([$admin, $guest]);
        Permission::create(['name'  =>'administrador.employees.destroy','description'=>'eliminar empleado'])->syncRoles([$admin, $guest]);


    }
}
