<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\PageController;
use App\Http\Controllers\web\clienteController;
use App\Http\Controllers\web\barbeiroController;
use App\Http\Controllers\bdController;
use App\Http\Controllers\web\HorarioController;
use App\Http\Controllers\MercadoPagoController;

// Rotas sem segurança

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/registrar', [PageController::class, 'registraCliente']);
Route::post('/valida/login', [bdController::class, 'validaLogin'])->name("validaLogin");
Route::match(['get', 'post'], '/login/adm', [PageController::class, 'loginAreaAdm'])->name('loginAreaAdm');
Route::match(['get', 'post'], '/adm/login', [bdController::class, 'loginAdm'])->name('loginAdm');
Route::match(['get', 'post'], '/cad/cli', [bdController::class, 'NovoLogin']);
Route::match(['get', 'post'], '/logout', function () {
    Auth::logout();
    return redirect()->route('loginAreaAdm')->with('success', 'Você saiu com sucesso!');
})->name('logout');
Route::match(['get', 'post'], '/logout/cliente', function () {
    Auth::logout();
    return redirect()->route('login')->with('success', 'Você saiu com sucesso!');
})->name('logoutCliente');

// Rotas com segurança
Route::middleware('auth.check')->group(function () {
    Route::get('/cliente', [bdController::class, 'consultaC'])->name('consultaCliente');
    Route::get('/planos', [PageController::class, 'planos'])->name('plano');
    Route::get('/cadCliente', [clienteController::class, 'novoCliente'])->name('clienteN');
    Route::get('/logado', [PageController::class, 'clienteLogin'])->name("cliLogado");

    Route::match(['post', 'get'], '/registrar/hora', [HorarioController::class, 'marcarHorario'])->name('marcaHrBd');
    Route::match(['post', 'get'], '/marcar/hora', [PageController::class, 'marcarHora'])->name('registrarHora');
    
    Route::get('/hora/marcada', [PageController::class, 'horaMarcada'])->name('horaMarcada');
});

// Rotas para administradores
Route::middleware('auth.adm')->group(function () {
    Route::get('/cliente/excluir/{id}', [bdController::class, 'excluirUser'])->name('ClienteExcluir');
    Route::post('/cad', [bdController::class, 'cadClienteDashboard'])->name('clieCadDashboard');
    Route::get('/barbeiros', [barbeiroController::class, 'novoB'])->name('novoB');
    Route::get('/barbeiro/consulta', [barbeiroController::class, 'consultaB'])->name('consultaBarbeiro');
    Route::get('/barbeiro/excluir/{id}', [barbeiroController::class, 'excluirBarbeiro'])->name('exBarbeiro');
    Route::match(['get', 'post'], '/barbeiro/novo', [barbeiroController::class, 'barbeiroNovo'])->name('novoBarbeiro');
    Route::match(['get', 'post'], '/adm', [PageController::class, 'adm'])->name('adm');
});
