
<html lang="en">
<head>
  <title>lista de Funcionários</title>
  <?php 
include_once ("..\Usuario.class.php");
include_once ("..\conexao.php");
include_once ("..\UsuarioDao.class.php");


$cx = new Conexao();
$exe = new  UsuarioDao($cx);

$resultado = $exe->Selecionaf("func");



?>
<style type="text/css">
  
  
 /* .c{
  max-width: 900px;
  margin-left: 18%;
}
*/

</style>
</head>
<body>
<?php include("cabecalho-funcionario.php") ?>

    <br>                
    <br>                
    <br>                
    <br>                
  <center><h3><u>Lista de Usuários</u></h3></center>
  
 <br>
  <br>
  <br>
     
<div class="c">

<div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Funcionário</th>
                    <th>nivel de Acesso</th>
                     <th>Login</th>
                   <!-- <th>senha</th>-->
                   
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
 <?php 

//include_once ("..\Funcionario.class.php");
//include_once ("..\conexao.php");
//include_once ("..\FuncioanarioDao.class.php"); 
include_once ("..\Usuario.class.php");
include_once ("..\conexao.php");
include_once ("..\UsuarioDao.class.php");


if(isset($_GET['codigo_Usuario'])){

                  $cx = new Conexao();
                  $exe = new UsuarioDao($cx);
                  $servico = new Usuario();

                 $retorno = $exe->ExcluirUsuario($_GET["codigo_Usuario"]);
               
                
                
                  
          
                }
 
 $valor = "";
if (isset($_POST["pesquisar"])) {

  $valor = $_POST["buscar"];
  //echo $valor;
}  


$cx = new Conexao();
$exe = new  UsuarioDao ($cx);

$resultado = $exe->Selecionaf($valor);
while ($registro = $resultado->fetch_array()) {
  
 



?>
                <tr>
                    <td><?php echo $registro["codigo_Usuario"]; ?></td>
                    <td><?php echo $registro["nome"]; ?></td>
                    <td><?php echo $registro["nivel_Acesso"]; ?></td>
                    <td><?php echo $registro["email"]; ?></td>
                  <!--  <td><?php echo $registro["senha"]; ?></td>-->
                    <td class="actions">
                        
                        <a class="btn btn-warning btn-xs"  href="F-editar_funcionario.php?codigo_Usuario=<?php  echo $registro['codigo_Usuario'];?>">Editar</a>
                        <a class="btn btn-danger btn-xs" onclick="funcao1()" href="F-funcionario.php?codigo_Usuario=<?php echo $registro['codigo_Usuario'];?>">Excluir</a>
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
 
  <!--  </div>
</div> <!-- /#bottom -->

</div>

<!---


  <table border="1" class="table table-bordered">
  <thead>
    <tr>
      <th style="width: 50px">Código</th>
      <th>Nome Funcionário</th>
      <th>Setor</th>
      <th>Cargo</th>
      <th>Selecione</th>
    </tr>

  </thead>

  <tbody>
    <tr>
      <td><br></td>
      <td></td>
      <td></td>
      <td></td>
      <td><a href="" class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil"></span> Editar
</a></td>
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


    <div class="btfunc">
    <button type="button" class="btn btn-default">Voltar</button>
</div>
    


    
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


<!--
<div class="btfunc">

    <button type="button" class="btn btn-default">Voltar</button>

    </div>-->
<br>
   <br>
   




 <?php include("Rodape.php") ?>
</body>
</html>