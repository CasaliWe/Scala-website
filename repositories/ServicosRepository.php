<?php

namespace Repositories;

use Models\Servicos;

class ServicosRepository {
    // pegando
    public static function getAll() {
        return Servicos::all();
    }

    // pegando único
    public static function getOne($id) {
        return Servicos::where('id', $id)->first();
    }

    // atualizando 
    public static function update($id, $titulo, $descricao, $titulo_banner, $banner, $thumb) {
        if($banner){
            Servicos::where('id', $id)->update(['banner' => $banner]);
        }

        if($thumb){
            Servicos::where('id', $id)->update(['thumb' => $thumb]);
        }

        return Servicos::where('id', $id)->update([
            'titulo' => $titulo,
            'descri' => $descricao,
            'title_banner' => $titulo_banner
        ]);
    }

    // atualizando o content
    public static function updateContent($content, $id) {
        return Servicos::where('id', $id)->update(['conteudo' => $content]);
    }

    // criando
    public static function create($titulo) {
        return Servicos::create([
            'titulo' => $titulo
        ]);
    }

    // deletando
    public static function delete($id) {
        return Servicos::where('id', $id)->delete();
    }
}