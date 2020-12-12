
<html>
<head>
	<title>histórico</title>
  <style type="text/css">
    /*.c{
  max-width: 1000px;
  margin-left: 10%;*/
  </style>
 
  </head>
  <body>

		<?php 
          include_once("..\agendaDAL.php");
          include_once("..\conexao.php");
          include_once("..\agendamento.php");
          

      if (isset($_GET['codigo'])){

        $codigo = $_GET['codigo'];
 
      }
     if (isset($_POST['excluir'])){

     
$cx = new Conexao();
$exe = new AgendaDAL($cx);

                 $retorno = $exe->ExcluirAgenda($_POST['excluir']);


//$resultado = $exe->Seleciona_Agenda("cod");

}


     ?>
                    
    <?php include("cabecalho-agenda1.php"); ?>   

    <br>          
    <br>          
    <br>          
  <center><h3>Agendamentos</h3></center>
  <br>
  <br>
  <br>

 <div class="c">     

  <div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>ID</th>
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
   $valor = "";
if (isset($_POST["pesquisar"])) {

  $valor = $_POST["buscar2"];
  //echo $valor;
}  


 $cx = new Conexao();
$exe = new AgendaDAL($cx);

$resultado = $exe->Seleciona_Agenda($codigo,$valor);

while ($registro = $resultado->fetch_array()) {
  

 ?>
                <tr>
                    <td><?php echo $registro["codigo_atendimento"]; ?></td>
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
                        
                        <a class="btn btn-warning btn-xs"  href="<?php echo "B-agendaAlterar1.php?codigo=$codigo&situacao=$codigo_s";?>">Editar</a>
                       <?php } ?>
                  
                   
                       
                       
                       <!-- <a href="excluir.php?id='.$x[id].'&mes='.$x[mes].'"> -->
                         
                    </td>
                </tr>
                  <?php }
                    ?> 


               <!--  <tr>
                    <td></td>
                  
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="actions">
                        
                        <a class="btn btn-warning btn-xs" href="B-agenda.php">Editar</a>
                        <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                    </td>
                </tr> -->


                
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
 
 <!--   </div>
</div> <!-- /#bottom -->

    <br>
     <br>
    <br>
    
       
</div>
    
<!--
    <div class="btfunc">

    <button type="button" class="btn btn-default">Voltar</button>

    </div>-->

<?php include("Rodape.php") ?>
</body>
</html>