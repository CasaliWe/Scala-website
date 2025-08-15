<?php

require '../../../../config/config.php';
use Repositories\BannersRepository;

// Dados enviados pelo formulário
$ref = $_POST['ref'];
$title = $_POST['title'];

// Atualiza no banco de dados
$res = BannersRepository::updateTitle($ref, $title);

// Redireciona com base no resultado
if ($res) {
    header('Location: ../../../../banners.php?success=true');
} else {
    header('Location: ../../../../banners.php?error=true');
}
