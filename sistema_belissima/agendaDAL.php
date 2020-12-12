<?php 
include_once ("Usuario.class.php");
include_once ("conexao.php");
include_once ("agendamento.php");
include_once ("LoginDao.class.php");
include_once ("Servico.class.php");

     

/**
**/ 	


class AgendaDAL{
	private $conexao;

	
	
	function __construct($conexao)
	{	$this->conexao = $conexao;
		# code...
	}

    public function Busca_situacao2(){
        $conexao = new Conexao();
        $sql ="select * from situacao where codigo_Situacao = 2 ";
       // echo $sql;
          $this->conexao->Conectar();
        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sql);
        $this->conexao->Desconectar();
        return $retorno;

    }

    public function busca_hora(){
      $conexao = new Conexao();
      $sql = "select * from horario";
     // var_dump($sql);
       $this->conexao->Conectar();
        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sql);
        $this->conexao->Desconectar();
        return $retorno;
    }


public function Busca_situacao(){
    $Conexao = new Conexao();

    $sql = "select * from situacao where codigo_Situacao = 1";
   // echo $sql;
     $this->conexao->Conectar();
        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sql);
        $this->conexao->Desconectar();
        return $retorno;

}

 	public function Inserir_a($agenda){
 	//$u = new Usuario();
 	//$usuu = $u->login();


 		$conexao = new Conexao();

	    $sql = "Insert Into atendimento (codigo_atendimento,datas,codigo_Usuario,codigo_hora,codigo,codigo_Situacao) values('";
 		$sql = $sql . $agenda->GetCodigo_agendamento() . "','";
 		$sql = $sql . $agenda->GetData() . "','";
 		$sql = $sql . $agenda->GetCodigo_a() . "','";
 	    $sql = $sql . $agenda->GetHora() . "','";
         $sql = $sql . $agenda->GetCodigo_b() . "','";
 	    $sql = $sql . $agenda->GetSituacao() . "')";

//var_dump($sql);
         //  echo $sql;
 		$banco = $this->conexao->GetBanco();
 		$banco->query($sql);

     
 		$this->conexao->Desconectar();
 	}

 public function Busca_usuario($nome){
   // $sql = "select atendimento.* , servico.* ,usuario.* , situacao.* , date_format(datas,'%d/%m/%y') as datas from atendimento inner join servico on servico.codigo = atendimento.codigo inner join Usuario on usuario.codigo_Usuario = atendimento.codigo_Usuario  inner join situacao on situacao.codigo_Situacao = atendimento.codigo_Situacao order by datas DESC ";
   $sql = "select atendimento.* , servico.* ,usuario.* , situacao.*,horario.* , date_format(datas,'%d/%m/%y') as datas from atendimento inner join servico on servico.codigo = atendimento.codigo inner join usuario on usuario.codigo_Usuario = atendimento.codigo_Usuario  inner join situacao on situacao.codigo_Situacao = atendimento.codigo_Situacao  inner join horario on horario.codigo_hora = atendimento.codigo_hora
      where" . " nome  like '%".$nome."%' or descricao  like '%".$nome."%' or datas  like '%".$nome."%' or nome_Servico  like '%".$nome."%' or horas like '%".$nome."%'    ";
          //echo $sql;
        $this->conexao->Conectar();
        $banco = $this->conexao->GetBanco();
        $retorno = $banco->query($sql);
        $this->conexao->Desconectar();
        return $retorno;
 }


public function Seleciona_Agenda($codigo,$nome){

  // $sql = "select atendimento.* , servico.* ,usuario.* , situacao.* , date_format(datas,'%d/%m/%y') as datas from atendimento inner join servico on servico.codigo = atendimento.codigo inner join usuario on usuario.codigo_Usuario = atendimento.codigo_Usuario inner join situacao on situacao.codigo_Situacao = atendimento.codigo_Situacao where atendimento.codigo_Usuario = $codigo order by datas DESC";
   $sql = "select atendimento.* , servico.* ,usuario.* , situacao.*,horario.* , date_format(datas,'%d/%m/%y') as datas from atendimento inner join servico on servico.codigo = atendimento.codigo inner join usuario on usuario.codigo_Usuario = atendimento.codigo_Usuario inner join situacao on situacao.codigo_Situacao = atendimento.codigo_Situacao inner join horario on horario.codigo_hora = atendimento.codigo_hora where atendimento.codigo_Usuario = $codigo and datas like '%$nome%' or descricao like '%$nome%' and atendimento.codigo_Usuario = $codigo or  nome_Servico like '%$nome%' and atendimento.codigo_Usuario = $codigo  or  horas like '%$nome%' and atendimento.codigo_Usuario = $codigo  ";
          // echo $sql;
     	$this->conexao->Conectar();
 		$banco = $this->conexao->GetBanco();
 		$retorno = $banco->query($sql);
 		$this->conexao->Desconectar();
 		return $retorno;
}
public function Buscar_Agenda($codigo){
	//$sql = "select codigo_atendimento from atendimento where codigo_Usuario = $codigo order by codigo_atendimento DESC LIMIT 1";

	$sql = "select max(codigo_atendimento) from atendimento where codigo_Usuario = $codigo";
	//echo $sql;
	$this->conexao->Conectar();
 		$banco = $this->conexao->GetBanco();
 		$retorno = $banco->query($sql);
 		$this->conexao->Desconectar();
 		return $retorno;
}
//public function Inserir_AtendimentoServico($atendi){  
	
 //	$conexao = new Conexao();
	//$sql = "Insert Into atendimento_servico (codigo_atendimento,codigo) values('";
    //$sql = $sql . $atendi->GetCodigo_agendamento() . "','";
    //$sql = $sql . $atendi->GetCodigo_b() . "')";
 	//$sql = $sql . $atendi->GetSituacao() . "')";
     //echo $sql;
    //$banco = $this->conexao->GetBanco();
 	//$banco->query($sql);
 	//$this->conexao->Desconectar();

