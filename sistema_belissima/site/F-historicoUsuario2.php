<html lang="en">
<head>
  <title>Dados dos clientes</title>
  <?php 
//include_once ("..\Servico.class.php");
include_once("..\conexao.php");
//include_once ("..\ServicoDao.class.php"); 
include_once("..\Usuario.class.php");
include_once("..\UsuarioDao.class.php");




?>

<style type="text/css">
  
.c{
  max-width: 900px;
  margin-left: 18%;
}

</style>
</head>
<body>

<?php include("cabecalho-UsuarioN1.php") ?>
            <br>        
            <br>        
            <br>        
  <center><h3><u>Lista de Clientes</u></h3></center>
  
 <br>
  
<div class="">
<div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do cliente</th>
                    <th>Email</th>
                    <th>Cidade</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                  <!--  <th class="actions">Ações</th> -->
                 </tr>
            </thead>
            <tbody>
   <?php 
if (isset($_GET["codigo"])) {
  $c = new Conexao();
  $e = new UsuarioDao($c);
  $e->ExcluirUsuario($_GET["codigo"]);
  # code...
}
 $valor = "";
if (isset($_POST["pesquisar"])) {

  $valor = $_POST["buscar"];
  //echo $valor;
}  


$cx = new Conexao();
$exe = new  UsuarioDao($cx);


$resultado = $exe->SelecionaUsuario($valor);

while ($registro = $resultado->fetch_array()) {
  



?>
                <tr>
                    <td><?php echo $registro["codigo_Usuario"]; ?></td>
                    <td><?php echo $registro["nome"]; ?></td>
                    <td><?php echo $registro["email"]; ?></td>
                    <td><?php echo $registro["cidade"]; ?></td>
                    <TD><?php echo $registro["telefone"];?></td>
                    <td><?php echo $registro["endereco"]; ?></td>
                    <td><?php echo $registro["bairro"]; ?></td>
                  <!--  <td class="actions">
                        
                       <a  class="btn btn-warning btn-xs" href="Alterar_Usuario_Comum.php?codigo=<?php // echo $registro['codigo_Usuario'];?>">Editar</a>
                        <a class="btn btn-danger btn-xs" onclick="funcao1()" href="F-historicoUsuario.php?codigo=<?php //echo $registro['codigo_Usuario'];?>" >Excluir</a>
                    </td>-->
                </tr>
                <?php }
                    ?>  
            </tbody>
         </table>
 
     </div>
 </div> <!-- /#list -->

 

</div>

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