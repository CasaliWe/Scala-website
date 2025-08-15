<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class TextosEmpresa extends Model {
    protected $table = 'textos_empresa';
    protected $fillable = [
        'content_empresa', 
        'missao',
        'visao',
        'valores',
        'compromisso'
    ];
    public $timestamps = false;
}