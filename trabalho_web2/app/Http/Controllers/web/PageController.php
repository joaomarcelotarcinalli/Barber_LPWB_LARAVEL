<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('web.home');
    }

    public function sobre()
    {
        return view('web.sobre');
    }

    public function login()
    {
        return view('web.loginCliente');
    }
    
    public function adm()
    {
        return view('area_adm.dashboard');
    }

    public function cad()
    {
        return view('web.home');
    }
    public function planos()
    {
        return view('web.planos');
    }

    public function hora()
    {
        return view('web.hora');
    }

    public function loginAreaAdm()
    {
        return view('area_adm.loginAdm');
    }

    public function logadoCli()
    {
        return view('web.clienteLogado');
    }

    public function registraCliente()
    {
        return view('web.cadastroCliente');
    }

    public function marcarHora()
    {
        return view('web.marcarHora');
    }

    public function clienteLogin()
    {
        return view('web.clienteLogado');
    }

    public function horaMarcada()
    {
        return view('web.horaMarcada');
    }
}
