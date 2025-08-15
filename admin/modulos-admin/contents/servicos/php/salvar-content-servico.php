<?php

require '../../../../config/config.php';
use Repositories\ServicosRepository;

$content = $_POST['conteudo'];
$servico_id = $_POST['servico_id'];

$res = ServicosRepository::updateContent($content, $servico_id);

if(!$res){
    header('Location: ../../../../servicos.php?error=true');
    exit;
}else{
    header('Location: ../../../../servicos.php?success=true');
    exit;
}

