<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\agenda;

class HorarioController extends Controller
{
    public function marcarHorario(Request $request)
    {
        $hora = $request->input("hora");
        $data = $request->input("data");

        $nova = new agenda;
        $nova->hora_marcada = $hora;
        $nova->dt_marcada = $data;
        $nova->save();

        return redirect('/hora/marcada');
    }
}
