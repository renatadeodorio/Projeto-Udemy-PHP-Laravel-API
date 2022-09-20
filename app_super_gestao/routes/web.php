<?php


use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobrenos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/Login', [LoginController::class, 'login'])->name('site.login');

//app
Route::prefix('/app')->group(function () {
   Route::get('/clientes', function() { return 'Clientes'; });
   Route::get('/fornecedores', function() { return 'Fornecedores'; });
   Route::get('/produtos', function() { return 'produtos'; });

});
