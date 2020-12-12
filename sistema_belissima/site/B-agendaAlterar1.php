    
  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
   
     
  </head>
  <body>

  <?php
   include("cabecalho-agenda1.php"); 

  include_once ("..\agendamento.php");
  include_once ("..\conexao.php");
  include_once ("..\agendaDal.php");
  $age = new Agendamento();

  if (isset($_GET["codigo"])){
  $codigo = $_GET["codigo"];
        
  $cx = new Conexao();
  $exe = new  AgendaDAL($cx);


  $age = $exe->CarregaAgenda($_GET['codigo']);
  }

  if (isset($_POST["btaltera"])){

        $conexao = new Conexao();
        $DALl = new AgendaDAL($conexao);

        $servico = $_POST["codigo_servico"]; 
        $data =  addslashes($_POST["data"]);
        $hora = addslashes($_POST["hora"]);
        $search =  $DALl->Buscar($data,$hora);          //mysql_query("SELECT * FROM atendimento WHERE datas = '$data' AND hora = '$hora'");
           // var_dump($search);
  if ( mysqli_num_rows($search ) > 1){
  echo ("<script>{alert(\" Agendamento não disponível \")}</script>");
             
  }else{
        $situacao = $_GET['situacao'];
        $codigo = $_GET['codigo'];
        $data = $_POST["data"];
        $hora = $_POST["hora"];
        $codigo_servico = $_POST["codigo_servico"];
        $cx = new Conexao();
        $exe = new AgendaDAL($cx);
        $agenda = new agendamento($codigo,$data,0,$hora,$codigo_servico,$situacao);
        $exe->Alterar_agenda($agenda);

    }
  }


   ?>                 
<center><h3><u>Faça seu Agendamento</u></h3> </center>
    <br>
    <br>  
    <br>
<form id="form" name="form" method="POST"  >
    <br>
<center>
<div class="tudo" style="width: 700px">

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Alterar Agenda</div>
                        </div>  
    <br>                               
    <br>
    <br>
<?php
  include_once ("..\servicos1.php");
  include_once ("..\conexao.php");
  include_once ("..\servicoDAL.php"); 

  $cx = new Conexao();
  $exe = new AgendaDAL($cx);
  $a = new ServicoManter($cx);

  ?>

    <div class="form-inline">

    <?php   $resultado = $exe->Carre($codigo);
    while ($registro = $resultado->fetch_array()) { 
  ?> 
    <label class="control-label" for="">Serviço cadastrado:</label>
    <input id="" name="" type="text" style="width: 300px;" class="form-control" readonly="true"  value="<?php echo $registro["nome_servico"];?>">
       <?php } ?> 
    </div>
                  <br>
                  <br>
  <div class="form-inline" ">
      <label for="codigo_servico" > Escolha o serviço: </label>
      <select class="form-control" id="codigo_servico" style="width: 300px;" name="codigo_servico" id="codigo_servico">
       <?php   $resul = $a->Seleciona_servico($servico);
       while ($regi = $resul->fetch_array()) { ?>

      <option value="<?php echo $regi["codigo"];?>"><b><?php echo $regi["nome_servico"];?></b></option>
                    
  <?php } ?>
      </select>
    </div>
                  <br>
                  <br>
    <div class="form-inline">
    <label for="data" >Data do Serviço:</label>
    <input type="date" style="width: 300px;" required maxlength="10" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2017-06-28" id="data" name="data" class="form-control" value="<?php echo $age->GetData();?>" >
    </div>
                  <br>
    
    <div class="form-inline" style="margin-left:-25%;" >
    <label for="hora">Horas:</label>
    <select class="form-control" id="hora"  name="hora" ">
   
    <option><?php echo $age->GetHora();?></option>
    <?php  

       $cx = new Conexao();
       $exe = new AgendaDAL($cx);
       $resultado = $exe->busca_hora();
       while ($registro = $resultado->fetch_array()) {  ?>
      
       <option value="<?php  echo $registro["codigo_hora"];?>"><b><?php echo $registro["horas"];?></b></option>
    <?php } ?>  
   
    </select>
    </div>
         <br>
         <br>
         <br>
    
  <center>
        <button type="SUBMIT" class="btn btn-default" name="btaltera" id="btaltera">Alterar</button>
        <button type="button" onclick="location.href = 'historico.php'" class="btn btn-default">Sair</button>
  </center>
   <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <!--<div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Cadastre-se com o Facebook</button>
                                    </div>-->
                                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Voltar ao histórico <<<</a></div>                                           
                                        
                                </div>  
        <br>
        <br>
      
  </div>
  </div>
  </form>

        <br>
        <br>
        <br>
        <br>
        <br>
    <?php include("rodape.php") ?>
    </body>
    </html>
