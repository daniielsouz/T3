<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHome extends Controller
{
    public function index(){
        $titulosTabela = ['Data da Viagem','Motorista','Placa','Destino inicial','Destino Final'] ;
        return view('home.index', [ 'titulosTabela' => $titulosTabela]);
    }
}
