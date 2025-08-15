<?php

require '../../../../config/config.php';
use Repositories\TextosEmpresaRepository;

$missao = $_POST['missao'];
$visao = $_POST['visao'];
$valores = $_POST['valores'];
$compromisso = $_POST['compromisso'];

$res = TextosEmpresaRepository::updateMVVC($missao, $visao, $valores, $compromisso);

if(!$res){
    header('Location: ../../../../textos-empresa.php?error=true');
    exit;
}else{
    header('Location: ../../../../textos-empresa.php?success=true');
    exit;
}

