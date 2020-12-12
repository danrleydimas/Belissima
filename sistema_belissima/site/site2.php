<?php  


        if ($_POST){
          include ("..\conexao.class.php");
          include ("..\LoginDao.class.php");

          

         $UsuarioDao = new loginDao();


          $email = addslashes($_POST['email']);
          $senha = addslashes(md5($_POST[ 'senha']));

         $user = $UsuarioDao ->login($senha,$email);

 // session_start();

//if (isset($_SESSION['nivel_Acesso'])) {
  //echo 'bem vindo '.$_SESSION['nivel_Acesso'].'-administrador';
         // header("location: F-empreza.php");


//}else if(isset($_SESSION['nor'])){

//}else{
  //header("location: B-login.php");
//}

         // if ($user == true){
           // while ($percorrer = mysqli_fetch_array($user)){
             // $nivel = $percorrer['nivel_Acesso'];
              //if ($nivel == 1) {

             //   echo "usuario administrador";
                # code...
             // }
            //  else{

            //    echo "usuario comum";
           //   }

          //  }
          //  session_start();
            //$_SESSION['Email'] = $email;
           // $_SESSION['senha'] = $senha;

            // header("location: B-agenda.php");

      //    }else {
          //header("location: B-login.php?erro=senha");
        //    include_once("alertaLogin.html");
        //  }

}
       ?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
       <!-- Incluindo o CSS do Bootstrap -->
     <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap -->
       <script src="http://code.jquery.com/jquery-latest.js"></script>


      <!-- Incluindo o JavaScript do Bootstrap -->
        <script src="js/bootstrap.min.js"></script>

        <!-- importar css -->
        <link rel="stylesheet" href="estilorestantes.css" type="text/css">  
  <!--
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
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
      background-color: #FFDAB9;
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
      background-color:   #F08080 !important;
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
      margin-bottom: 0;
      background-color: #F08080;
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
        <li><a href="#about">ENTRAR</a></li>
        <li><a href="#services">QUEM SOMOS</a></li>
        <li><a href="#portfolio">FALE CONOSCO</a></li>
        <li><a href="#pricing">SERVIÇOS</a></li>
       <!-- <li><a href="#contact">CADASTRAR-SE</a></li>-->
        
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
<div class="row">
    <div class="col-sm-8">
      <h2>O salão de Beleza BÉLISSIMA oferece para você</h2><br>
      <h4>Cuidar da aparência é fundamental. Por isso o Salão de Beleza BÉLISSIMA está sempre pronto para lhe atender.</h4> Cortes de cabelo, masculino ou feminino. Tinturas, reflexos e penteados. Manicuri e Pedicuri. Cuidados pessoais são fundamentais. </p>Por isso prefira sempre o Salão de Beleza BÉLISSIMA. Rua Do Comércio, em frente ao Silva Materiais de Construção. Faça seu cadastro e marque seu atendimento. Salão de beleza é BÉLISSIMA.<br>
      <p>
      <br>
    </div>
    <div class="col-sm-4">
     <img src="images/salao2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
    <!--  <span class="glyphicon glyphicon-signal logo"></span>-->
    </div>
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


<!-- Container (About Section) -->
<div id="about" class="container-fluid " >

<div class="container-fluid">  

        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Bélissima | Login</div>
               <a href="recuperar_senha.php" onClick="$('#loginbox').hide(); $('#signupbox').show()" style="float:right; font-size: 80%; position: relative; top:-10px">
                                            Esqueceu a senha?
                                        </a>
                    </div>     
 
                    <div style="padding-top:30px" class="panel-body" >
 
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="POST" >
                                    
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
 
 
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Não tem uma conta! 
                                        <a href="cadastro.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Crie uma agora.
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                           
                          </form> 
                        </div>                     
                    </div>  
        </div>


<!--


<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">


                  
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Digite seu E-mail válido para recuperação de senha.<br><br> <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" ></div>Recuperar Senha.</div>
                    </div>     
 
                    <div style="padding-top:30px" class="panel-body" >
 
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="POST">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="email" type="text" class="form-control" name="email" value="" placeholder="Digite seu E-mail" required>                                        
                                    </div>
 
 
                                <div style="margin-top:10px" class="form-group">

                                 <div class="col-sm-12 controls">
                                     <button type="submit" class="btn btn-default">Recuperar senha</button>
 
                                    </div>
                                    <!-- Button 
 
                                    <div class="col-sm-12 controls">
                                      <a id="btn-login" href="#" class="btn btn-success">Recuperar senha  </a>
                                
                                    </div>-
                                </div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Voltar à tela de Login <<<</a></div>         </div> 

                    
                            </form>     
                        </div>                     
                    </div>  -->
        </div>


  <!--<div class="row">
    <div class="col-sm-8">
      <h2>About Company Page</h2><br>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>-->
</div>

<br>
<br>
<br>


<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>QUEM SOMOS</h2>
  <!--<h4>NOSSA HISTORIA</h4>-->
  <br>
  <p>Atuando em São Paulo desde 1974, nome, nascido no Rio de Janeiro, começou a trabalhar aos 14 anos. Sempre foi um líder na classe dos salões de beleza. Fez vários cursos de cabeleireiro e daí em diante não parou mais. Descobriu sua verdadeira fonte de prazer: Cabelos; e é isso que move sua vida, a arte de criar, transformar. Apaixonado pelo que faz, Rezende é muito dinâmico.

Sua formação profissional se destaca pelos vários cursos que fez, recebeu vários prêmios, entre eles a Tesoura de Ouro. Em busca de constante atualização profissional, nome participa todos os anos dos maiores cursos e feiras de beleza. O salão conta com uma equipe de profissionais altamente qualificada que completa o quadro.

Estamos em constante renovação, seguindo as tendências e sempre em busca do novo, para trazer para você o que há de melhor.   Se você vai casar, não deixe de conhecer as salas que preparamos com muito carinho para esse dia tão especial.</p>
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
 <!-- <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>-->
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>FALE CONOSCO</h2><br>
  


  <h3 class="text-center">Contato</h3>
  <p class="text-center"><em>Deixe sua mensagem</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Nossos dados</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Rua:Pereira Silva</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: 9876-8765</p>
<!--<p><span class="glyphicon glyphicon-envelope"></span>Email: salaobelisssima10@outlook.com</p>-->
      <p><span class="glyphicon glyphicon-envelope"></span>Email: sistemabelissima1@gmail.com</p>
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
  


  <!--<div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
   <!-- <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
   <!-- <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>-->
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
     <?php 
//include_once ("..\Servico.class.php");
include_once ("../conexao.php");
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
        <td style="width: 450px"><?php echo $registro["nome_servico"]; ?> </td>
        <td ><?php echo $registro["SobreServico"]; ?> </td>
        <td>R$<?php echo $registro["preco"]; ?> </td>
      </tr>
      <?php  }?>
     </tbody>
     </table>

  

</div>

</div>
<!--  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Lorem</p>
          <p><strong>15</strong> Ipsum</p>
          <p><strong>5</strong> Dolor</p>
          <p><strong>2</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Lorem</p>
          <p><strong>25</strong> Ipsum</p>
          <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Lorem</p>
          <p><strong>50</strong> Ipsum</p>
          <p><strong>25</strong> Dolor</p>
          <p><strong>10</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>-->
</div>

<!-- Container (Contact Section) 
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">FAÇA SEU CADASTRO</h2>-->
  


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>©Copyright 2017. Todos os direitos reservados a Bélissima. <a href="https://www.w3schools.com" title="Visit w3schools">www.belissima.com</a></p>
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

