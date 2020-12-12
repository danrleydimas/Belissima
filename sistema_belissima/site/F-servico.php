<html lang="en">
<head>
  <title>serviço</title>
  <?php 
//include_once ("..\Servico.class.php");
include_once ("..\conexao.php");
//include_once ("..\ServicoDao.class.php"); 
include_once ("../Servicos1.php");
include_once ("../servicoDAL.php");

$cx = new Conexao();
$exe = new ServicoManter($cx);

$resultado = $exe->Seleciona_servico("servico");



?>

<style type="text/css">
  
/*.c{
  max-width: 900px;
  margin-left: 18%;
}*/

</style>
</head>
<body>

<?php include("cabecalho-servico.php") ?>
            <br>        
            <br>        
            <br>        
  <center><h3><u>Serviços</u></h3></center>
  
 <br>
  
<div class="c">
<div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome Serviço</th>
                    <th>Sobre Serviço</th>
                    <th>Valor aproximado</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
    <?php 
//include_once ("..\Servico.class.php");
include_once ("..\conexao.php");
//include_once ("..\ServicoDao.class.php"); 
include_once ("../Servicos1.php");
include_once ("../servicoDAL.php");

 if(isset($_GET['codigo'])){

                  $cx = new Conexao();
                  $exe = new ServicoManter($cx);
                  $servico = new ServicoS();

                 $retorno = $exe->ExcluirServico($_GET["codigo"]);
               
                
                
                  
          
                }
 $valor = "";
if (isset($_POST["pesquisar"])) {

  $valor = $_POST["buscar"];
  //echo $valor;
}  


$cx = new Conexao();
$exe = new  ServicoManter($cx);

$resultado = $exe->Pesquisa($valor);
while ($registro = $resultado->fetch_array()) {
  



?>
               <tr>
                    <td><?php echo $registro["codigo"]; ?></td>
                    <td><?php echo $registro["nome_servico"]; ?></td>
                    <td style="width: 650px"><?php echo $registro["SobreServico"]; ?></td>
                    <td><?php echo $registro["preco"]; ?></td>
                    <td class="actions">
                        
                       <a  class="btn btn-warning btn-xs" href="F-alterarservico.php?codigo=<?php  echo $registro['codigo'];?>">Editar</a>
                        <a class="btn btn-danger btn-xs" onclick="funcao1()" href="F-servico.php?codigo=<?php echo $registro['codigo'];?>" >Excluir</a>
                    </td>
                </tr>
                <?php }
                    ?>  
            </tbody>
         </table>
 
     </div>
 </div> <!-- /#list -->
<!--
 <div id="bottom" class="row">
    <div class="col-md-12">
         
        <ul class="pagination">
            <li class="disabled"><a>&lt; Anterior</a></li>
            <li class="disabled"><a>1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
        </ul><!-- /.pagination -->
 
   <!-- </div>
</div> <!-- /#bottom -->
<!--
</div>-->

  <!--
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Código do serviço</th>
        <th>Nome Serviço</th>
        <th>Tipo Serviço</th>
         <th>valor</th>
         <th>Alterar</th>
       
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
         <td></td>
        
          <td>
          <center>
        <a href="#"><img src="imagens\images.jpg"></a>
        <a href="#"><img src="imagens\download.jpg"></a>
        </center>
          </td>
         
        
        
      </tr>
     
    </tbody>
  </table>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
-->
 
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
<!--<div class="btfunc">

    <button type="button" class="btn btn-default">Voltar</button>

    </div>-->

  

<div class="rodape">

  <?php include("rodape.php") ?>

  </div>