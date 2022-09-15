<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);

Route::get('/',[\App\Http\Controllers\SobreNosController::class,'sobreNos']);

Route::get('/',[\App\Http\Controllers\ContatoController::class, 'contato']);
