<?php

$Nome		= $_POST["Nome"];	// Pega o valor do campo Nome
//$Fone		= $_POST["Fone"];	// Pega o valor do campo Telefone
$Email		= $_POST["Email"];	// Pega o valor do campo Email
$Mensagem	= $_POST["Mensagem"];	// Pega os valores do campo Mensagem

//echo $Nome;
	require 'PHPMailer/PHPMailerAutoload.php';
	
	$Mailer = new PHPMailer();
	
	//Define que será usado SMTP
	$Mailer->IsSMTP();
	
	//Enviar e-mail em HTML
	$Mailer->isHTML(true);
	
	//Aceitar carasteres especiais
	$Mailer->Charset = 'UTF-8';
	
	//Configurações
	$Mailer->SMTPAuth = true;
	$Mailer->SMTPSecure = 'ssl';
	
	//nome do servidor
	$Mailer->Host = 'smtp.gmail.com';
	//Porta de saida de e-mail 
	$Mailer->Port = 465;
	
	//Dados do e-mail de saida - autenticação
	$Mailer->Username = 'sistemabelissima1@gmail.com';
	$Mailer->Password = 'trabalho';
	
	//E-mail remetente (deve ser o mesmo de quem fez a autenticação)
	$Mailer->From = 'sistemabelissima1@gmail.com';
	
	//Nome do Remetente
	$Mailer->FromName = $Nome;
	
	//Assunto da mensagem
	$Mailer->Subject = $Email;
	
	//Corpo da Mensagem
	$Mailer->Body = $Mensagem;
	
	//Corpo da mensagem em texto
	$Mailer->AltBody = $Email;
	
	//Destinatario 
	$Mailer->AddAddress('sistemabelissima1@gmail.com');
	
	if($Mailer->Send()){
		//echo "E-mail enviado com sucesso";
		
		header("location:site2.php");
		//echo ("<script> {alert(\"Mensagem  enviada com sucesso podendo entrar em contato.\");} </script>");
	}else{
		echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
	}
	
?>



