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
    <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
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
  


  <div class="row">
    <div class="container" >
    	<div class="row" style="background-color: white; margin-top: 100px;">
    		<div class="col-sm-12">
            <div class="col-sm-3 " style="padding-top: 40px">
              <h2 class="fontb">Meus jogos</h2>
            </div>
            <div class="col-sm-9 " style="padding-top: 50px;">
              <button type="button" class="btn btn-primary " style="float: right;">Adicionar Jogos</button>
            </div> 
            <div class="col-sm-12 container-info">
            <?php
            session_start(); 
            $idusus = intval($_SESSION['idGlobal']);
            $query2 = "SELECT jogosclientes.idjogos FROM jogosclientes WHERE jogosclientes.idcliente = '$idusus'";
            $dados1 = mysqli_query($conexao, $query2);
            while ($exibe1 = mysqli_fetch_assoc($dados1)) {

            $idj = intval($exibe1['idjogos']);
            $query3 = "SELECT `idJogos`, `nome`, `anolancamento`, `descricao`, `imgJogo`, `desenvolvedor_jogo` FROM `jogos` WHERE jogos.idJogos =' $idj'";
              $dados3 = mysqli_query($conexao, $query3);
              while ($exibe2 = mysqli_fetch_assoc($dados3)) {

             ?>

            <div class="col-sm-6 col-md-2" style="padding-top: 10px">
             <div class="thumbnail">
              <div class="text-center">
                <img src="../admin/imagens/<?php echo $exibe2['imgJogo']?>" style="width: 150px; height: 100%;">
                <div class=" text-center">
                <p class="text-cat panton"><?php echo $exibe2['nome']?></p>
                <a href="../controller/retirarjogos.php?id=<?php echo $exibe2['idJogos'];?>"><button type="button" class="btn btn-danger">retirar</button></a>
                </div>
              </div>
            </div>
          </div>
           <?php 



                }
           } 
            ?>
        </div>
          </div></div>
</div>
</div>
</div>

<div style="padding-top: 55px">
 
    


    		
    		
   </body>
       </html>
                                

