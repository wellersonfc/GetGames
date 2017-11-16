<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GetGames</title>

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/estilo.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
   .bg-page
{
    background-image: url('../imagens/stars.jpg');
    background-repeat: no-repeat;
    background-size:100%;
    bottom: 0;
    color: purple;
    left: 0;
    overflow: auto;
    padding: 3em;
    
    right: 0;
    text-align: center;
    top: 0;
    background-size: cover;
}
</style>

</head>

<body >
<div class="bg-page">
<nav class="navbar navbar-relative navbar-inverse navbar-transparente" style="margin: -43px; margin-bottom: 30px; ">
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
    <div class="col-sm-6 col-sm-offset-3 text-center" style="padding-top: 120px;padding-bottom: 60px;">

    	<h1 class="fontb text-home">Sinta se à vontade para explorar</h1>
    	<h5 class="fontb text-home">Veja aqui as possibilidades que aguardam, como amante dos jogos você terá acesso a uma infinidade de jogos multiplataforma. Cadastre, busque, conheça as novidades interagindo com a plataforma e aproveite nossas pechinchas</h5>
    	

    </div>
    <div class="col-sm-8 col-sm-offset-2">

   <img class="img-responsive" src="../imagens/screen.png" >

    </div>
   
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

   



</body>

</html>