<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viagens extends Model
{

    
    use HasFactory;
    protected $fillable = ['dataViagem','motorista','placa','destinoInicial','destinoFinal'];
}

