<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guiatransportes extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'MatriculaTransporte', 'horaCarga', 'horaDescarga'
    ];
}
