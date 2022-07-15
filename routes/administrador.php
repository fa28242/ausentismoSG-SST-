<?php

use Laravel\Jetstream\Rules\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrador\UserController;


//rutas para la funcionalidad de gestion de usuarios CRUD de usuarios
Route::resource('users', UserController::class)->names('administrador.users');