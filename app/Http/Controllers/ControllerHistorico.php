<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHistorico extends Controller
{
    public function index(){
        $titulos = ['Data de viagem', 'Motorista', 'Placa', 'Destino inicial', 'Destino Final', 'Data de retorno', 'Informações de viagem' ];

        return view('historico.index',['titulos'=>$titulos]);
    }
    public function create(){
        
    }
}




