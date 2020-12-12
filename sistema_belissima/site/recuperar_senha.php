<!--<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <style type="text/css">
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
  
 
  
  /*LOGO*/

  /*CABECALHO*/
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
  /*LETRAS DO CABECALHO*/
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  /*CABECALHO MUDAR TELA EFEITO*/
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }

  /* TELA DE RECUPERAR SENHA EMAGEM EM FRENTE DO INPUT*/
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  /*RODAPE*/
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  
  

  </style>
</head>
<body>
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
        <li><a href="#contact">CADASTRAR-SE</a></li>
        
      </ul>
    </div>
  </div>
</nav>-->

 <?php  
        if ($_POST){
          include ("..\conexao.class.php");
          include ("..\Enviar_nova_senha.php");

         $loginDao = new loginDao();


          $email = addslashes($_POST['email']);
        //  $senha = addslashes($_POST[ 'senha']);

         $user = $loginDao ->login($email);
     }
         ?>
<?php include("cabecalho.php") ?>
<div class="container-fluid">  

        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
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
                                
                                    </div>-->
                                </div>
 
                            
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            recuperou! 
                                        <a href="site2.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            voltar ao login.
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     
 
 
 
                        </div>                     
                    </div>  
        </div>
        </div>
        <?php include("rodape.php") ?>
   <!--  <footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>©Copyright 2017. Todos os direitos reservados a Bélissima.<a href="https://www.w3schools.com" title="Visit w3schools">www.belissima.com</a></p>
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
</html>-->