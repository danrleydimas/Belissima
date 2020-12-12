<?PHP
class Agendamento{
	private $codigo_agendamento;
	private $data;
	private $hora;
	private $codigo_a;
	private $codigo_b;
    private $situacao;

	function __construct($codigo_agendamento = 0,$data = "", $codigo_a = 0, $hora="",$codigo_b= 0,$situacao = 0){
	$this->SetCodigo_agendamento($codigo_agendamento);
	$this->SetData($data);
	$this->SetCodigo_a($codigo_a);
	$this->SetHora($hora);
	$this->SetCodigo_b($codigo_b);
	$this->SetSituacao($situacao);
}
	public function SetSituacao($valor){
	$this->situacao = $valor;
}
public function GetSituacao(){
	return $this-> situacao;
}



	public function SetCodigo_agendamento($valor){
	$this->codigo_agendamento = $valor;
}
public function GetCodigo_agendamento(){
	return $this-> codigo_agendamento;
}


public function SetData($valor){
	$this->data = $valor;
}
public function GetData(){
	return $this-> data;
}

public function SetHora($valor){
	$this->hora = $valor;
}
public function GetHora(){
	return $this-> hora;
}
public function SetCodigo_a($valor){
	$this->codigo_a = $valor;
}
public function GetCodigo_a(){
	return $this-> codigo_a;
}
public function SetCodigo_b($valor){
	$this->codigo_b = $valor;
}
public function GetCodigo_b(){
	return $this-> codigo_b;
}
	
	
}

?>