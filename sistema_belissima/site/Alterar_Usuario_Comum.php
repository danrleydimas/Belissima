<?php
 include ("..\Conexao.php");
 include_once ("..\UsuarioDao.class.php");
 include_once ("..\Usuario.class.php");
 $uso = new Usuario();
if (isset($_GET['codigo'])) {
  $codigo =$_GET['codigo'];

  //echo $codigo;
  //var_dump($codigo);
  # code...

}

if (isset($_GET['nome'])) {
  $nome= $_GET['nome'];

  # code...
}


  $cx = new Conexao();

$exe = new  UsuarioDao($cx);


$uso = $exe->buscaUsuario($_GET['codigo']);


if (isset($_POST["btaltera"])){
          $codigo = $_GET['codigo'];
        //  $codigo = $_POST["codigo"];
          $nome = $_POST["nome"];
         // $nivel_Acesso = $_POST["nivel"];
          $email= $_POST["email"];
          $senha = md5($_POST["senha"]); 
          $cidade = $_POST["cidade"];
          $bairro = $_POST["bairro"];
          $endereco = $_POST["endereco"];
          $telefone = $_POST["telefone"];
          $cx = new Conexao();
          $exe = new UsuarioDao($cx);
          $usuarioComum = new Usuario($codigo,$nome,0,$email,$senha,$cidade,$bairro,$endereco,$telefone);
          $exe-> Alte($usuarioComum);





}




  ?>

<?php include("cabecalho-agenda1.php"); ?>

<br>
<br>
<br>
<br>
<br>


<!--<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">-->
<center>
<div class="tudo" style="width: 700px">

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Dados do Usuario</div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" method="POST">
                               
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Erro:</p>
                                    <span></span>
                                </div>

                                <div class="form-group">
      <label for="codigo"></label>
      <input type="hidden" class="form-control" name="codigo" readonly="true" style="width: 90px">
    </div>
                          

                                 <div class="form-group">
                                    <label for="nome" class="col-md-3 control-label">Nome</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nome"  value="<?php echo $uso->GetNome();?>"  required >
                                    </div>
                                </div>                                  
                                <div class="form-group">
                                    <label for="cidade" class="col-md-3 control-label">Cidade</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="cidade" placeholder="nome da sua cidade"  value="<?php echo $uso->GetCidade();?>" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="bairro" class="col-md-3 control-label">Bairro</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="bairro" placeholder="nome do seu bairro" value="<?php echo $uso->GetBairro();?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="endereco" class="col-md-3 control-label">Endereço</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="endereco" placeholder="nome do seu endereço" value="<?php echo $uso->GetEndereco();?>"  >
                                    </div>
                                </div>
                                <div class="form-group">
                                 <label for="telefone" class="col-md-3 control-label">Telefone</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="telefone" placeholder="Ex: 9xxxx-xxxx" value="<?php echo $uso->GetTelefone();?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">E-mail</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email"  placeholder="exemplo@gmail.com" value="<?php echo $uso->GetEmail();?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="senha" class="col-md-3 control-label">Senha</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="senha" placeholder="digite uma senha para acesso" value="<?php echo $uso->GetSenha();?>" required>
                                        
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
                                     <button type="submit" class="btn btn-default" name="btaltera">Alterar</button>
                                       <!-- <button id="btn-signup" type="button" class="btn btn-info" name="btinserir"><i class="icon-hand-right"></i> Cadastrar</button>-->
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <!--<div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Cadastre-se com o Facebook</button>
                                    </div>
                                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="login.php" onclick="$('#signupbox').hide(); $('#loginbox').show()">Voltar à tela de Login <<<</a></div>   -->                                        
                                        
                                </div>         
                            </form>
                         </div>
                    </div>
         </div> 
    </div>

    </div>
    </form>

</center>

<br>
<br>
          <?php include("rodape.php") ?>
</body>
</html>