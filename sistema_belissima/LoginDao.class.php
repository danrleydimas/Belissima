<?php 
include_once("Usuario.class.php");
class LoginDao{

	private $conexao;


	public function __construct(){

		$this ->conexao = new Conexao;

	}
	public function  login($senha , $email){

		$usuario = new Usuario();

		$sql = "SELECT * FROM usuario  where email = '$email' and senha ='$senha'";
		$execute = mysqli_query ($this ->conexao->getCon(), $sql);
		$num =mysqli_num_rows ($execute);
		 if ($num == 1){
		 	while ($percorrer =mysqli_fetch_array($execute)) {

		 		$nivel = $percorrer['nivel_Acesso'];
		 		$nome = $percorrer['nome'];
		 		$usuario->GetCodigo_Usuario =$percorrer['codigo_Usuario'];

		 		session_start();

		 		if ($nivel == 1) {
		 			
		 			header("location:F-UsuarioN1.php?codigo=".$usuario->GetCodigo_Usuario."&nome=".$nome);
		 			//$_session['nivel_Acesso'] = $nome;


		 		}elseif ($nivel == 2) {
		 			header("location:F-empreza.php?codigo=".$usuario->GetCodigo_Usuario."&nome=".$nome);
		 			
		 		}else{
		 		header("location:agenda.php?codigo=".$usuario->GetCodigo_Usuario."&nome=".$nome);
		 			//$_session['nor']= $nome;
		 		}
		 		
		 	}
		 }else{
		 	//echo "o email ou senha invalidos";
		 	 include_once("alertaLogin.html");
        
		 }

	}
}






 ?>