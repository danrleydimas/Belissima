
 <?php include_once ("..\conexao.php");?>
 <?php  include_once("..\Usuario.class.php");?>


<?php 

 class UsuarioDao{
 	private $conexao;

 
#public servico = new Servico();



 	function __construct($conexao){
 		$this->conexao = new conexao;
 	
	 	}
    //cadastra usuarios no sistema 

     public function Validando($email){
      $sql = "select email from usuario where email like '%".$email."%' ";
      
       $this->conexao->Conectar();
    $banco = $this->conexao->GetBanco();
    $retorno = $banco->query($sql);
    $this->conexao->Desconectar();
    return $retorno;
     

     }
 	public function Inserir($Usuario){
 		$conexao = new Conexao();
	    $sql = "insert into usuario (codigo_Usuario,nome,nivel_Acesso,email,senha,cidade,bairro,endereco,telefone) values('";
        $sql = $sql . $Usuario->GetCodigo_Usuario() . "','";
 		$sql = $sql . $Usuario->GetNome() . "','";
 		$sql = $sql . $Usuario->GetNivel() . "','";
 		$sql = $sql . $Usuario->GetEmail() . "','";
 		$sql = $sql . $Usuario->GetSenha() . "','";
 		$sql = $sql . $Usuario->GetCidade() . "','";
 		$sql = $sql . $Usuario->GetBairro() . "','";
 		$sql = $sql . $Usuario->GetEndereco() . "','";
 		$sql = $sql . $Usuario->GetTelefone() . "')";

		   // echo $sql;
	  
   if ($sql ) {
                 echo ("<script> {alert(\"Cadastrado com sucesso\");} </script>");
                    # code...
               }
               else {
                    die("erro" . mysql_error());
                   # echo "nao foi possivel alterar";
                    # code...
               }
                 
 		$banco = $this->conexao->GetBanco();
 		$banco->query($sql);
 		$this->conexao->Desconectar();

 	}
//apenas seleciona o nivel do usuario com niveis 2 e 1
  //"select * from usuario where nivel_Acesso = 0 and  cidade like '%$nome%' or endereco like '%$nome%' and nivel_Acesso = 0 or 
   //nome like '%$nome%' and nivel_Acesso = 0  or email like '%$nome%' and nivel_Acesso = 0 or bairro like '%$nome%' and nivel_Acesso = 0 "

 	public function Selecionaf($nome){
    $sql = "select * from usuario where   nivel_Acesso = 1 and nome like '%$nome%'  OR nivel_Acesso = 2 and nome like '%$nome%' or nivel_Acesso = 1 and email like '%$nome%'  OR nivel_Acesso = 2 and email like '%$nome%' or  nivel_Acesso = 1 and nivel_Acesso like '%$nome%'  OR nivel_Acesso = 2 and nivel_Acesso like '%$nome%' " ;
   // echo $sql;
    $this->conexao->Conectar();
    $banco = $this->conexao->GetBanco();
    $retorno = $banco->query($sql);
    $this->conexao->Desconectar();
    return $retorno;
    
  }

// altera o usuario 1 e 2 empreza 

        public function Alterar($Usuario){
        $sql = "update usuario set   nome = '" .$Usuario->GetNome().
        "', nivel_Acesso = '" .$Usuario->GetNivel() .
        "',  email= '" .$Usuario->GetEmail() .
        "', senha = '" .$Usuario->GetSenha() . "'  
        where codigo_Usuario = '" . $Usuario->GetCodigo_Usuario() . "' ";
        
               if ($sql ) {
                 echo ("<script> {alert(\"Alterado com sucesso\");} </script>");
                    # code...
               }
               else {
                    die("erro" . mysql_error());
                   # echo "nao foi possivel alterar";
                    # code...
               }

        //echo $sql;

        $banco = $this->conexao->GetBanco();
        $banco->query($sql);
        $this->conexao->Desconectar();


    }


    public function CarregaUsuario($cod){
        $sql = "select * from usuario where codigo_Usuario = $cod" ;
        $this->conexao->Conectar();
        $banco = $this->conexao->GetBanco();
        $tabela =  $banco->query($sql);
        $registro = $tabela->fetch_array();
        $serv = new Usuario($registro["codigo_Usuario"],$registro["nome"],$registro["email"],$registro["nivel_Acesso"],$registro["senha"]);
        
        $this->conexao->Desconectar();
        return $serv;
    }

     public function ExcluirUsuario($codigo_Usuario){
          $sql = "delete from usuario where " .
          "codigo_Usuario = $codigo_Usuario";
           if ($sql ) {
                       echo ("<script> {alert(\"Exclusão efetuada com sucesso\");} </script>");
               
               }
               else {
                    die("erro" . mysql_error());
                   
          
               }

         

          $this->conexao->Conectar();
          $banco = $this->conexao->GetBanco();
          $banco->query($sql);
          $this->conexao->Desconectar();
     }

     // busca ussuario 0 para tela de agendamento
 public function buscaUsuario($codigo){

  $sql = "select * from usuario where codigo_Usuario = $codigo" ;
  //echo $sql;
          $this->conexao->Conectar();
        $banco = $this->conexao->GetBanco();
        $tabela =  $banco->query($sql);
        $registro = $tabela->fetch_array();
        $uso = new Usuario($registro["codigo_Usuario"],$registro["nome"],$registro["nivel_Acesso"],$registro["email"],$registro["senha"],$registro["cidade"],$registro["bairro"],$registro["endereco"],$registro["telefone"]);
        
        $this->conexao->Desconectar();
        return $uso;

 }
 //alterar usuario nivel 0

 public function Alte($Usuario){
        $sql = "update usuario set   nome = '" .$Usuario->GetNome().
        "', nivel_Acesso = '" .$Usuario->GetNivel() .
        "',  email= '" .$Usuario->GetEmail() .
        "', senha = '" .$Usuario->GetSenha() .
        "', cidade = '" .$Usuario->GetCidade() .
        "',bairro = '" .$Usuario->GetBairro() .
        "',endereco = '" .$Usuario->GetEndereco() .
        "', telefone = '" .$Usuario->GetTelefone() . "'  
        where codigo_Usuario = '" . $Usuario->GetCodigo_Usuario() . "' ";
        
               if ($sql ) {
                 echo ("<script> {alert(\"Alterado com sucesso\");} </script>");
                    # code...
               }
               else {
                    die("erro" . mysql_error());
                   # echo "nao foi possivel alterar";
                    # code...
               }

          $this->conexao->Conectar();
          $banco = $this->conexao->GetBanco();
          $banco->query($sql);
          $this->conexao->Desconectar();

      //  echo $sql;



 }

//and nome like '%".$nome."%'
 public function SelecionaUsuario($nome){
  $sql = "select * from usuario where nivel_Acesso = 0 and  cidade like '%$nome%' or endereco like '%$nome%' and nivel_Acesso = 0 or 
   nome like '%$nome%' and nivel_Acesso = 0  or email like '%$nome%' and nivel_Acesso = 0 or bairro like '%$nome%' and nivel_Acesso = 0 " ;
  
        
    $this->conexao->Conectar();
    $banco = $this->conexao->GetBanco();
    $retorno = $banco->query($sql);
    $this->conexao->Desconectar();
    return $retorno;
    
 }



}


?>