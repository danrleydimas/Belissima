<?php
 class Servico {
	private $codigo_Servico ;
    private $descricao;
	private $Valor;

function __construct($codigo = 0,$desc = "",$Val =""){
	$this->SetCodigo_Servico($codigo);
	$this->SetDescricao($desc );
	$this->SetValor($Val);
	
}

public function SetCodigo_Servico($valor){
	$this->codigo = $valor;
}
public function GetCodigo_Servico(){
	return $this-> codigo;
}

public function SetDescricao($valor){
	$this->desc = $valor;
}
public function GetDescricao(){
	return $this-> desc;
}

public function SetValor($valor){
	$this->Val = $valor;
}
public function GetValor(){
	return $this-> Val;
}

}

?>