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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script src="../bootstrap/js/javascript.js"></script>
    <style>
   .bg-page
{
    background-image: url('../imagens/bg-cat.jpg');
    background-repeat: no-repeat;
    background-size:100%;
    bottom: 0;
    color: black;
    left: 0;
    overflow: auto;
    padding: 3em;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;
    background-size: cover;
}
</style>

</head>

<body >
  <div class="bg-page">
<nav class="navbar navbar-relative navbar-inverse navbar-transparente" style="margin: -42px">
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
  
      <div class="row "  margin-top: 100px;">
<!-- /container -->
    <?php
      
      $b = intval($_GET['id']);
              $query = "SELECT * FROM `jogos` WHERE idJogos = '$b'";
              $dados = mysqli_query($conexao, $query);
              $resu = mysqli_fetch_assoc($dados);
    ?>
    <div class="container-fluid container-info" >
    	<div class="row">
    		<div class="col-sm-offset-2 col-sm-8 grad" style="margin-top: 60px;">
          <h1 class="navbar-right font"><?php echo  $resu['nome']?></h1>
    		<div class="col-sm-5 text-center">
    			<img src="../admin/imagens/<?php echo  $resu['imgJogo']?>" style="width: 300px; height: 100%;" class="img-responsive ">
          <h4>Desenvolvedor: <small><?php echo  $resu['desenvolvedor_jogo']?></small><h4>
          <h4>Data de lançamento: <small><?php echo  $resu['anolancamento']?></small><h4>
    		</div>
    		<div class="col-sm-6">
    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240037.675804748!2d-44.332391420999265!3d-19.941730475969987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6c24a5fb01f9b%3A0xdae51d9facff118f!2sBetim%2C+MG!5e0!3m2!1spt-BR!2sbr!4v1509799813673" frameborder="0" style="border:0" class="map  " allowfullscreen></iframe>
    			</div>
            <div class="col-sm-12">
            <div class="box-body">
               <div class="table-responsive">
              <table id="example2" class="table table-bordered dt-responsive table-striped">
                <thead>
                <tr>
                  <th>Nome</th>
                  <th>Telefone</th>
                  <th>Whatsapp</th>
                  <th>Cep</th>
                  <th>Estado</th>
                  <th>Cidade</th>
                  <th>Bairro</th>
                </tr>
                </thead>
                <tbody>
                <?php

                $vai = "SELECT jogosclientes.idcliente FROM `jogosclientes` WHERE jogosclientes.idjogos = '$b'";
                  $vaivai = mysqli_query($conexao, $vai);
                  while ($exibe1 = mysqli_fetch_assoc($vaivai)) {
                    $v = intval($exibe1['idcliente']);

                          $vai1 = "SELECT * FROM `cliente` WHERE cliente.idCliente = '$v'";
                          $vaivai1 = mysqli_query($conexao, $vai1);
                          while ($exibe11 = mysqli_fetch_assoc($vaivai1)) {
                ?>
                <tr>
                  <td><?php echo $exibe11['nomeCliente']?></td>
                  <td><?php echo $exibe11['telefone']?></td>
                  <td><?php echo $exibe11['whatsapp']?></td>
                  <td><?php echo $exibe11[ 'cep']?> </td>
                  <td><?php echo $exibe11[ 'uf']?> </td>
                  <td><?php echo $exibe11[ 'cidade']?> </td>
                  <td><?php echo $exibe11[ 'bairro']?> </td>
                </tr>

              <?php
                    }
                 }


              ?>
               
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
    		
   </body>
       </html>
                                

