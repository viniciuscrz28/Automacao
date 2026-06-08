<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mensagemStatus = "";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = '$email';
        $mail->Password = 'chave';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('$email', 'Automacão Industrial');
        $mail->addAddress('$email');

        $mail->Subject = 'Novo contato do site';
        $mail->Body = "Nome: $nome\nEmail: $email\nMensagem: $mensagem";

        $mail->send();
        $mensagemStatus = "Mensagem enviada com sucesso!";
    } catch (Exception $e) {
        $mensagemStatus = "Erro: {$mail->ErrorInfo}";
    }
}
?>

