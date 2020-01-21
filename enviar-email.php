<?php
// Dados do Formulário
$name = $_POST['nome'];
$email = $_POST['email'];
$phone = $_POST['telefone'];
$message = $_POST['mensagem'];
$subject = "Mensagem do Site";

$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "x=Mailer:PHP/".phpversion();

$corpo = "Formulário da página de contato <br>";
$corpo .= "Nome: " . $name . " <br>";
$corpo .= "Telefone: " . $phone . " <br>";
$corpo .= "Email: " . $email . " <br>";
$corpo .= "Mensagem: " . $message . " <br>";

$email_to = 'rafaeldornelesmachado2001@outlook.com';

$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);

if ($status):
  header('location:index.php?status=sucesso');
else:
  header('location:index.php?status=erro');
endif;
?>