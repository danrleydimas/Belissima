<?php 
//include_once ("..\Servico.class.php");
include_once ("..\conexao.php");
include_once ("..\LoginDao.class.php"); 
include_once ("..\Usuario.class.php"); 

 if (isset($_GET['nome'])) {
  $nome= $_GET['nome'];

  # code...
  //echo $nome;
}

if (isset($_GET['codigo'])) {
  $codigo= $_GET['codigo'];
  # code...
 // echo $codigo;
}




?> 

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
  <!--<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  -->
  -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
  
       <!-- Incluindo o CSS do Bootstrap -->
     <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap -->
       <script src="http://code.jquery.com/jquery-latest.js"></script>


      <!-- Incluindo o JavaScript do Bootstrap -->
        <script src="js/bootstrap.min.js"></script>

        <!-- importar css -->
         
 <link rel="stylesheet" href="estilorestante" type="text/css">
 

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
        <li><a href="F-UsuarioN1.php">HOME</a></li>
        <li><a href="F-historicoUsuario2.php">DADOS DOS USUÁRIOS</a></li>
        <li><a href="F-historico.php">AGENDAMENTOS</a></li>
        <li><a href="site2.php">SAIR</a></li>
   
       <!-- <li><a href="#contact">CADASTRAR-SE</a></li>-->
        
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>B&Eacute;LISSIMA</h1> 
  <h3>MELHORES SERVI&Ccedil;OS</h3> 
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

