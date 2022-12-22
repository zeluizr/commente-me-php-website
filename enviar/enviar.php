<?php

if(isset($_POST['enviar'])) {

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$empresa = $_POST['empresa'];
	$mensagem = $_POST['mensagem'];
	$check = $_POST['aceita'];




	$email_remetente_dominio = "cantelle@commente.me";
	$email_destinatario = "hablecon@commente.me";	
	$email_reply = "$email";

	$email_conteudo = "<h4>Formulário de Contato</h4>";
	$email_conteudo .=	"<strong>Nombre:</strong> $nome";
	$email_conteudo .=	"<br/><strong>Correo:</strong> $email";
	$email_conteudo .=	"<br/><strong>Empresa:</strong> $empresa";
	$email_conteudo .=	"<br/><strong>Mensaje:</strong>";
	$email_conteudo .=	"<br/>$empresa";

	if(isset($check) == "on") {
		$email_conteudo .=	"<br/><br/>Acepto recebir información comercial de commente.me, a través  de los puntos de contacto facilitados aqui.<br/>";
	} else {
		$email_conteudo .=	"";
	}


	$email_conteudo .=	"<br/>$check";
	$email_conteudo .=	"<br/>";


	$email_assunto = "Formulário de Contato";
	
	$email_headers = implode ( "\n",array ( "From: $email_remetente_dominio", "Reply-To: $email_reply", "Return-Path: $email_remetente_dominio","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );	


	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers))
	{		 
		echo "<script type='text/javascript'>alert('Mensagem enviada com sucesso!');</script>";		
	}
	else
	{	
		
		echo "<script type='text/javascript'>alert('Ocorreu algum erro. Verifique seus dados.');</script>";
	}			
}
?>
