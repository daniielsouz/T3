<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSuporte extends Controller
{
    public function index()
    {
        $duvidas = [
            [
                'duvida' => 'Minha opções de placas está vazia!',
                'resposta' => [
                    'Você primeiro precisa cadastrar a sua placa. Na pagina <a class="navLinks" href="/home">home</a>, vá em "Criar cadastro de placa", depois forneça o numero da placa e click em "Adicionar Placa".'
                ]
            ],
            [
                'duvida' => 'Não estou conseguindo cadastrar a minha placa!',
                'resposta' => [
                    'O campo da placa está correto? EX: BRA2E13',
                    'O campo da placa está correto? EX: BRA2E13',
                    'O campo da placa está correto? EX: BRA2E13'
                ]
            ],
            [ 'duvida'=>'Teste',
            'resposta' => [
                'Esta é uma resposta para teste',
                'Esta é uma resposta para teste',
                'Esta é uma resposta para teste'
            ]

            ]
            // Outras duvidas...
            
        ];

        return view('suporte.index', ['duvidas' => $duvidas,]);
    }

    public function create(){
        // aqui vai ficar o email
    }
}
