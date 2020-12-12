
  <html lang="en">
  <title>cadastrar-Funcionário</title>
  <head>
  
  <body>

  <?php include("cabecalho-funcionario.php")  ?>

  <br>
  <br>

  <center><h3><u>Cadastro de Funcionário</u></h3> </center>

  <br>


  <div id="tudo">

    <br>                         
   <br>
  
<?php
include_once ("..\Usuario.class.php");
include_once ("..\conexao.php");
include_once ("..\UsuarioDao.class.php");


      
$func = new Usuario();

if (isset($_GET["codigo_Usuario"])){
  $codigo = $_GET["codigo_Usuario"];
  
//echo "$codigo";
  
  
 $cx = new Conexao();

$exe = new UsuarioDao($cx);


$func = $exe->CarregaUsuario($_GET['codigo_Usuario']);
}


        if (isset($_POST["btAlterar"])){
         
           $codigo= $_GET["codigo_Usuario"];
           $nome = $_POST["nome"];
           $nivel = $_POST["nivel"];
           $email =  $_POST["email"];
           $senha =md5($_POST["senha"]);
           $conexao = new Conexao();
           $funcionarioDao = new  UsuarioDao($conexao);
           $funcionario = new  Usuario( $codigo,$nome,$nivel,$email,$senha,0,0,0,0);
           $funcionarioDao->Alterar($funcionario);



        } 


     


 ?> 


          <form class="form-inline" method="POST" style="padding: 20PX;">

   <div class="form-group" >
      <label for="codigo_Usuario">ID:</label>
      <input type="text" class="form-control" name="codigo_Usuario"  value="<?php echo $func->GetCodigo_Usuario();?>" readonly="true" style="width: 90px">
    </div>
     <div class="form-group" style="padding: 10PX;">
      <label for="nome">Nome Funcionário:</label>
      <input type="nome" class="form-control" name="nome" value="<?php echo $func->GetNome();?>">
    </div>
    <br>
    <br>

<div class="form-group">
      <label for="nivel">Nivel:</label>
       <select class="form-control" id="c"style="width: 90px" name="nivel" value="<?php echo $func->GetEmail();?>"> >
      <option >1</option>
      <option >2</option>
      
     </select>
     </div>
 <!--     <input type="nome" class="form-control" name="nivel" value="<?php echo $func->GetEmail();?>" >
    </div>


   <div class="form-group">
    <label for="cargo"style="width: 120px" >Nivel de Acesso:</label>
    <select class="form-control" id="c"style="width: 90px"  name="cargo" value="<?php echo $func->GetNivel();?>">
      <option>1</option>
      <option>2</option>
     </select>

  </div>-->

     <div class="form-group">
      <label for="email" style="padding: 5PX;">login:</label>
      <input type="text" class="form-control" name="email" value="<?php echo $func->GetNivel();?>">
    </div>
    <br>
    <br>

    <div class="form-group">
      <label for="senha">senha:</label>
      <input type="password" class="form-control" name="senha" value="<?php echo $func->GetSenha();?>">
    </div>
    
    <br>
  <br>

     <div class="but">

      <button type="submit" class="btn btn-default" name="btAlterar">Alterar</button>
     
      <button type="reset" class="btn btn-default">Limpar</button>
     
  </div>
  </form>
   
                      
        
       <!--name="codigoC"-->

      

   

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
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>





                        
    <?php include("Rodape.php") ?>
  </body>
  </html>
