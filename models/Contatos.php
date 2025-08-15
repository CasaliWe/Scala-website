<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model {
    protected $table = 'contatos';
    protected $fillable = [
        'instagram',
        'linkedin',
        'area_cliente',
        'email',
        'telefone',
        'wpp'
    ];
    public $timestamps = false;
}