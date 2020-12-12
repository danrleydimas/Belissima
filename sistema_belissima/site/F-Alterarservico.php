
<script type="text/javascript">
function somente_txt(par_tecla)
{
   var var_tecla = par_tecla.keyCode ? par_tecla.keyCode : par_tecla.which;
   
   if (var_tecla == 8)
      {return true;}
   
   if (var_tecla == 32)
      {return true;}
   
   if ((var_tecla > 64 && var_tecla < 91) || (var_tecla > 96 && var_tecla < 123))
      {return true;}
  
   if ((var_tecla > 191 && var_tecla < 221) || (var_tecla > 223 && var_tecla < 253))
      {return true;}
   alert("Este campo permite apenas letras minúscula ou maiúsculas");
   return false;
}
</script>

<?php include("cabecalho-servico.php") ?>
<br>
<br>
<br>
<br>
<br>
<center><h3><u>Cadastro de Serviço</u></h3> </center>

<br>


<div id="tudo">

  <br>                         
 <br>


<?php  

  include_once ("../conexao.php");
// include_once ("../ServicoDao.class.php");
 //include_once ("../Servico.class.php");
  include_once ("../Servicos1.php");
  include_once ("../servicoDAL.php");
      
$serv = new ServicoS();

if (isset($_GET["codigo"])){
  $codigo = $_GET["codigo"];
  
//echo "$codigo";
  
  
 $cx = new Conexao();

$exe = new ServicoManter($cx);


$serv = $exe->CarregaServico($_GET['codigo']);
}

if (isset($_POST["btaltera"])){
   $codigo = $_GET['codigo'];
   $descricao = $_POST["descricao"];
   $valor = $_POST["valor"];
   $SobreServico=$_POST["SobreServico"];
   $cx = new Conexao();
   $exe = new ServicoManter($cx);
   $servico = new ServicoS($codigo,$descricao,$valor,$SobreServico);
   $exe->Altera($servico);



}

?>

   

        <form class="form-inline" method="POST" action="#" >

  <div class=" form-group " >
    <label for="codigo_Servico" >Código Serviço:</label>
    <input type="text" class="form-control" name="codigo_Servico"  value="<?php echo $serv->GetCodigo();?>" readonly="true" style="width: 90px">

  </div>
   <div class="form-group">
    <label for="descricao">Nome Serviço:</label>
    <input type="nome" class="form-control" name="descricao"  value="<?php echo $serv->GetNomeServico();?>">
  </div>
  
  <!-- <div class="form-group">
    <label for="tipo">Tipo:</label>
    <input type="text" class="form-control" id="tipo">
  </div>-->
  <div class="form-group">
    <label for="valor">Valor aproximado:</label>
    <input type="text" class="form-control" name="valor"  style="width: 90px"  value="<?php echo $serv->GetPreco();?>">
  </div>
  <br>
  <br>
  <br>
   <label for="valor" style="padding-left: 40px;">Sobre o Serviço:</label>
   <br>
     <div class=" form-group " style="padding-left: 40px;">
  <input type="text" class="form-control" name="SobreServico"  style="width: 650px"  value="<?php echo $serv->GetSobreServico();?>">
 </div>
 
    <br>
    <br>
    <br>
    <br>

   <div class="but">
    <button type="submit" class="btn btn-default" name="btaltera">Alterar</button>
   <!-- <button type="button" class="btn btn-default">Alterar</button>
    <button type="" class="btn btn-default">Limpar</button>
    <button type="button" class="btn btn-default">Cancelar</button>-->
</div>
    

</form>
    

 

<br>
<br>
 </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<div class="rodape">

                      
  <?php include("rodape.php") ?>

  </div>
</body>
</html>
