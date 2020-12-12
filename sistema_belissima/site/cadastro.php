<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

</head>
<body>
<?php  


 include ("..\Conexao.php");
 include_once ("..\UsuarioDao.class.php");
 include_once ("..\Usuario.class.php");
      
//  $senha = md5($_POST["senha"]);
 if (isset($_POST["btinserir"])){
 $conexao = new Conexao();
$valida = new UsuarioDao($conexao);
 $email =  addslashes($_POST["email"]);

$retorn = $valida->Validando($email);
if( mysqli_num_rows($retorn ) > 0){  echo ("<script>{alert(\" Usuário ja existente \")}</script>");
}
 else{
         

//include_once ("..\servicos1.php");
//include_once ("..\conexao.php");
//include_once ("..\servicoDAL.php");



       // if (isset($_POST["btinserir"])){
          $nome = $_POST["nome"];
          $nivel_Acesso = $_POST["nivel"];
          $email= $_POST["email"];
          $senha = md5($_POST["senha"]); 
          $cidade = $_POST["cidade"];
          $bairro = $_POST["bairro"];
          $endereco = $_POST["endereco"];
          $telefone = $_POST["telefone"];
          
          
         
          $conexao = new Conexao();
          $InsertUsuarioDao = new UsuarioDao($conexao);
          $CadastroUsuario = new Usuario(0,$nome,$nivel_Acesso,$email,$senha,$cidade,$bairro,$endereco,$telefone);
          $InsertUsuarioDao->Inserir($CadastroUsuario);
}

        } 
       
  //         
       
        ?>
<?php include("cabecalho.php") ?>
<br>
<br>
<br>
<center>
<div class="tudo" style="width: 700px">

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Criar Login</div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" method="POST">
                                <p class="titulo"><font color="red"><small class="asteristico">*Campos Obrigatorios</small></p></font>
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Erro:</p>
                                    <span></span>
                                </div>

                              

                                 <div class="form-group">
                                    <label for="nome" class="col-md-3 control-label">Nome<sup class="asteristico"><font color="red">*</font></sup></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nome" placeholder="digite seu nome" required>
                                    </div>
                                </div>                                  
                                <div class="form-group">
                                    <label for="cidade" class="col-md-3 control-label">Cidade<sup class="asteristico"><font color="red">*</font></sup></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="cidade" placeholder="nome da sua cidade"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="bairro" class="col-md-3 control-label">Bairro<sup class="asteristico"><font color="red">*</font></sup></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="bairro" placeholder="nome do seu bairro"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="endereco" class="col-md-3 control-label">Endereço<sup class="asteristico"><font color="red">*</font></sup></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" maxlength="30" name="endereco" placeholder="nome do seu endereço"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                 <label for="telefone" class="col-md-3 control-label">Telefone<sup class="asteristico"><font color="red">*</font></sup></label>
                                    <div class="col-md-9">
                                        <input type="tel" pattern="^\d{2}\d{9}" minlength="11" maxlength="11" class="form-control" name="telefone" 
                                        placeholder="Ex: 11 9 xxxx-xxxx" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label"  >E-mail<sup class="asteristico"><font color="red">*</font></sup></label>
                                    <div class="col-md-9">
                                   <!--   <font color="red"><small class="asteristico">Digite um e-mail válido para acesso.</small></font>-->
                                        <input type="email"  class="form-control" name="email" placeholder="Ex: joes@gmail.com" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="senha" class="col-md-3 control-label">Senha<sup class="asteristico"><font color="red">*</font></sup></label>
                                    <div class="col-md-9">
                                        <input type="password" minlength="8" maxlength="16" class="form-control" name="senha" placeholder="digite uma senha para acesso" required>
                                        <font color="red"><small class="asteristico">Digite no minimo 8 caracteres e no maximo 16.</small></font>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nivel" class="col-md-3 control-label"></label>
                                    <div class="col-md-9">
                                        <input type="hidden" class="form-control" name="nivel" placeholder="" value="0">
                                    </div>
                                </div>
                               
 
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                     <button type="submit" class="btn btn-default" name="btinserir" id="btinserir">Cadastrar</button>
                                       <!-- <button id="btn-signup" type="button" class="btn btn-info" name="btinserir"><i class="icon-hand-right"></i> Cadastrar</button>-->
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <!--<div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Cadastre-se com o Facebook</button>
                                    </div>-->
                                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="site2.php" onclick="$('#signupbox').hide(); $('#loginbox').show()">Voltar à tela de Login <<<</a></div>                                           
                                        
                                </div>         
                            </form>
                         </div>
                    </div>
         </div> 
    </div>

    </div>
    </form>

</center>
     
     
     
   
     
     
        
<?php include("rodape.php") ?>
</body>
</html>