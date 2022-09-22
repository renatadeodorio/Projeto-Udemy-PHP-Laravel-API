<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobrenos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', [LoginController::class, 'Login'])->name('site.login');

//app
Route::prefix('/app')->group(function () {
   Route::get('/clientes', function() { return 'Clientes'; })->name('app.clientes');
   Route::get('/fornecedores', function() { return 'Fornecedores'; })->name('app.fornecedores');
   Route::get('/produtos', function() { return 'produtos'; })->name('app.produtos');
});

Route::get('/teste{p1}/{p2}', 'TesteController')->name('teste');

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';

});
