<?php
// Incluindo o autoload do Composer
require 'vendor/autoload.php';

// Carregar as variáveis de ambiente do arquivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Variáveis do Usuário
$name = isset($_POST['name']) ? $_POST['name'] : '';  // Nome do usuário
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';  // Assunto do e-mail

// Criando o transporte SMTP usando variáveis de ambiente
$transport = (new Swift_SmtpTransport(getenv('MAIL_HOST'), getenv('MAIL_PORT'), getenv('MAIL_ENCRYPTION')))
    ->setUsername(getenv('MAIL_USERNAME'))
    ->setPassword(getenv('MAIL_PASSWORD')); // Senha do aplicativo gerada no Google

// Criando o Mailer com o transporte configurado
$mailer = new Swift_Mailer($transport);

// Criando o corpo do e-mail
$message = (new Swift_Message($subject))  // Usando o 'subject' recebido no formulário
    ->setFrom([getenv('MAIL_USERNAME') => $name])  // O nome será associado ao e-mail
    ->setTo([getenv('MAIL_TO')])  // Usando o e-mail do destinatário
    ->setBody('Assunto: ' . $subject . '<br>Mensagem enviada por: ' . $name);

// Enviando o e-mail
try {
    $result = $mailer->send($message);
    echo 'Mensagem enviada com sucesso!';
} catch (Exception $e) {
    echo 'Falha ao enviar a mensagem: ', $e->getMessage();
}
?>
