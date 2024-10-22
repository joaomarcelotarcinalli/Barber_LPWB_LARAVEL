<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\PageController;
use App\Http\Controllers\bd\BdController;
use App\Http\Controllers\web\clienteController;
use App\Http\Controllers\web\barbeiroController;
use App\Http\Controllers\web\pagamentoController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/sobre', [PageController::class, 'sobre'])->name('sobre');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/planos', [PageController::class, 'planos'])->name('plano');
Route::get('/hora', [PageController::class, 'hora'])->name('hora');
Route::get('/logado', [PageController::class, 'logadoCli'])->name('clienteLogado');
Route::get('/cliente', [clienteController::class, 'consulta'])->name('consultaCliente');
Route::get('/cadCliente', [clienteController::class, 'novoCliente'])->name('clienteN');
Route::get('/pagamento', [pagamentoController::class, 'criarPagamento'])->name("pagamento");



Route::get('/login/adm', [PageController::class, 'loginAdm'])->name('loginAdm');


Route::get('/adm', [PageController::class, 'adm'])->name('adm');

Route::post('/login', [AuthController::class, 'login'])->name('logue');



Route::post('/cliente/novo', [ClienteController::class, 'clienteNovo'])->name('novo');
Route::get('/cliente/excluir/{id}', [clienteController::class, 'excluirCliente'])->name('ClienteExcluir');

Route::post('/cad', [BdController::class, 'NovoLogin'])->name('cadastrarCli');

Route::post('/barbeiro/novo', [barbeiroController::class, 'barbeiroNovo'])->name('novoBarbeiro');
Route::get('/barbeiro', [barbeiroController::class, 'novoB'])->name('novoB');
Route::get('/barbeiro/consulta', [barbeiroController::class, 'consultaB'])->name('consultaBarbeiro');
Route::get('/cliente/excluir{id}', [barbeiroController::class, 'excluirBarbeiro'])->name('exBarbeiro');    
