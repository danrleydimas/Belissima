  
<html lang="en">
<head> 
<?php    
include_once("..\conexao.php");
include_once("..\agendamento.php");
include_once("..\AgendaDAL.php");
include_once("..\usuario.class.php");
include_once("..\LoginDao.class.php");

 
      if (isset($_GET["codigo"])){ 
        $codigo = $_GET["codigo"];
         
  }      
 
   
//else  {//header("location:B-login2.php" , "echo . 'Preencha os campos corretamente'");
   //  echo ("<script>{alert(\" Agendamento não disponível \")}</script>");

    // 

   // die( "<script>{alert(\" preencha os campos corretamente \")}</script>" . mysql_error());  //echo ("<script>{alert(\" Os dados do cliente nao foi encontrado\")}</script>");

//}
  
  
if(isset($_GET["nome"])){

  $nome = $_GET["nome"];

}          
     ?>   
   
  <title>Bélissima</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- Incluindo o CSS do Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <!-- Incluindo o JavaScript do Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- importar css -->
    <link rel="stylesheet" href="estilorestantes" type="text/css">  
</head>
<body>

<div class="cabe">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">


      

    </div>
    <ul class="nav navbar-nav">
      <img src="imagens/logo6.jpg"> </a>
       <li><a href="B-belissima">Home</a></li>
      <li><a href="B-Faleconosco.php">Fale conosco</a></li>
      <li><a href="B-quem_somos.php">Quem Somos</a></li>
      <li><a href="B-promocoes.php">Promoções</a></li>
      <li><a href="B-servicos.php">Serviços</a></li>
      <li><a href="B-cadastro.php">Agendamento online</a></li>
          
    </ul>
    <!--  <ul class="nav navbar-nav navbar-right">
      <li><a href="B-cadastro.php"><span class="glyphicon glyphicon-user"></span> Cadastrar</a></li>
  <li><a href="B-login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li></ul>-->
 <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="#">Perfil</a></li>-->
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="Alterar_Usuario_Comum.php?codigo=<?php echo $codigo ?>">Olá... !!! <?php echo $nome;?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Alterar_Usuario_Comum.php?codigo=<?php echo $codigo ?>">alterar</a></li>
          <li><a href="B-belissima.php">Sair</a></li>

  </div>
</nav>
</div>                     
                        <center><h3><u>Faça seu Agendamento</u></h3> </center>
                        <br>
                        <br>
         
                     <form method="POST" >
                     <div id="tudo">
                     <br>
           
        <div class="form-inline">
        <div class="form-group">  
        <?php
               $conexao = new Conexao();
               $DALl = new AgendaDAL($conexao);

               $resultado = $DALl->Busca_situacao();

               while ($registro = $resultado->fetch_array()) {
  
    ?>


    <input type="hidden" name="situacao" id="situacao" value="<?php echo $registro["codigo_Situacao"];?>"> </input>
    <?php } ?>

     <?php 

             if(isset($_POST["btinserir"])){
                 
            
             $conexao = new Conexao();
             $DALl = new AgendaDAL($conexao); 
             $servico = $_POST["codigo_servico"]; 
             $data =  addslashes($_POST["data"]);
             $hora = addslashes($_POST["hora"]);
             $search =  $DALl->Buscar($data,$hora);          //mysql_query("SELECT * FROM atendimento WHERE datas = '$data' AND hora = '$hora'");
         // var_dump($search);
if( mysqli_num_rows($search ) > 1){
echo ("<script>{alert(\" Agendamento não disponível \")}</script>");
           
}else{
                $situacao = $_POST["situacao"];             
                $servico = $_POST["codigo_servico"]; 
                $data = $_POST["data"];
                $hora = $_POST["hora"];
                $conexao = new Conexao();
                $DALl = new AgendaDAL($conexao);
                $agenda = new Agendamento(0,$data,$codigo,$hora,$servico,$situacao);
         //  $a = $DALl->Buscar($data,$hora); 
          // if(mysql_num_rows($a)==0) {
                $DALl->Inserir_a($agenda); 
  
        if($_POST['data'] != '' && $_POST['hora'] != ''   ){
             echo ("<script>{alert(\"Cadastro  efetuado com sucesso! \")}</script>");
           }
           else{

echo ("<script>{alert(\" Todos os campos são obrigatorios  \")}</script>");
}
           }
//faz inserção
//$sql = mysql_query("INSERT INTO tabela3 (nome,titulo) VALUES ('$nome','$titulo') ");
//}            
         
}
?>
         
           
          <label class="control-label" for="codigo">Código do Cliente:</label>  
          <input id="codigo" name="codigo" type="text"  class="form-control" readonly="true" style="width: 90px"
           value="<?php echo $codigo ?>">
      </div>

            </div>
          <br>
          </div>
          <br>
          <div id="tudo">
               
                  <br>
                  <div class="form-inline">                     
                  <div class="form-group">    
                  <label class="control-label" for="nome">Nome do cliente:</label>  
                  <input id="nome" name="textinput" type="text"  class="form-control" readonly="true" style="width: 280px" value="<?php echo $nome ?>" >
          </div>
                      
      </div>
      <br>
      </div>
                                  <br>
                                  <div id="tudo">
                                  <br>
  
  <?php
  include_once ("..\servicos1.php");
  include_once ("..\conexao.php");
  include_once ("..\servicoDAL.php"); 

  $cx = new Conexao();
  $exe = new ServicoManter($cx);
