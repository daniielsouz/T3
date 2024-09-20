<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placa extends Model
{
    use HasFactory;
    protected $fillable = ['num_placa'];

    public function setNumPlacaAttribute($value)
    {
        $this->attributes['num_placa'] = strtoupper($value);
    }
}
