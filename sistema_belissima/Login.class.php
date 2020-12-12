<?php

class login{

	private $codUsuario;
	//private $nome;
	private $email;
	private $senha;
	private $logado;

	public function SetCodUsuario($codUsuario){
	$this->codigoUsuario = $codUsuario;
}
public function GetCodUsuario(){
	return $this->codUsuario;
}

//public function SetNome($nome){
	//$this->nome = $SetNome;
//}
//public function GetNome(){
	//return $this->nome;
//}

public function SetEmail($email){
	$this->email = $email;
}
public function GetEmail(){
	return $this->email;
}

public function Setsenha($senha){
	$this->senha = $senha;
}
public function GetSenha(){
	return $this->senha;
}
public function Setlogado($logado){
	$this->logado = $logado;
}
public function GetLogado(){
	return $this->logado;
}
}


  ?>