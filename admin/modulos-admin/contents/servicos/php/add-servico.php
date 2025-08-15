<?php

require '../../../../config/config.php';
use Repositories\ServicosRepository;

$titulo = $_POST['titulo'];

$res = ServicosRepository::create($titulo);

if(!$res){
    header('Location: ../../../../servicos.php?error=true');
    exit;
}else{
    header('Location: ../../../../servicos.php?success=true');
    exit;
}


