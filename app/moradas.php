<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moradas extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'morada', 'distrito', 'pais', 'codPostal'
    ];
}
