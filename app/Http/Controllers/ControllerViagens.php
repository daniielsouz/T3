<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viagens;

class ControllerViagens extends Controller
{

    public function store(Request $request){
        
        $viagens = Viagens::create([
            'dataViagem' => $request->input('dataViagem'),
            'motorista' => $request->input('motorista'),
            'placa' => $request->input('opcoesPlaca'),
            'destinoInicial' => $request->input('destinoInicial'),
            'destinoFinal' => $request->input('destinoFinal')
        ]);

        if ($viagens){
            return redirect()->route('home')->with('message', 'Viagem adicionada com sucesso!');
        }else{
            return redirect()->route('home')->with('error', 'Não foi possível adicionar a viagem.');
        }
    }

 
}
