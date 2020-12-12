<?php include_once ("Servico.class.php");?>
<?php include_once ("conexao.php");?>
<?php 

 class ServicoDao{
 	private $conexao;

 
#public servico = new Servico();



 	function __construct($conexao){
 		$this->conexao = $conexao;
 	
	 	}
 	public function Inserir($servico){
 		$conexao = new Conexao();
	    $sql = "INSERT INTO servico (codigo_Servico ,descricao,Valor) values('";
 		$sql = $sql . $servico->GetCodigo_Servico() . "','";
 		$sql = $sql . $servico->GetDescricao() . "','";
 		$sql = $sql . $servico->GetValor(). "')";

 		#echo $sql;
 		$banco = $this->conexao->GetBanco();
 		$banco->query($sql);
 		$this->conexao->Desconectar();

 	}

 	public function Seleciona($servico){
 		$sql = "select * from servico";
 		//echo $sql;
 		$banco = $this->conexao->GetBanco();
 		$retorno = $banco->query($sql);
 		$this->conexao->Desconectar();
 		return $retorno;
 		
 	}



 		public function Alterar($servico){
 		$sql = "update servico set   descricao = '" . $servico->GetDescricao() .
 		"', descricao = '" . $servico->GetDescricao() .
 		"', Valor = '" . $servico->GetValor() . "'  
 		where codigo_Servico = '" . $servico->GetCodigo_Servico() . "' ";
 		
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


 	public function CarregaServico($cod){
     	$sql = "select * from servico where codigo_Servico = $cod" ;
     	$this->conexao->Conectar();
     	$banco = $this->conexao->GetBanco();
     	$tabela =  $banco->query($sql);
     	$registro = $tabela->fetch_array();
     	$serv = new Servico($registro["codigo_Servico"],$registro["descricao"],$registro["Valor"]);
     	
     	$this->conexao->Desconectar();
     	return $serv;
 	}

     public function ExcluirServico($codigo_Servico){
          $sql = "delete from servico where " .
          "codigo_Servico = $codigo_Servico";
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


 
 }






?>