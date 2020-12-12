	<?php 


	include_once("Usuario.class.php");
	class loginDao{

		private $conexao;


		public function __construct(){

			$this ->conexao = new Conexao;

		}
		public function  login($email){

			$usuario = new Usuario();

			$sql = "SELECT * FROM usuario  where email = '$email'";
			$execute = mysqli_query ($this ->conexao->getCon(), $sql);
			$num =mysqli_num_rows ($execute);
			//echo $num;

			 if ($num == 1){
		 	while ($percorrer =mysqli_fetch_array($execute)) {
		 		$nome = $percorrer['nome'];
		 		//echo $nome;
		 	//	$nome = $percorrer['nome'];
		 		$email = $percorrer['email'];
		 		//$token = 'meutoken0001';
		 		//$usuario->GetCodigo_Usuario =$percorrer['codigo_Usuario'];

		 		//session_start();
		 			
		 			//header("location:F-UsuarioN1.php?codigo=".$usuario->GetCodigo_Usuario."&nome=".$nome);
		 			//$_session['nivel_Acesso'] = $nome;
	 					 	
}		 	
	}else
	//echo "Este e-mail não consta no banco de dados";
echo ("<script> {alert(\"Este e-mail não consta no banco de dados.\");} </script>");
	if ( $num > 0) {
	$novasenha =substr(md5(time()), 0, 6);
	$nscriptografada =(md5($novasenha));
	//$email = $mysqli->escape_string($_POST['email']);

	//if (mail($email,"sua nova senha","Sua nova senha:".$novasenha)) {
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
	$Mailer->FromName =$email ;
	
	//Assunto da mensagem
	$Mailer->Subject = 'sua nova senha';
	
	//Corpo da Mensagem
	$Mailer->Body ='Notificamos que o sr(a) '.$nome.' solicitou uma nova senha aconselhamos que altere sua nova senha por seguran&ccedil;a. <br><br>
	Sua nova senha &eacute;:'.$novasenha;
	
	//Corpo da mensagem em texto
	$Mailer->AltBody = 'sua nova senha' ;
	
	//Destinatario 
	$Mailer->AddAddress($email);
	
	if($Mailer->Send()){
		//echo "E-mail enviado com sucesso";
		echo ("<script> {alert(\"Consulte seu e-mail para acesso a sua nova senha caso não receba certifique se seu email foi digitado corretamente\");} </script>");
		//header("location:B-Faleconosco.php");
		//echo ("<script> {alert(\"Mensagem  enviada com sucesso podendo entrar em contato.\");} </script>");
	}else{
		echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
	}
		$sql_code ="UPDATE usuario set senha = '$nscriptografada' where  email ='$email'";
		$execute = mysqli_query ($this ->conexao->getCon(), $sql_code);
		//$sql_query =$mysqli->query($sql_code) or die($mysqli->error);
	}
	
	
}
	}
	

	  ?>  