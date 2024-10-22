<?php

namespace App\Http\Controllers\bd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\login;


class BdController extends Controller
{
    public function NovoLogin(Request $request) 
    {
        //$_POST['cat_nome']
        $nome = $request->input("usuario");
        $senha = $request->input("senha");
        $plano=$request->input("plano");

        $nova = new login;
        $nova->usuario = $nome;
        $nova->senha = $senha;
        $nova->plano_user= $plano;
        $nova->save();

        return redirect('/logado')->with('sucess', 'Cadastro realizado');

    }
}
