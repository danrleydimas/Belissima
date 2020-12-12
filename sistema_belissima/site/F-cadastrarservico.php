
<?php include("cabecalho-servico.php") ?>
<br>
<br>
<br>
<br>
<center><h3><u>Cadastro de Serviço</u></h3> </center>

<br>


<div id="tudo">

  <br>                         
 <br>


<?php  

  include_once ("../conexao.php");
  //include_once ("../ServicoDao.class.php");
 // include_once ("../Servico.class.php");
  include_once ("../Servicos1.php");
  include_once ("../servicoDAL.php");
      


//include_once ("..\servicos1.php");
//include_once ("..\conexao.php");
//include_once ("..\servicoDAL.php");


        if (isset($_POST["btinserir"])){
          $codigo_Servico = $_POST["codigo_Servico"];
          $desc= $_POST["descricao"];
          $Val = $_POST["valor"];
          $SobreServico =$_POST["SobreServico"];
          $conexao = new Conexao();
          $servicoDao = new ServicoManter($conexao);
          $servico = new ServicoS(0,$desc,$Val,$SobreServico);
          $servicoDao->Inserir($servico);


        } 
        ?>

   

        <form class="form-inline" method="POST" action="#" >

  <div class=" form-group " >
    <label for="codigo_Servico" style="padding-left: 40px;" >Código Serviço:</label>
    <input type="text" class="form-control" name="codigo_Servico" readonly="true" style="width: 90px">

  </div>
   <div class="form-group">
    <label for="descricao">Nome Serviço:</label>
    <input type="text" required class="form-control" name="descricao">
  </div>
  
  <!-- <div class="form-group">
    <label for="tipo">Tipo:</label>
    <input type="text" class="form-control" id="tipo">
  </div>-->
  <div class="form-group"  >
    <label for="valor">Valor aproximado:</label>
    <input type="NUMBER" max="1000" required class="form-control" name="valor"  style="width: 90px">
  </div>
  <br>
  <br>
   <label for="valor" style="padding-left: 40px;">Sobre o Serviço:</label>
   <br>
     <div class=" form-group " style="padding-left: 40px;">
 <textarea class="form-control" id="SobreServico" name="SobreServico" placeholder="Sobre o Serviço" rows="4" required style="width: 650px"></textarea>
 </div>
    <br>
    <br>
   

   <div class="but">
    <button type="submit" class="btn btn-default" name="btinserir">Cadastrar</button>
   <!-- <button type="button" class="btn btn-default">Alterar</button>
    <button type="" class="btn btn-default">Limpar</button>
    <button type="button" class="btn btn-default">Cancelar</button>-->
</div>
    

</form>
    

 

<br>
<br>
 </div>
<br>


<div class="rodape">

                      
  <?php include("rodape.php") ?>

  </div>
</body>
</html>
