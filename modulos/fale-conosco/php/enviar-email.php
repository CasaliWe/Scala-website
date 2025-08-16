<?php

require __DIR__ . '/../../../vendor/autoload.php';

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__.'/../../../');
$dotenv->load();

use Core\Logger;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cnpj = $_POST['cnpj'];
$faturamento = $_POST['faturamento'];

// Formatar faturamento para exibição no formato de moeda brasileira
$faturamento_formatado = 'R$ ' . number_format((float)$faturamento, 2, ',', '.');

//enviar email
$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->isSMTP();
    $mail->Host = $_ENV['MAIL_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['MAIL_USER'];
    $mail->Password = $_ENV['MAIL_PASSWORD'];
    $mail->SMTPSecure = $_ENV['MAIL_SECURE'];
    $mail->Port = $_ENV['MAIL_PORT'];

    // Configuração da codificação de caracteres
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    // Destinatários
    $mail->setFrom($_ENV['MAIL_USER'], $_ENV['NOME_SITE']);
    $mail->addAddress($_ENV['MAIL_USER_ADMIN'], $_ENV['NOME_SITE']);
    $mail->addReplyTo($_ENV['MAIL_USER'], $_ENV['NOME_SITE']);

    // Cabeçalhos adicionais
    $mail->addCustomHeader('X-Mailer', 'PHP/' . phpversion());
    $mail->addCustomHeader('Precedence', 'bulk');

    // Conteúdo
    $mail->isHTML(true);
    $mail->Subject = 'Novo contato do site!';
    $mail->Body = '
        <h2>Dados do contato:</h2>
        <p style="margin-top:-5px; color: black;">Nome: ' . $nome . '</p>
        <p style="margin-top:-5px; color: black;">E-mail: ' . $email . '</p>
        <p style="margin-top:-5px; color: black;">Telefone: ' . $telefone . '</p>
        <p style="margin-top:-5px; color: black;">CNPJ: ' . $cnpj . '</p>
        <p style="margin-top:-5px; color: black;">Faturamento: ' . $faturamento_formatado . '</p>
    ';

    $mail->send();

    Logger::log('E-mail enviado com sucesso para ' . $_ENV['MAIL_USER_ADMIN'] . '!', 'INFO');
    header('Location: ' . $_ENV['BASE_URL'] . 'fale-conosco.php?success=true');
    exit;

} catch (Exception $e) {
    Logger::log('Erro ao enviar e-mail: ' . $mail->ErrorInfo, 'ERROR');
    header('Location: ' . $_ENV['BASE_URL'] . 'fale-conosco.php?success=false');
    exit;
}