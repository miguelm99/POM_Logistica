<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class indexfrontend extends Model implements HasMedia
{
    use HasMediaTrait;

    public $timestamps = false;
    protected $table = 'indexfrontend';


    protected $fillable = [
        'titulo', 'conteudo', 'patrocinios_img'
    ];
}
