<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cnpj = $_POST['cnpj'];
$faturamento = $_POST['faturamento'];

// Aqui você pode adicionar o código para enviar o e-mail
echo "Nome: $nome\n";
echo "Telefone: $telefone\n";
echo "E-mail: $email\n";
echo "CNPJ: $cnpj\n";
echo "Faturamento: $faturamento\n";