<?php 

$nome = $_POST('nome');
$telefone = $_POST('telefone');
$email = $_POST('email');
$mensagem = $_POST('mensagem');

$para = "rafaeldornelesmachado2001@outlook.com";
$assunto = "Contato = Emissor Online";

$body = "Nome: .$nome \r\n".
		"Telefone: .$telefone \r\n".
		"E-mail: .$email \r\n".
		"Mensagem:  .$mensagem \r\n";

$header = "From: unlockedvxgn@outlook.com. \r\n"
		."Reply-To:.$email.\r\n"
		."x=Mailer:PHP/".phpversion();


if(mail($para, $assunto, $body, $header)){
	echo("E-mail enviado com sucesso. ");
} else {
	echo("E-mail não pôde ser enviado.");
}

?>