<!DOCTYPE html>
<html>
<head>
<style type="text/css">
  .calendario{
    margin-top: 10%;
    position: absolute;
    margin-left: 60px;
  }

     
</style>
	<title></title>
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

    //die( "<script>{alert(\" preencha os campos corretamente \")}</script>" . mysql_error());  //echo ("<script>{alert(\" Os dados do cliente nao foi encontrado\")}</script>");

//}
  
  
if(isset($_GET["nome"])){

  $nome = $_GET["nome"];

}          
     ?>   
</head>
<body>
<?php include("cabecalho-agenda.php"); ?>

     <br>
     <br>
     <br>

                       
                        <br>
                        <br>
         
                     <form method="POST" >
                     <div  class="panel panel-info">
                      <div class="panel-heading">
                            <div class="panel-title"><center>Faça seu Agendamento</center></div>
                        </div>  
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
        
          <label class="control-label" for="codigo" style="padding-left: 40px;">Código do Cliente:</label>  
          <input id="codigo" name="codigo" type="text"  class="form-control" readonly="true" style="width: 90px"
           value="<?php echo $codigo ?>">
      </div>

            </div>
          <br>
        <!--  </div>-->
       
        <!--  <div  class="panel panel-info">-->
               
                  <br>
                  <div class="form-inline">                     
                  <div class="form-group" style="padding-left: 40px;">    
                  <label class="control-label" for="nome">Nome do cliente:</label>  
                  <input id="nome" name="textinput" type="text"  class="form-control" readonly="true" style="width: 500px" value="<?php echo $nome ?>" >
          </div>
                      
      </div>
      <br>
     <!-- </div>-->
                                  <br>
                              <!--    <div  class="panel panel-info">-->

                              
  
  <?php
  include_once ("..\servicos1.php");
  include_once ("..\conexao.php");
  include_once ("..\servicoDAL.php"); 

  $cx = new Conexao();
  $exe = new ServicoManter($cx);
?>

  
    <div class="form-inline">
    <label for="codigo_servico" style="width: 150px;padding-left: 95px;" >Serviço:</label>
    <select name="codigo_servico" id="codigo_servico" class="form-control" style="width: 500px">

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
                       <label for="data" style="width: 150px;padding-left: 40px;">Data do Serviço:</label>
                          
                           <input type="date" required maxlength="10" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2017-06-14" name="data" id="data" class="form-control">                    
                            </div>                                  
                                  <br>
                                 

    <div class="form-inline" >
    <label for="hora" style="padding-left: 109px;" >Horas:</label>
    <select class="form-control" id="hora" name="hora"  >

    <?php  

  $cx = new Conexao();
  $exe = new AgendaDAL($cx);
  $resultado = $exe->busca_hora();

    while ($registro = $resultado->fetch_array()) {
?>   
    <option value="<?php  echo $registro["codigo_hora"];?>"><b><?php echo $registro["horas"];?></b></option>
     <?php }    ?>    
   
    </select>  
  </div>


   
        <br>

      <div class="but">
      <button type="SUBMIT"  class="btn btn-default" name="btinserir" id="btinserir">Cadastrar</button>
      
     <a  class="btn btn-warning btn-xs" style="color: white; border: none;background-color: white;" href="historico.php?codigo=<?php echo $codigo ?>" > 
      <button type="button"   class="btn btn-default" value="">Histórico</button> </a>
     <!-- <button type="RESET" class="btn btn-default">Limpar</button>-->
      <button type="button" onclick="location.href = 'site2.php'" class="btn btn-default">Sair</button>

      </div>
    
       <br>
      <br>    
</div>
</div>
</form>
<?php include("rodape.php"); ?>
</body>
</html>