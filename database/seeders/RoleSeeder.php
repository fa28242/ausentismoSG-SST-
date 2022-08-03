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
        Permission::create(['name'  =>'administrador.users.edit','description'=>'Editar usuario'])->syncRoles([$admin]);
        Permission::create(['name'  =>'administrador.users.destroy','description'=>'Eliminar usuario'])->syncRoles([$admin]);


        Permission::create(['name'  =>'administrador.roles.index','description' => 'Ver Rol'])->syncRoles([$admin]);
        Permission::create(['name'  =>'administrador.roles.create','description' => 'Crear Rol'])->syncRoles([$admin]);
        Permission::create(['name'  =>'administrador.roles.edit','description'=>'Editar Rol'])->syncRoles([$admin]);
        Permission::create(['name'  =>'administrador.roles.destroy','description'=>'Eliminar Rol'])->syncRoles([$admin]);


        Permission::create(['name'  =>'administrador.employees.index','description'=>'Ver Empleado'])->syncRoles([$admin, $guest]);
        Permission::create(['name'  =>'administrador.employees.create','description'=>'Crear Empleado'])->syncRoles([$admin, $guest]);
        Permission::create(['name'  =>'administrador.employees.edit','description'=>'Editar empleado'])->syncRoles([$admin, $guest]);
        Permission::create(['name'  =>'administrador.employees.destroy','description'=>'Eliminar Empleado'])->syncRoles([$admin, $guest]);

        Permission::create(['name'  =>'ausentismo.inabilities.index','description' => 'Ver Ausentismos'])->syncRoles([$admin]);
        Permission::create(['name'  =>'ausentismo.inabilities.create','description' => 'Crear Ausentismo'])->syncRoles([$admin]);
        Permission::create(['name'  =>'ausentismo.inabilities.edit','description'=>'Editar Ausentismo'])->syncRoles([$admin]);
        Permission::create(['name'  =>'ausentismo.inabilities.destroy','description'=>'Eliminar Ausentismo'])->syncRoles([$admin]);
    }
}
