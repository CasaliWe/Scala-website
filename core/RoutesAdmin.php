<?php

namespace Core;

class RoutesAdmin {
    private static $routes = [
        '/admin/dashboard'   => 'Contatos | Endereço',
        '/admin/banners'     => 'Banners',
        '/admin/solucoes'     => 'Soluções',
        '/admin/textos-empresa'     => 'Textos página Empresa',
        '/admin/servicos'     => 'Serviços',
        '/admin/'            => 'Login'
    ];

    public static function getPageTitle() {
        $urlAtual = $_SERVER['REQUEST_URI'];
        foreach (self::$routes as $slug => $titulo) {
            if (strpos($urlAtual, $slug) !== false) {
                return $titulo;
            }
        }
        return 'Página Desconhecida';
    }

    public static function isActive($pagina) {
        return strpos($_SERVER['REQUEST_URI'], $pagina) !== false ? 'active-link-desktop' : '';
    }
}
