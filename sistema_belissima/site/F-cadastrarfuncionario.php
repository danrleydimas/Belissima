
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


        if (isset($_POST["btinserir"])){
          $c = new Conexao();
          $valida = new UsuarioDao($c);
         $email =  addslashes($_POST["email"]);

$retorn = $valida->Validando($email);
if( mysqli_num_rows($retorn ) > 0){  echo ("<script>{alert(\" Usuário ja existente \")}</script>");
}
 else{

           $codigo_usuario = $_POST["codigo_usuario"];
           $nome = $_POST["nome"];
           $nivel = $_POST["nivel"];
           $email =  $_POST["email"];
           $senha = md5($_POST["senha"]);
           $conexao = new Conexao();
           $funcionarioDao = new  UsuarioDao($conexao);
           $funcionario = new  Usuario(0,$nome,$nivel,$email,$senha,0,0,0,0);
           $funcionarioDao->Inserir($funcionario);

}

        } 


     


 ?> 


          <form class="form-inline " style="padding: 20PX;" method="POST">
 <div class="form-group">
      <label for="codigo_usuario">ID:</label>
      <input type="nome" class="form-control" name="codigo_usuario" readonly="true" style="width: 90px">
    </div>
   
     <div class="form-group" style="padding: 10PX;">
      <label for="nome">Nome Funcionário:</label>
      <input type="nome" class="form-control" name="nome">
    </div>
    <br>
    <br>
   <div class="form-group">
    <label for="nivel"style="width: 120px" >Nivel de Acesso:</label>
    <select class="form-control" id="c"style="width: 90px"  name="nivel">
      <option>1</option>
      <option>2</option>
     </select>

  </div>

     <div class="form-group" style="padding: 10PX;">
      <label for="email">login:</label>
      <input type="text" class="form-control" name="email">
    </div>
    <br>
    <br>

    <div class="form-group">
      <label for="senha">senha:</label>
      <input type="password" class="form-control" name="senha">
    </div>
    
    <br>
  <br>

     <div class="but">

      <button type="submit" class="btn btn-default" name="btinserir">Cadastrar</button>
     
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
  
  





                        
    <?php include("Rodape.php") ?>
  </body>
  </html>
