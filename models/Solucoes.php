<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Solucoes extends Model {
    protected $table = 'solucoes';
    protected $fillable = [
        'scala_e', 
        'scala_faz',
        'quem_e_scala',
        'scala_onde'
    ];
    public $timestamps = false;
}