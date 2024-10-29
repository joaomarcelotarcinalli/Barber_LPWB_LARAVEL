<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\agenda;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class bdController extends Controller
{
    public function NovoLogin(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Criação do usuário
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Autenticar o usuário
        Auth::login($user);

        // Redirecionar ou retornar uma resposta
        return view("web.loginCliente");
    }





    
    public function validaLogin(Request $request)
    {
        // Validação dos dados
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Verificar as credenciais e autenticar o usuário
        if (Auth::attempt($credentials)) {
            // Login bem-sucedido
            $request->session()->regenerate();

            return redirect()->intended(route('plano'))->with('success', 'Login bem-sucedido!');
        }

        // Se as credenciais estiverem erradas
        return back()->withErrors([
            'email' => 'As credenciais fornecidas estão incorretas.',
        ]);
    }





    public function cadClienteDashboard(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Criação do usuário
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Autenticar o usuário
        Auth::login($user);

        // Redirecionar ou retornar uma resposta
        return redirect()->intended(route('consultaCliente'));
    }





    public function loginAdm(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended(route('adm'))->with('success', 'Login bem-sucedido!');
    }

    return redirect()->route('loginAreaAdm')->withErrors([
        'password' => 'As credenciais fornecidas estão incorretas.',
    ]);
}








public function consultaC()
{
    $users = user::all();
    return view('area_adm.consultaCliente', compact('users'));
}

public function horaMarcada()
{
    $data = $request->query('data');
    $hora = $request->query('hora');

    return view('web.horaMarcada', compact('data', 'hora'));

}





public function ExcluirUser($id)
    {
        //SELECT * FROM categoria WHERE id = ID        
        $user = user::where("id", $id)->first();
        $user->id = 0;
        $user->delete();

        return redirect()->route('consultaCliente');

    }

}
