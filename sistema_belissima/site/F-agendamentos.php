
<html lang="en">
<head>
  <title>agendamentos</title>
  <style type="text/css">
  
  
  .c{
  max-width: 1000px;
  margin-left: 18%;
 /* background-color: #DCDCDC;
  border: 1px solid;*/
  
}
</style>
</head>
<body>


<?php
 include_once("../conexao.php");
 include_once("../agendaDal.php");

 include_once("cabecalho-func-agenda.php"); 

      if (isset($_POST['excluir'])){

     
$cx = new Conexao();
$exe = new AgendaDAL($cx);

                 $retorno = $exe->ExcluirAgenda($_POST['excluir']);
}

 ?>

<br>
<br>
<br>
<br>
<center><h3>Agendamentos</h3></center>
  <br>
  <br>
  <br>
    <div class="">         
  <div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome cliente</th>
                    

                    <th>Serviço</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Situação</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
            <form method="POST">

          
<?php


 if(isset($_POST["concluir"])){
   # code...
  
  $codigo = $_POST["concluir"];
    $situacao = $_POST["situacao"];
     $cx = new Conexao();
     $exe = new AgendaDAL($cx);
      $agenda = new Agendamento($codigo,0,0,0,0,$situacao);


    $exe->Alterar_situacao($agenda);

}
$cx = new Conexao();
                  $exe = new AgendaDAL($cx);
 

    $resultado = $exe->Busca_situacao2();

    while ($registro = $resultado->fetch_array()) {
  

 ?>

            <input type="hidden" name="situacao" id="situacao" value="<?php echo $registro["codigo_Situacao"];?>">
            <?php } ?>
 <?php
   $valor = "";
if (isset($_POST["pesquisar"])) {

  $valor = $_POST["buscar"];
  //echo $valor;
}  


 $cx = new Conexao();
$exe = new AgendaDAL($cx);
 

$resultado = $exe->Busca_usuario($valor);
while ($registro = $resultado->fetch_array()) {
  

 ?>
                <tr>
                

                    <td><?php echo $registro["codigo_Usuario"]; ?></td>
                    <!--<td> <?php //echo $age->GetCodigo_a();?> </td>-->
                  <td><?php echo $registro["nome"];?></td>
                
                    <td><?php echo $registro["nome_servico"];?></td>
                    
                    <td><?php echo $registro["datas"];?> </td>
                    <td><?php echo $registro["horas"];?></td>
                    
                    <td><?php echo $registro["descricao"];?></td>
                      <?php $codigo = $registro["codigo_atendimento"];  
                             $si = $registro["descricao"]; 
                           $codigo_s = $registro["codigo_Situacao"];
                           ?>
                    <td class="actions">
                      <button  name="excluir" id="excluir " class="btn btn-danger btn-xs"  value="<?php echo $registro["codigo_atendimento"]; ?>" >Excluir</button>

                    

                    <?php
                     if ($registro["codigo_Situacao"] == 1)  {
      # code...
    ?> 
                        
                        <a class="btn btn-warning btn-xs"  href="<?php echo "B-agendaAlterar2.php?codigo=$codigo&situacao=$codigo_s";?>">Editar</a>

                         <button  name="concluir" id="concluir" class="btn btn-danger btn-xs" style="background-color: green; border-color: green ; "
                           value="<?php echo $registro["codigo_atendimento"];?>">Concluir</button>

                       <?php } ?>
                  
                        
                       
                      
                       

                       <!-- <a href="excluir.php?id='.$x[id].'&mes='.$x[mes].'"> -->
                         
                    </td>
                </tr>
                  <?php }
                    ?> 

            </form>

                
 
            </tbody>
         </table>
 
     </div>
 </div> <!-- /#list -->
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
 
   <!-- </div>
</div> <!-- /#bottom -->
</div>
    
   
   
    
       

    
    
<!--
    <div class="btfunc">

    <button type="button" class="btn btn-default">Voltar</button>

    </div>-->


    







<?php  include("rodape.php") ?>
</body>
</html>