<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Placa;
use App\Models\Viagens;

class ControllerHome extends Controller
{
    public function index(){
        $titulosTabela = ['Data da Viagem', 'Motorista', 'Placa', 'Destino inicial', 'Destino Final'];
        $viagens = Viagens::all();
        $placas = Placa::all(); 
        $placasRemocao = Placa::where('status', '0')->get();
        return view('home.index', [
            'titulosTabela' => $titulosTabela,
            'viagens'=> $viagens,
            'placas' => $placas, 
            'placasRemocao' => $placasRemocao
        ]);
    }
}
