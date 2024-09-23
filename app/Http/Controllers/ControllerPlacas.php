<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Placa;

class ControllerPlacas extends Controller
{   
    public function store(Request $request){
        $request->validate([
            'num_placa' => 'required|string|max:255',
        ]);

        $placa = Placa::create([
            'num_placa' => $request->input('num_placa'),
            'status' => 0
        ]);

        if ($placa) {
            return redirect()->route('home')->with('message', 'Placa adicionada com sucesso!');
        } else {
            return redirect()->back()->withErrors(['error' => 'Erro ao adicionar placa.']);
        }
    }
}