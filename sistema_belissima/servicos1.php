<?php 
 class ServicoS {
	private $codigo;
    private $nome_servico;
	private $preco;
	private $SobreServico;
function __construct($codigo = 0,$nome_servico = "",$preco = 0,$SobreServico=""){
	$this->SetCodigo($codigo);
	$this->SetNomeServico($nome_servico);
	//$this->SetTipo($tipo);
	$this->SetPreco($preco);
	$this->SetSobreServico($SobreServico);
}

public function SetCodigo($valor){
	$this->codigo = $valor;
}
public function GetCodigo(){
	return $this-> codigo;
}

public function SetNomeServico($valor){
	$this->nome_servico = $valor;
}
public function GetNomeServico(){
	return $this-> nome_servico;
}

//public function SetTipo($valor){
	//$this->tipo = $valor;
//}
//public function GetTipo(){
	//return $this-> tipo;
//}

public function SetPreco($valor){
	$this->preco = $valor;
}
public function GetPreco(){
	return $this-> preco;
}

public function SetSobreServico($valor){
	$this->SobreServico = $valor;
}
public function GetSobreServico(){
	return $this->SobreServico;
}

}

?>