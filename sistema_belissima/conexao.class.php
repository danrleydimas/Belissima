<?php 

class Conexao {

	private $usuario = "root";
	private $senha= "";
	private $caminho = "localhost";
	private $banco = "sistema";
	private $con;

	public  function __construct(){

		$this ->con = mysqli_connect($this->caminho,$this ->usuario,$this ->senha) or die ("Conexão com banco de dados falhou!"  . mysqli_error($this ->con));
        mysqli_Select_db($this ->con, $this->banco) or die ("conexão com banco de dados Falhou ".mysqli_error($this ->con));


		}

		public function getCon() {
			return $this ->con;
		}

	}





 ?>