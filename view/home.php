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

</head>

<body class="home-body">


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
        <a class="dropdown-toggle" data-toggle="dropdown" href="editarcliente.php">Usuario
        <span class="caret"></span></a>
        <ul class="dropdown-menu ">
          <div class="row">
                            <div class="col-md-12">
          <li class="dropdown-header"> <a href="verPerfil">
          <img src="http://placehold.it/120x120" alt="Alternate Text" class="img-responsive"/>
                </a>
            <p id="nome">Nomeusuario</p>
            <p id="email">mail@gmail.com</p>
             <a href="" class="buy-btn " id="sair">Sair</a></li>
         </div>
         </div>
         </ul>
      </li>
  </ul>
 </div>
<!-- /container -->
    </nav>
    <!-- /nav -->
    <div class="capa-home">

        <div class="capa-txt">
            <h1 class="capa-txt-h1">Cos’è Lorem Ipsum?</h1>
            <p class="capa-txt-p">
                Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo
                segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri
                e li assemblò per preparare un testo campione.
            </p>

        </div>
    </div>

    <section id="cinza" class="section-cinza container-lista">
        <h2>Mais Populares</h2>
        <div class="container content-section  section-cinza-text">
            <h2>Mais Populares Playstation 4</h2>
            <div class="cointainer-text">
                <div class="flex-container"></div>
                <div class="flex-container">
                    <div class="items">
                        <img class="image" src="../imagens/what.jpg" alt="" />
                        <img class="image" src="../imagens/cry.jpg" alt="" />
                        <img class="image" src="../imagens/gta.jpg" alt="" />
                        <img class="image" src="../imagens/division.jpg" alt="" />
                        <img class="image" src="../imagens/rainbow.jpg" alt="" />
                        <img class="image" src="../imagens/crew.jpg" alt="" />

                    </div>

                </div>

                <h2>Mais Populares Xbox One</h2>
                <div class="cointainer-text">
                    <div class="flex-container"></div>
                    <div class="flex-container">
                        <div class="items">
                            <img class="image" src="../imagens/wd2.jpg" alt="" />
                            <img class="image" src="../imagens/six.jpg" alt="" />
                            <img class="image" src="../imagens/tom.jpg" alt="" />
                            <img class="image" src="../imagens/lego.jpg" alt="" />
                            <img class="image" src="../imagens/fight.jpg" alt="" />
                            <img class="image" src="../imagens/sindicate.jpg" alt="" />

                        </div>

                    </div>
                </div>
            </div>
    </section>

    <!-- Footer -->
    <section id="cinza" class="section-cinza">
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
        </footer>

    </section>



    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <script src="js/index.js"></script>


</body>

</html>