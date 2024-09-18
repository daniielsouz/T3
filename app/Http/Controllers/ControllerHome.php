<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Placa;

class ControllerHome extends Controller
{
    public function index(){
        $titulosTabela = ['Data da Viagem', 'Motorista', 'Placa', 'Destino inicial', 'Destino Final'];
        $placas = Placa::all(); 
        return view('home.index', [
            'titulosTabela' => $titulosTabela,
            'placas' => $placas 
        ]);
    }
}