//}
public function selecionahorario(){
  $sql = "select * from horario";
   $conexao = new Conexao();
    $banco = $this->conexao->GetBanco();
    $retorno = $banco->query($sql);
    $this->conexao->Desconectar();
    return $retorno;
}

public function BuscarHorario($hora,$data){
  $sql = "select horario.* atendimento.id atendimento.datas from atendimento inner join horario on atendimento.id = horario.id where hora = $hora and datas = $data ";
  $conexao = new Conexao();
    $banco = $this->conexao->GetBanco();
    $retorno = $banco->query($sql);
    $this->conexao->Desconectar();
    return $retorno;
    
}
public function Buscar($data , $hora){

	$sql = "SELECT datas,codigo_hora FROM atendimento  where datas = '$data' and codigo_hora = '$hora'  ";

		$conexao = new Conexao();
 		$banco = $this->conexao->GetBanco();
 		$retorno = $banco->query($sql);
 		$this->conexao->Desconectar();
 		return $retorno;
		

}
	public function Alterar_agenda($agenda){
		   		$sql = "update atendimento set   datas = '" . $agenda->GetData() ."',codigo_hora = '" . $agenda->GetHora() . "', codigo = '" . $agenda->GetCodigo_b() . "',
                codigo_Situacao = '" . $agenda->GetSituacao() . "'
 		where codigo_atendimento = '" . $agenda->GetCodigo_agendamento() . "' ";
 		
               if ($sql ) {
                 echo ("<script> {alert(\"Alterado com sucesso\");} </script>");
                    # code...
               }
               else {
                    die("erro" . mysql_error());
	}
        $banco = $this->conexao->GetBanco();
        $banco->query($sql);
        $this->conexao->Desconectar();
}

public function Alterar_situacao($agenda){
                $sql = "update atendimento set   codigo_Situacao = '" . $agenda->GetSituacao() ."'
        where codigo_atendimento = '" . $agenda->GetCodigo_agendamento() . "' ";
        
           $banco = $this->conexao->GetBanco();
        $banco->query($sql);
        $this->conexao->Desconectar();
}

	public function CarregaAgenda($cod){
     $sql = "select atendimento.* ,horario.*, servico.* from atendimento inner join servico on servico.codigo = atendimento.codigo  inner join horario on horario.codigo_hora = atendimento.codigo_hora where codigo_atendimento = $cod" ;
     $this->conexao->Conectar();
     $banco = $this->conexao->GetBanco();
     $tabela =  $banco->query($sql);
     $registro = $tabela->fetch_array();
     $age = new Agendamento($registro["codigo_atendimento"],$registro["datas"],$registro["codigo_Usuario"],$registro["horas"],$registro["codigo"]);
     	
     	$this->conexao->Desconectar();
     	return $age;
 	}
     

     public function Carre($codigo){
     		$sql = "select atendimento.* , servico.* from atendimento inner join servico on servico.codigo = atendimento.codigo where codigo_atendimento = $codigo" ;
           // echo $sql;
     	$this->conexao->Conectar();
     	$banco = $this->conexao->GetBanco();
            $retorno = $banco->query($sql);
     	$this->conexao->Desconectar();
 		return $retorno;
     }

      public function ExcluirAgenda($codigo){
       
          $sql = "delete from atendimento where " .
          "codigo_atendimento = $codigo";
         // echo $sql;
          $this->conexao->Conectar();
          $banco = $this->conexao->GetBanco();
          $banco->query($sql);
          $this->conexao->Desconectar();
     }

}
?>