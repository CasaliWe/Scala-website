<?php

require '../../../../config/config.php';
use Repositories\ServicosRepository;

// Dados enviados pelo formulário
$id = $_GET['id'];

// Atualiza no banco de dados
$res = ServicosRepository::delete($id);

// Redireciona com base no resultado
if ($res) {
    header('Location: ../../../../servicos.php?success=true');
} else {
    header('Location: ../../../../servicos.php?error=true');
}
