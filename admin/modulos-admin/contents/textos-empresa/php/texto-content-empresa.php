<?php

require '../../../../config/config.php';
use Repositories\TextosEmpresaRepository;

$content = $_POST['conteudo'];

$res = TextosEmpresaRepository::updateContent($content);

if(!$res){
    header('Location: ../../../../textos-empresa.php?error=true');
    exit;
}else{
    header('Location: ../../../../textos-empresa.php?success=true');
    exit;
}

