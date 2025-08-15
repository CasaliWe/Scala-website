<?php

require '../../../../config/config.php';
use Repositories\ContatosRepository;

$instagram = $_POST['instagram'];
$linkedin = $_POST['linkedin'];
$area_cliente = $_POST['area_cliente'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$wpp = $_POST['wpp'];

$data = [
    'instagram' => $instagram,
    'linkedin' => $linkedin,
    'area_cliente' => $area_cliente,
    'email' => $email,
    'telefone' => $telefone,
    'wpp' => $wpp
];

$res = ContatosRepository::update($data);

if(!$res){
    header('Location: ../../../../dashboard.php?error=true');
    exit;
}else{
    header('Location: ../../../../dashboard.php?success=true');
    exit;
}


