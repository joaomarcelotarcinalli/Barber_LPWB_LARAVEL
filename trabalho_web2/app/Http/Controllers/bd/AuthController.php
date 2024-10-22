<?php

namespace App\Http\Controllers\bd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
{
    // Validação dos dados
    $credentials = $request->validate([
        'email' => 'required|string|email',
        'pswd' => 'required|string',
    ]);

    // Verificar as credenciais e autenticar o usuário
    if (Auth::attempt($credentials)) {
        // Login bem-sucedido
        $request->session()->regenerate();

        return view('/');
    }

    // Se as credenciais estiverem erradas
    return back()->withErrors([
        'email' => 'As credenciais fornecidas estão incorretas.',
    ]);
}
}
