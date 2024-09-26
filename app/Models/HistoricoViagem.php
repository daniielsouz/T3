<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricoViagem extends Model
{
    use HasFactory;
    protected $table = 'historico';
    protected $fillable = ['dataViagem', 'motorista', 'placa', 'destinoInicial', 'destinoFinal', 'dataRetorno', 'observacoes' ];
}
