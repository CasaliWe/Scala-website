<?php

namespace Repositories;

use Models\TextosEmpresa;

class TextosEmpresaRepository {
    // pegando
    public static function getAll() {
        return TextosEmpresa::where('id', '1')->first();
    }

    // pegando único
    public static function getOne($id) {
        return TextosEmpresa::where('id', $id)->first();
    }

    // atualizando mvvc
    public static function updateMVVC($missao, $visao, $valores, $compromisso) {
        return TextosEmpresa::where('id', '1')->update([
            'missao' => $missao,
            'visao' => $visao,
            'valores' => $valores,
            'compromisso' => $compromisso
        ]);
    }

    // atualizando content
    public static function updateContent($content) {
        return TextosEmpresa::where('id', '1')->update([
            'content_empresa' => $content
        ]);
    }

    // deletando
    public static function delete($id) {
        return TextosEmpresa::where('id', $id)->delete();
    }
}