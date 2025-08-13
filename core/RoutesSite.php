<?php

namespace Core;

class RoutesSite {
    private static $routes = [
        '/index'   => 'Início',
        '/contato'   => 'Início',
        '/empresa'   => 'Início',
        '/servico'   => 'Início',
        '/' => 'Início'
    ];

    public static function getPageTitle() {
        $urlAtual = $_SERVER['REQUEST_URI'];
        foreach (self::$routes as $slug => $titulo) {
            if (strpos($urlAtual, $slug) !== false) {
                return $_ENV['NOME_SITE'] . ' | ' . $titulo;
            }
        }
        return $_ENV['NOME_SITE'] . ' | Página Desconhecida';
    }

    public static function isActive($pagina) {
        if($pagina == '/'){
            return 'active-link';
        }
        
        return strpos($_SERVER['REQUEST_URI'], $pagina) !== false ? 'active-link' : '';
    }
}
