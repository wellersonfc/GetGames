<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Get Games - Trabalho de PI</title>

    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/estilo.css" rel="stylesheet">
    <link href="../bootstrap/css/font-awesome.css" rel="stylesheet">
    <link href="../bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script src="../bootstrap/js/javascript.js"></script>

</head>

<body class="body-cat">
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
 	<ul class="nav navbar-nav navbar-right"> 
       <li><a href="#">controle de usuario</a></li>
       <li><a href="#">controle de games</a></li>
       <li><a href="#">dados do sitema</a></li>
       <li class="dropdown">
        	<a class="dropdown-toggle" data-toggle="dropdown" href="">Usuario
        	<span class="caret"></span></a>
        	<ul class="dropdown-menu ">
         	  <div class="row">
                <div class="col-md-11">
                  <li class="dropdown-header"> <a href="verPerfil">
                  <img src="http://placehold.it/150x150" alt="Alternate Text" class="img-responsive"/>
                  </a>
                  <p id="nome">Nomeusuario</p>
                  <p id="email">mail@gmail.com</p>
                  <a href="editarcliente.php" class="buy-btn " id="editar">editar</a>
                  <a href="#" class="buy-btn navbar-right" id="sair">Sair</a></li>
                </div>
              </div>
            </ul>
      	</li>
  	</ul>
	 </div>
<!-- /container -->
    </nav>
<<<<<<< HEAD
    <div class="container-fluid container-recad" >
    	<div class="row">
    		<div class="col-md-4"><img src="../imagens/fifa18p4.jpg" style="width: 613px; height: 100%;"></div>
    		<div class="col-md-7"></div>

    			
  				

</div>
</div>
=======
    <div class="">
    <div class="container" >
    	<div class="row">
    		<div class="col-md-4"><h1 class="panton" style="color: white ; padding-top: 90px;padding-bottom: 50px">Catalogo jogos</h1></div>
      </div>
    </div>
     <div class="container" >
      <div class="row">
        <?php
          for($i=0;$i<18;$i++)
        {
?>
        <div class="col-sm-6 col-md-2" style="padding-top: 40px">
          <div class="thumbnail">
          <div class="text-center">
          <img src="../imagens/fifa18p4.jpg" style="width: 150px; height: 100%;">
          <div class=" text-center">
            <p class="text-cat panton">nome do jogo</p>
          </div>
        </div>
        </div></div>
        <?php } ?>

          
</div>
</div>

<div style="padding-top: 55px">
<section id="cinza" class="section-cinza" >
    <footer>

      <div class="container-footer">
        <a href="index.html">
          <span class="img-logo footer-img"></span>
        </a>

        <div class="container-footer text-center">
          <p class="credits text-center">
            Trabalho PI - UNA CONTAGEM
          </p>
        </div>
      </div>
    z
  </section>
>>>>>>> bf1f294e113b2b86b293f31e57040b2f1233592c
    		
    		
   </body>
       </html>
                                

