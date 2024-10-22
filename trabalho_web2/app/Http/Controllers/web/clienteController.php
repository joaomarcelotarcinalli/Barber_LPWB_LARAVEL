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

    public function consultaCliente()
    {
        return view('area_adm.consultaCliente');
    }

    public function clienteNovo(Request $request) 
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

        return redirect('/cliente');

        //INSERT INTO categoria (id, cat_nome, cat_descricao)
        // VALUES ( ???, 'VALOR', 'DESCRICAO')
    }

    public function excluirCliente($id)
    {
        //SELECT * FROM categoria WHERE id = ID        
        $cliente = login::where("id", $id)->first();
        $cliente->delete();

        return redirect('/cliente');

    }

    public function novoCliente()
    {
        return view('area_adm.cadastraCliente');
    }
}
