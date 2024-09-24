<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viagens;
use App\Models\Placa;

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

        $placaViajando = $request->input('opcoesPlaca');
        $placa = Placa::where('num_placa', $placaViajando)->first();
        $placa->status = '1';
        $placa->save();

        if ($viagens){
            return redirect()->route('home')->with('message', 'Viagem adicionada com sucesso!');
        }else{
            return redirect()->route('home')->with('error', 'Não foi possível adicionar a viagem.');
        }
    }
    public function destroy($id)
    {
        $viagem = Viagens::find($id);
    
        if ($viagem) {
            $placa = Placa::where('num_placa', $viagem->placa)->first();
            if ($placa) {
                $placa->status = '0'; 
                $placa->save();
            }
    
            $viagem->delete();
            return redirect()->route('home')->with('message', 'Viagem excluída com sucesso!');
        } else {
            return redirect()->route('home')->withErrors(['error' => 'Viagem não encontrada.']);
        }
    
    }
}
