<!DOCTYPE html>
<?php require '../model/conector.php';?>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Get Games - Trabalho de PI</title>

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/estilo.css" rel="stylesheet">
     <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script src="../bootstrap/js/javascript.js"></script>

</head>

<body style="background-color: #151515">
<nav class="navbar navbar-relative navbar-inverse navbar-transparente">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">alternar navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
   
   
      <img src="../imagens/logo.png" alt="getgames" width="50%" height="auto" style="margin-left: 20px; margin-top: 5px; float: center; display: inline-block;">
    </div>
  
     <div class="collapse navbar-collapse" id="barra-navegacao">   
    <!-- /container -->
    <?php include 'menu.php';?>
 </div>
</div>
<!-- /container -->
</nav>
    <div class="container-fluid container-info" >
    	<div class="row">
        <div class="col-md-2"></div>
    		<div class="col-md-8">
            <div class="col-md-12" style="background-color: white; padding: 25px">
              <div class="table-responsive">
              <table id="example2" class="table  table-striped text-center">
                <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
              <?php
                //for para rodar caracteriscata game
              $query = "SELECT * FROM `jogos`";
              $dados = mysqli_query($conexao, $query);
              $resu = mysqli_fetch_assoc($dados);
              while ($exibe = mysqli_fetch_assoc($dados)) {
              ?>
                
                <tr>
                  <td>
                      <img src="../admin/imagens/<?php  echo $exibe['imgJogo'] ?>"  style="width: 100px;">
                  </td>
                  <td class="text-center">
                    <?php echo $exibe['nome']?>
                  </td>
                  <td>
                    <?php
                        $valor = intval($exibe['idJogos']);
                        $query2 = "SELECT jogoscategoria.idCategoria FROM jogoscategoria WHERE idJogos = '$valor'";
                        $dados1 = mysqli_query($conexao, $query2);
                          while ($exibe1 = mysqli_fetch_assoc($dados1)) {
                            
                            $valor2 = intval($exibe1['idCategoria']);

                              $querycategoria= "SELECT * FROM `categoria` WHERE idCategoria = $valor2";
                                 $categoria = mysqli_query($conexao, $querycategoria);
                                 while ($exibe3 = mysqli_fetch_assoc($categoria)) {

                                    echo utf8_encode($exibe3['nomeCategoria']);
                                     echo "<br>"; 
                                      
                                 }
                            }
                    ?>
                  </td>
                  <td>
                  </td>
                  <td>
                    <?php
                        $valor = intval($exibe['idJogos']);
                        $query2 = "SELECT idPlataforma FROM `jogosplataforma` WHERE  idJogos = '$valor'";
                        $dados1 = mysqli_query($conexao, $query2);
                          while ($exibe1 = mysqli_fetch_assoc($dados1)) {
                            
                            $valor2 = intval($exibe1['idPlataforma']);

                              $querycategoria= "SELECT * FROM `plataforma` WHERE idPlataformas = '$valor2'";
                                 $categoria = mysqli_query($conexao, $querycategoria);
                                 while ($exibe3 = mysqli_fetch_assoc($categoria)) {

                                    echo utf8_encode($exibe3['nome']);
                                     echo "<br>"; 
                                      
                                 }
                            }
                    ?>
                  </td>
                  <td>
                    <a href="../view/infojogo.php?id=<?php echo $exibe['idJogos'];?>"><button class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Tenho Interesse</button></a><br>
                  </td>
                  <td>
                    <a href="../controller/colecao.php?id=<?php echo $exibe['idJogos'];?>"><button class="btn btn-warning"><i class="fa fa-plus" aria-hidden="true"></i>Adicionar à Minha Coleção</button></a>
                  </td>
                </tr>
              <?php } ?>

      
              </table>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
  				

</div>
</div>

<!-- jQuery 3 -->
<script src="../bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bootstrap/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bootstrap/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bootstrap/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bootstrap/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../bootstrap/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../bootstrap/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example2').DataTable()
   
  })
</script>
<script type="text/javascript">
  $("#imagem").bind('mouseover',function(){
    
     $(this).animate({height:"200px",width:"200px"});
   
});
$("#imagem").bind('mouseout',function(){
    
       $(this).animate({height:"76px",width:"75px"});
      
});
</script>
    		
   </body>
       </html>
                                

