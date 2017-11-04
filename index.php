<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Get Games - Trabalho de PI</title>

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/estilo.css" rel="stylesheet">
  <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
  <link href="bootstrap/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>


  <nav class="navbar navbar-relative navbar-inverse navbar-transparente">
    <div class="container">


      <div class="navbar-header">


        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
          <span class="sr-only">alternar navegação</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a href="index.html" class="navbar-brand">
          <span class="img-logo">Get Games</span>
        </a>

      </div>

      <div class="collapse navbar-collapse" id="barra-navegacao">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="view/login.php">
              <spam class="img-login">Login</span>
            </a>
          </li>
          <li>
            <a href="view/cadastrar.php">
              <span class="img-cadastrar">Cadastrar</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- /container -->
  </nav>
  <!-- /nav -->

  <div class="row capa">

    <div class="col-md-7">
      <div class="img-index">
        <img class="img-responsive img-capa" src="imagens/imagemIndex.png">
      </div>
    </div>

    <div class="col-md-5">
      <div>
        <h1 class="txt-alinharh1">TROCAR OU COMPRAR? </h1>
        <h3 class="txt-alinharh3">A QUALQUER HORA EM QUALQUER LUGAR</h3>
        <a href="">
          <img class="img-saiba img-responsive" src="imagens/saiba.png" />
        </a>
      </div>
    </div>
  </div>

  <!-- Section cinza -->
  <section id="cinza" class="section-cinza">
    <div class="container content-section text-center section-cinza-text">
      <div class="col-md-12 text-center">
        <h1 class="section-cinza-text">JOGOS ADICIONADOS RECENTEMENTE</h1>
        <h4>ULTIMOS JOGOS CADASTRADOS PARA COMPRA E VENDA</h4>
      </div>

      <div class="row img-recentes">
        <div class="col-md-4">
          <img class="img-responsive img-recentes-img1" src="imagens/zelda.png">
        </div>
        <div class="col-md-4">
          <img class="img-responsive img-recentes-img2" src="imagens/pes.png">
        </div>
        <div class="col-md-4">
          <img class="img-responsive img-recentes-img3" src="imagens/d2.png">
        </div>
      </div>


    </div>
  </section>

  <section id="cinzaEscuro" class="section-cinzaEscuro">
    <div class="container content-section text-center section-cinzaEscuro-text">
      <div class="col-md-12 text-center">
        <h1 class="section-cinzaEscuro-text">Lorem Ipsum é simplesmente uma simulação </h1>
        <p class="txt-p">
          Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o
          século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de
          modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica,
          permanecendo essencialmente inalterado.
        </p>

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>