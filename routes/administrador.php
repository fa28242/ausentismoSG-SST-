<?php

use Laravel\Jetstream\Rules\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrador\EmployeeController;
use App\Http\Controllers\Administrador\RoleController;
use App\Http\Controllers\Administrador\UserController;


//rutas para la funcionalidad de gestion de usuarios CRUD de usuarios
Route::resource('users', UserController::class)->names('administrador.users');

//rutas para la funcionalidad de gestion de roles  de usuarios
Route::resource('roles', RoleController::class)->names('administrador.roles');


//rutas para la funcionalidad de gestion de empleados
Route::resource('employees', EmployeeController::class)->names('administrador.employees');