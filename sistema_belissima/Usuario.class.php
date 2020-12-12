<?php
 class Usuario {
 	private $codigo_Usuario;
	private $nome;
	private $nivel;
    private $email;
	private $senha;
	private $cidade;
	private $bairro;
	private $endereco;
	private $telefone;



function __construct($codigo_Usuario=0,$nome = "",$nivel = "",$email = "",$senha = "",$cidade="",$bairro="",$endereco ="",$telefone=""){
	$this->setCodigo_Usuario($codigo_Usuario);
	$this->SetNome($nome);
	$this->SetNivel($nivel);
	$this->SetEmail($email);
	$this->SetSenha($senha);
	$this->SetCidade($cidade);
	$this->SetBairro($bairro);
	$this->SetEndereco($endereco);
	$this->SetTelefone($telefone);
}

public function SetCodigo_Usuario($valor){
	$this->Codigo_Usuario = $valor;
}
public function GetCodigo_Usuario(){
	return $this-> Codigo_Usuario;
}

public function SetNome($valor){
	$this->nome = $valor;
}
public function GetNome(){
	return $this-> nome;
}
public function SetNivel($valor){
	$this->nivel = $valor;
}
public function GetNivel(){
	return $this-> nivel;
}

public function SetEmail($valor){
	$this->email = $valor;
}
public function GetEmail(){
	return $this-> email;
}

public function SetSenha($valor){
	$this->senha = $valor;
}
public function GetSenha(){
	return $this-> senha;

	}

	public function SetCidade($valor){
	$this->cidade = $valor;
}
public function GetCidade(){
	return $this-> cidade;

	}

public function SetBairro($valor){
	$this->bairro = $valor;
}
public function GetBairro(){
	return $this-> bairro;

	}

public function SetEndereco($valor){
	$this->endereco = $valor;
}
public function GetEndereco(){
	return $this-> endereco;

	}


public function SetTelefone($valor){
	$this->telefone = $valor;
}
public function GetTelefone(){
	return $this-> telefone;

	}
}

?>