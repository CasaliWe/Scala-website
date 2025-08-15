<?php

require_once __DIR__ . '/../../../../../helpers/upload-webp.php';

require '../../../../config/config.php';
use Repositories\ServicosRepository;

// Dados enviados pelo formulário
$id = $_POST['id'];
$titulo = $_POST['texto-link'];
$descricao = $_POST['descricao'];
$titulo_banner = $_POST['titulo'];

// Caminho onde os arquivos serão salvos
$pastaDestino = __DIR__ . "/../../../../assets/imagens/arquivos/servicos/";

$banner = salvarImagemWebP($_FILES['banner'], $pastaDestino);
$thumb = salvarImagemWebP($_FILES['thumb'], $pastaDestino);


// Atualiza no banco de dados
$res = ServicosRepository::update($id, $titulo, $descricao, $titulo_banner, $banner, $thumb);

// Redireciona com base no resultado
if ($res) {
    header('Location: ../../../../servicos.php?success=true');
} else {
    header('Location: ../../../../servicos.php?error=true');
}
