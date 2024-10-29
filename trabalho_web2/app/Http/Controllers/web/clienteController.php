<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\login;

class clienteController extends Controller
{
    public function consulta()
    {
        $clientes = login::all();
        return view('area_adm.consultaCliente', compact('clientes'));
    }

    public function clienteNovo(Request $request) 
    {
        $nome = $request->input("usuario");
        $senha = $request->input("senha");
        $plano=$request->input("plano");

        $nova = new login;
        $nova->usuario = $nome;
        $nova->senha = $senha;
        $nova->plano_user= $plano;
        $nova->save();

        return redirect('/cliente');

    }

    public function excluirCliente($id)
    {      
        $cliente = login::where("id", $id)->first();
        $cliente->delete();

        return redirect('/cliente');

    }

    public function novoCliente()
    {
        return view('area_adm.cadastraCliente');
    }

    public function consultaCliente()
    {
        return view('area_adm.consultaCliente');
    }
}
