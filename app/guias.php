<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guias extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'dataHora', 'codBarras', 'tipoPalete', 'tipoArtigo', 'tipoPalete', 'localArmazenamento'
    ];
}
