<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\barbeiro;

class barbeiroController extends Controller
{
    public function barbeiroNovo(Request $request) 
    {
        $nome = $request->input("usuario");
        $especialidade = $request->input("especialidade");

        $nova = new barbeiro;
        $nova->nome = $nome;
        $nova->especialidade = $especialidade;
        $nova->save();

        return redirect('/barbeiro/consulta');

    }

    public function novoB()
    {   
        return view('area_adm.cadastrarBarbeiro');

    }

    public function consultaB()
    {
        $barbeiros = barbeiro::all();
        return view('area_adm.consultaBarbeiro', compact('barbeiros'));
    }

    public function excluirBarbeiro($id)
    {     
        $barbeiros = barbeiro::where("id_barbeiro", $id)->first();
        $barbeiros->delete();

        return redirect('/barbeiro/consulta');

    }
}
