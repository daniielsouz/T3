<?php

namespace App\Http\Controllers;

use App\Models\HistoricoViagem;
use App\Models\Viagens;
use App\Models\Placa;
use Illuminate\Http\Request;

class ControllerHistorico extends Controller
{
    public function index(){
        $titulos = ['Data de viagem', 'Motorista', 'Placa', 'Destino inicial', 'Destino Final', 'Data de retorno', 'Informações de viagem' ];

        return view('historico.index',['titulos'=>$titulos]);
    }
    public function store($id)
{
    $retornoViagem = Viagens::find($id);
    if ($retornoViagem) { 
        $dataViagem = $retornoViagem->dataViagem;
        $motorista = $retornoViagem->motorista;
        $placa = $retornoViagem->placa;
        $destinoInicial = $retornoViagem->destinoInicial;
        $destinoFinal = $retornoViagem->destinoFinal;
        $dataRetorno = $retornoViagem->dataViagem; 
        $observacoes = 'nulo';
        
        HistoricoViagem::create([
            'dataViagem' => $dataViagem,
            'motorista' => $motorista,
            'placa' => $placa,
            'destinoInicial' => $destinoInicial,
            'destinoFinal' => $destinoFinal,
            'dataRetorno' => $dataRetorno,
            'observacoes' => $observacoes,
        ]);
        
        $placa = Placa::where('num_placa', $retornoViagem->placa)->first();
            if ($placa) {
                $placa->status = '0'; 
                $placa->save();
            }
        $retornoViagem->delete();
        return redirect()->route('home')->with('message', 'Viagem retornada com sucesso!');
    } else {
        return redirect()->route('home')->with('error', 'Não foi possível retornar a viagem.');
    }
}

    


}