?>

  
    <div class="form-inline">
    <label for="codigo_servico" style="width: 120px">Tipo do Serviço:</label>
    <select name="codigo_servico" id="codigo_servico">

    <?php   $resultado = $exe->Seleciona_servico("servico");

    while ($registro = $resultado->fetch_array()) {
 
?>
    
    <option value="<?php  echo $registro["codigo"];?>"><b><?php echo $registro["nome_servico"];?></b></option>
     <?php }
               
                    ?>                   

    </select>
  </div>
                                   <br>
                                   <br>
                                 <!--  input type="date" required="required" maxlength="10" name="date" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2012-01-01" max="2014-02-18" />-->                         
           
                  <div class="form-inline">
                       <label for="data"style="width: 120px">data do Serviço:</label>
                          
                           <input type="date" required maxlength="10" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2017-06-22" name="data" id="data">                    
                            </div>                                  
                                  <br>
                                  <br>
                                  <br>
                                    <div class="horas">
                                <div class="panel panel-default" style="width:200px; top:50px; position: absolute;">
    <div class="panel-body" style="top: 100px;"> <center><label>Horas disponiveis</label></center><hr/> 

    <div class="form-inline" style="width:20px; ">
    <label for="hora" style=" width: 120px;position: absolute; top: 63px;">horas:</label>
    <select class="form-control" id="hora" name="hora" style="width: 120px;">
    <center>
    <option>09:00 </option>
    <option>10:00 </option>
    <option>11:00 </option>
    <option>12:00 </option>
    <option>13:00 </option>
    <option>14:00 </option>
    <option>15:00 </option>
    <option>16:00 </option>
    <option>17:00 </option>
    <option>18:00 </option>
    </center>
    </select>

  
  </div>
</div>

    </div>
    </div>
        <br>

      <div class="but">
      <button type="SUBMIT"  class="btn btn-default" name="btinserir" id="btinserir">Cadastrar</button>
      
     <a  class="btn btn-warning btn-xs" style="color: white; border: none;background-color: white;" href="B-historico.php?codigo=<?php echo $codigo ?>" > 
      <button type="button"   class="btn btn-default" value="">Histórico</button> </a>
      <button type="RESET" class="btn btn-default">Limpar</button>
      <button type="button" onclick="location.href = 'B-belissima.php'" class="btn btn-default">Sair</button>

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
  <?php include("cabecalho-belissima\Rodape.php") ?>
  </body>
  </html>
