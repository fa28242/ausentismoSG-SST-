<?php

use Laravel\Jetstream\Rules\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ausentismo\InabilityController;


//rutas para la funcionalidad de gestion de ausentismos
Route::resource('inabilities', InabilityController::class)->names('ausentismo.inabilities');