<?php

require '../../../../config/config.php';
use Repositories\SolucoesRepository;

$scala_e = $_POST['scala-e'];
$scala_faz = $_POST['scala-faz'];
$quem_e_scala = $_POST['quem-e-scala'];
$scala_onde = $_POST['scala-onde'];

$data = [
    'scala_e' => $scala_e,
    'scala_faz' => $scala_faz,
    'quem_e_scala' => $quem_e_scala,
    'scala_onde' => $scala_onde
];

$res = SolucoesRepository::update($data);

if(!$res){
    header('Location: ../../../../solucoes.php?error=true');
    exit;
}else{
    header('Location: ../../../../solucoes.php?success=true');
    exit;
}


