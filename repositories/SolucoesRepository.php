<?php

namespace Repositories;

use Models\Solucoes;

class SolucoesRepository {
    // pegando
    public static function getAll() {
        return Solucoes::where('id', '1')->first();
    }

    // pegando único
    public static function getOne($id) {
        return Solucoes::where('id', $id)->first();
    }

    // atualizando 
    public static function update($dados) {
        return Solucoes::where('id', '1')->update([
            'scala_e' => $dados['scala_e'],
            'scala_faz' => $dados['scala_faz'],
            'quem_e_scala' => $dados['quem_e_scala'],
            'scala_onde' => $dados['scala_onde']
        ]);
    }

    // deletando
    public static function delete($id) {
        return Solucoes::where('id', $id)->delete();
    }
}