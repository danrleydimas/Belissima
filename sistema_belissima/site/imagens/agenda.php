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
 
   
else  {//header("location:B-login2.php" , "echo . 'Preencha os campos corretamente'");
   //  echo ("<script>{alert(\" Agendamento não disponível \")}</script>");

    // 

    die( "<script>{alert(\" preencha os campos corretamente \")}</script>" . mysql_error());  //echo ("<script>{alert(\" Os dados do cliente nao foi encontrado\")}</script>");

}
  
  
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
     <div class="calendario">
   
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
var day_of_week = new Array('Dom','Seg','Ter','Qua','Qui','Sex','Sab');
var month_of_year = new Array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');

var Calendar = new Date();

var year = Calendar.getYear();      // Retorna o ano
var month = Calendar.getMonth();    // Retorna mes (0-11)
var today = Calendar.getDate();    // Retorna dias (1-31)
var weekday = Calendar.getDay();    // Retorna dias (1-31)

var DAYS_OF_WEEK = 7;    // "constant" para o numero de dias na semana
var DAYS_OF_MONTH = 31;    // "constant" para o numero de dias no mes
var cal;    // Usado para imprimir na tela

Calendar.setDate(1);    // Comecar o calendario no dia '1'
Calendar.setMonth(month);    // Comecar o calendario com o mes atual


var TR_start = '<TR>';
var TR_end = '</TR>';
var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=20><B><CENTER>';
var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
var TD_start = '<TD WIDTH="30"><CENTER>';
var TD_end = '</CENTER></TD>';

cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=BBBBBB><TR><TD>';
cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#EFEFEF"><CENTER><B>';
cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
cal += TR_start;

for(index=0; index < DAYS_OF_WEEK; index++)
{

if(weekday == index)
cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;
else
cal += TD_start + day_of_week[index] + TD_end;
}

cal += TD_end + TR_end;
cal += TR_start;

for(index=0; index < Calendar.getDay(); index++)
cal += TD_start + '  ' + TD_end;

for(index=0; index < DAYS_OF_MONTH; index++)
{
if( Calendar.getDate() > index )
{
  week_day =Calendar.getDay();
  if(week_day == 0)
  cal += TR_start;
  if(week_day != DAYS_OF_WEEK)
  {
  var day  = Calendar.getDate();
  if( today==Calendar.getDate() )
  cal += highlight_start + day + highlight_end + TD_end;
  else
  cal += TD_start + day + TD_end;
  }
  if(week_day == DAYS_OF_WEEK)
  cal += TR_end;
  }
  Calendar.setDate(Calendar.getDate()+1);
}
cal += '</TD></TR></TABLE></TABLE>';

//  MOSTRAR CALENDARIO
document.write(cal);
//  End -->
</SCRIPT>
</div>
                        <center><h1>Faça seu Agendamento</h1> </center>
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
         
        
          <label class="control-label" for="codigo" >Código do Cliente:</label>  
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
                  <div class="form-group" panddign="40px">    
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
    <label for="codigo_servico" style="width: 120px"  padding-left="80px";> Serviço:</label>
    <select name="codigo_servico" id="codigo_servico" class="form-control">

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
                          
                           <input type="date" required maxlength="10" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2017-05-05" name="data" id="data" class="form-control">                    
                            </div>                                  
                                  <br>
                                  <br>
                                  <br>
                                    <div class="horas">
                               
    <div class="panel-body" style="top: 100px;"> <center><label>Horas disponiveis</label></center><hr/> 

    <div class="form-inline" style="width:20px; ">
    <label for="hora" style=" width: 120px;position: absolute; top: 63px;">Horas:</label>
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

   \\
    </div>
        <br>

      <div class="but">
      <button type="SUBMIT" onclick="location.href= 'B-agenda.php'" class="btn btn-default" name="btinserir" id="btinserir">Cadastrar</button>
      
     <a  class="btn btn-warning btn-xs" style="color: white; border: none;background-color: white;" href="historico.php?codigo=<?php echo $codigo ?>" > 
      <button type="button"   class="btn btn-default" value="">Histórico</button> </a>
      <button type="RESET" class="btn btn-default">Limpar</button>
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