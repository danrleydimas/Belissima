
<?php 

include_once ("servicos1.php");
include_once ("conexao.php");

 class ServicoManter{
 	private $conexao;

 
#public servico = new Servico();



 	function __construct($conexao){
 		$this->conexao = $conexao;
 	
	 	}
 	public function Inserir($servico){
 		$conexao = new Conexao();
	    $sql = "Insert Into servico (codigo,nome_servico,preco,SobreServico) values('";
 		$sql = $sql . $servico->GetCodigo() . "','";
 		$sql = $sql . $servico->GetNomeServico() . "','";
 	  $sql = $sql . $servico->GetPreco() . "','";
 		$sql = $sql . $servico->GetSobreServico() . "')";
      //  echo $sql ;   

 	
 		$banco = $this->conexao->GetBanco();
 		$banco->query($sql);
 		$this->conexao->Desconectar();

 	}

 	public function Altera($servico){
 		$sql = "update servico set   nome_servico = '" . $servico->GetNomeServico() .
 	//	"', SobreServico = '" . $servico->GetSobreServico() .
 		"', preco = '" . $servico->GetPreco() . 
    "', SobreServico = '" . $servico->GetSobreServico() . "'  
 		where codigo = '" . $servico->GetCodigo() . "' ";
   // echo $sql;
 		
               if ($sql ) {
                 echo ("<script> {alert(\"Alterado com sucesso\");} </script>");
                    # code...
               }
               else {
                    die("erro" . mysql_error());
                   # echo "nao foi possivel alterar";
                    # code...
               }

 		##echo $sql;

		$banco = $this->conexao->GetBanco();
 		$banco->query($sql);
 		$this->conexao->Desconectar();


 	}

 	public function Pesquisa($nome){
 		$sql = "select * from servico where  nome_servico like '%".$nome."%' or preco  like '%".$nome."%'" ;
 		//echo $sql;
 		$this->conexao->Conectar();
 		$banco = $this->conexao->GetBanco();
 		$retorno = $banco->query($sql);
 		$this->conexao->Desconectar();
 		return $retorno;
 		
 	}

 public function Seleciona_servico($servico){
    $sql = "select * from servico" ;
    echo $sql;
    $this->conexao->Conectar();
    $banco = $this->conexao->GetBanco();
    $retorno = $banco->query($sql);
    $this->conexao->Desconectar();
    return $retorno;
    
  }

 	public function CarregaServico($cod){
     	$sql = "select * from servico where codigo = $cod" ;
     	$this->conexao->Conectar();
     	$banco = $this->conexao->GetBanco();
     	$tabela =  $banco->query($sql);
     	$registro = $tabela->fetch_array();
     	$serv = new ServicoS($registro["codigo"],$registro["nome_servico"],$registro["preco"],$registro["SobreServico"]);
     	
     	$this->conexao->Desconectar();
     	return $serv;
 	}

     public function ExcluirServico($codigo){
       
          $sql = "delete from servico where " .
          "codigo = $codigo";
          
           if ($codigo != 0) {
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