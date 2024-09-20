<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Viagens extends Model
{
    use HasFactory;

    protected $fillable = ['dataViagem', 'motorista', 'placa', 'destinoInicial', 'destinoFinal'];

    public function setMotoristaAttribute($value)
    {
        $this->attributes['motorista'] = ucfirst(strtolower($value));
    }

    public function setDestinoInicialAttribute($value)
    {
        $this->attributes['destinoInicial'] = ucfirst(strtolower($value));
    }

    public function setDestinoFinalAttribute($value)
    {
        $this->attributes['destinoFinal'] = ucfirst(strtolower($value));
    }

 
}

