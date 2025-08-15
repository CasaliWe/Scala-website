<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Servicos extends Model {
    protected $table = 'servicos';
    protected $fillable = [
        'titulo',
        'descri',
        'thumb',
        'conteudo',
        'banner',
        'title_banner'
    ];
    public $timestamps = false;
}