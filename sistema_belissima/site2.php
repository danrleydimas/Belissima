<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  -->
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  /*ABAIXO DO LOGO TEXTO GRANDE ESCRITO BELISSIMA*/
  .jumbotron {
      background-color: #008B8B;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  /*tela login e cadastro*/
  .panel-heading {
      color: #fff !important;
      background-color: #008B8B !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  /*LOGO*/
  .navbar {
      margin-bottom: #008B8B ;
      background-color: ;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">HOME</a></li>
        <li><a href="#services">QUEM SOMOS</a></li>
        <li><a href="#portfolio">FALE CONOSCO</a></li>
        <li><a href="#pricing">SERVIÇOS</a></li>
        <li><a href="#contact">AGENDAMENTO ONLINE</a></li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>B&Eacute;LISSIMA</h1> 
  <p>MELHORES SERVI&Ccedil;OS</p> 
  <form>
<!--
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>-->
  </form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- Container (About Section) -->
<div id="about" class="container-fluid">

<?php  
        if ($_POST){
          include ("..\conexao.class.php");
          include ("..\LoginDao.class.php");

          

         $UsuarioDao = new loginDao();


          $email = addslashes($_POST['email']);
          $senha = addslashes(md5($_POST[ 'senha']));

         $user = $UsuarioDao ->login($senha,$email);

}
       ?>  
<div class="container-fluid">  

        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Bélissima | Login</div>
               <a href="telar_recuperar_senha.php" onClick="$('#loginbox').hide(); $('#signupbox').show()" style="float:right; font-size: 80%; position: relative; top:-10px">
                                            Esqueceu a senha?
                                        </a>
                    </div>     
 
                    <div style="padding-top:30px" class="panel-body" >
 
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="login.php">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="email" type="text" class="form-control" name="email" value="" placeholder="Usuário">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="senha" type="password" class="form-control" name="senha" placeholder="Senha">
                                    </div>
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
 
                                    <div class="col-sm-12 controls">
                                     <button type="submit" class="btn btn-default">Entrar</button>
 
                                    </div>
                                </div>
                           
                          </form> 
                        </div>                     
                    </div>  
        </div>
  
</div>

<br>
<br>
<br>


<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>QUEM SOMOS</h2>
  <h4>NOSSA HISTORIA</h4>
  <br>
  <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong></strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="images/salao.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Guitarist and Lead Vocalist</p>
        <p>Loves long walks on the beach</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong></strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="images/salao2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Drummer</p>
        <p>Loves drummin'</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong></strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="images/salao3.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
  </div>
</div>
 
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>FALE CONOSCO</h2><br>
  <h4>What we have created</h4>



  <h3 class="text-center">Contato</h3>
  <p class="text-center"><em>Deixe sua mensagem</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Nossos dados</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Rua:Perereira Silva</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: 9876-8765</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: salaobelisssima10@outlook.com</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: sistemabelisssima1@gmail.com</p>
    </div>
    <form   method="POST" action="enviar_email.php">
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="Nome" name="Nome" placeholder="Nome" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="Email" name="Email" placeholder="E-mail" type="email" required>
        </div>
      <!--  <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="assunto" placeholder="assunto" type="text" required>
        </div>-->
      </div>
      <textarea class="form-control" id="Mensagem" name="Mensagem" placeholder="Mensagem" rows="5" required></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit" name="Enviar">Enviar</button>
        </div>
      </div>
    </div>
</form>

  </div>
  <br>
  
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">

<div class="container-fluid bg-grey">
<div class="s">
<div class="text-center">
    <h2>SERVIÇOS</h2>
    <h4>TABELA DE NOSSOS SERVIÇOS CONFIRA!</h4>
  </div>
<br>


  <h3>Nossos Preços</h3>
              
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Sobre o serviço</th>
        <th>Preço</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Permanente de Cílios com Tintura </td>
        <td> <p>Os cílios ficam curvados como o efeito do curvex. E com a tintura parece
                        que esta sempre de máscara para cílio. </p>
                        <p> Dura em média dois meses, de acordo com a troca dos pelos.</p></td>
        <td>R$ 85,00</td>
      </tr>
      <tr>
        <td>Designer de Sombrancelha</td>
        <td><p>Não possui processos agressivos ou invasivos, recupera a beleza</p>
                        <p> natural dos fios e proporciona resultados impressionantes. </p></td>
        <td>R$ 35,00</td>
      </tr>
      <tr>
        <td>Depilaçao</td>
        <td>  <p> A partir de R$35, depende do tipo de Depilação escolhida pelo cliente.</p></td>
        <td>R$ 35,00</td>
      </tr>
       <tr>
        <td>Manicure e Pedicure</td>
        <td>  </td>
        <td>R$ 42,00</td>
      </tr>
    </tbody>
  </table>




   <h3>Cortes</h3>
              
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Sobre o serviço</th>
        <th>Preço</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Masculino </td>
        <td> </td>
        <td>A partir R$ 15,00</td>
      </tr>
      <tr>
        <td>Femininos</td>
        <td> <p> Vai depender muito do tamanho e do estilo do cabelo feminino.</p></td>
        <td>A partir R$ 20,00</td>
      </tr>
      
    </tbody>
  </table>

 <h3>Progressiva</h3>
              
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Sobre o serviço</th>
        <th>Preço</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Masculino </td>
        <td> </td>
        <td>A partir 60,00</td>
      </tr>
      <tr>
        <td>Femininos</td>
        <td> </td>
        <td>A partir 100,00</td>
      </tr>
      
    </tbody>
  </table>


  <h3>Descolorir</h3>
              
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Sobre o serviço</th>
        <th>Preço</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Todos os cabelos </td>
        <td> </td>
        <td>A partir R$ 55,00</td>
      </tr>
    
      
    </tbody>
  </table>

  <h3>Depilação</h3>
              
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Sobre o serviço</th>
        <th>Preço</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Marcar um horário para a avaliação </td>
        <td> </td>
        <td>xxxxxxxxx</td>
      </tr>
    
      
    </tbody>
  </table>

</div>

</div>

</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">FAÇA SEU CADASTRO</h2>

<?php  


 include ("..\Conexao.php");
 include_once ("..\UsuarioDao.class.php");
 include_once ("..\Usuario.class.php");
      
//  $senha = md5($_POST["senha"]);

//include_once ("..\servicos1.php");
//include_once ("..\conexao.php");
//include_once ("..\servicoDAL.php");


        if (isset($_POST["btinserir"])){
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
  //         
       
        ?>
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
                                    <label for="cidade" class="col-md-3 control-label">Cidade</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="cidade" placeholder="nome da sua cidade">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="bairro" class="col-md-3 control-label">Bairro</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="bairro" placeholder="nome do seu bairro">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="endereco" class="col-md-3 control-label">Endereço</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="endereco" placeholder="nome do seu endereço">
                                    </div>
                                </div>
                                <div class="form-group">
                                 <label for="telefone" class="col-md-3 control-label">Telefone<sup class="asteristico"><font color="red">*</font></sup></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="telefone" placeholder="Ex: 9xxxx-xxxx" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">E-mail<sup class="asteristico"><font color="red">*</font></sup></label>
                                    <div class="col-md-9">
                                   <!--   <font color="red"><small class="asteristico">Digite um e-mail válido para acesso.</small></font>-->
                                        <input type="text" class="form-control" name="email" placeholder="exemplo@gmail.com"required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="senha" class="col-md-3 control-label">Senha<sup class="asteristico"><font color="red">*</font></sup></label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="senha" placeholder="digite uma senha para acesso" required>
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
                                     <button type="submit" class="btn btn-default" name="btinserir">Cadastrar</button>
                                       <!-- <button id="btn-signup" type="button" class="btn btn-info" name="btinserir"><i class="icon-hand-right"></i> Cadastrar</button>-->
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <!--<div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Cadastre-se com o Facebook</button>
                                    </div>-->
                                 <!--   <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="login.php" onclick="$('#signupbox').hide(); $('#loginbox').show()">Voltar à tela de Login <<<</a></div>-->                                           
                                        
                                </div>         
                            </form>
                         </div>
                    </div>
         </div> 
    </div>

    </div>
    </form>
</center>

</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
