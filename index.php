<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GetGames Trabalho de pi</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/index.css" rel="stylesheet">
    <link href="bootstrap/css/base.css" rel="stylesheet">
    
        <meta charset="utf-8">
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Autoplay usage demo">
    <meta name="author" content="David Deutsch">

      <!--Carosel-->
      <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
      <script src="assets/vendors/jquery.min.js"></script>
      <script src="assets/owlcarousel/owl.carousel.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
  </head>
  <body style="position: relative; min-height: 100%; top: 0px;">
    <!--nav-->
    <nav class="navbar navbar-relative navbar-inverse navbar-transparente">
        <!--container-->
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
              <span class="sr-only">alternar navegação</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">
              <span class="img-logo">GetGames</span>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="barra-navegacao">
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="view/login.php">
                  <span class="img-login">Login</span>
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

    <!--header-->
    <header>
      <div class="container">
        <div class="col-md-5 text-center">
          <img class="img-responsive " style="display:inline" src="imagens/imagemIndex.png" >
        </div>
        <div class="col-md-7 text-center " >
            <h1 class="capa-txt" style="padding-top: 110px"><b>QUER VENDER, TROCAR OU COMPRAR JOGOS USADOS? </b></h1>
            <h3 class="capa-txt" ></h3>
        </div>
      </div>  
    </header>
    <!--/header-->

    <!-- Sobre nois-->
    <section id="sobrenos">
        <div class="container">
          <div class="text-center">
            <div>
            <!--Texto Campo-->
            <h2 class="mg-t30 mg-b50"><b>QUEM SOMOS</b></h2>
            <p>Somos a equipe GetGames responsavel pela plataforma que veio facilitar sua vida jogador
            <br>Com obejetivo de ajudar você a se livrar dos  elevados e da  pirataria dos jogos
            <br>Quero posibilidade de Trocar, Comprar e Vender  de Jogos Usados. </p>
            
            <!--Slider-->
            <div class="mg-t30" >
              <div class="owl-carousel owl-theme">
                <div class="item">
                      <h4>
                        <img class="image-responsive img-fluid full-img imgresp" src="imagens/grupo/diego.png">
                      </h4>
                  </div>
                  <div class="item">
                      <h4>
                        <img class="image-responsive img-fluid full-img imgresp" src="imagens/grupo/lucas.png">
                      </h4>
                  </div>
                  <div class="item">
                      <h4>
                        <img class="image-responsive img-fluid full-img imgresp" src="imagens/grupo/leticia.png">
                      </h4>
                 </div>
                <div class="item">
                      <h4>
                        <img class="image-responsive img-fluid full-img imgresp" src="imagens/grupo/wellerson.png">
                      </h4>
                 </div>
                 <div class="item">
                      <h4>
                        <img class="image-responsive img-fluid full-img imgresp" src="imagens/grupo/izavela.png">
                      </h4>
                 </div>
                 <div class="item">
                      <h4>
                        <img class="image-responsive img-fluid full-img imgresp" height="100%" src="imagens/grupo/giovani.png">
                      </h4>
                 </div>
                 <div class="item">
                      <h4>
                        <img class="image-responsive img-fluid full-img imgresp" height="100%" src="imagens/grupo/funchal.png">
                      </h4>
                 </div>
                </div>
            <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive:{
              0:{
                items:1
              },
              600:{
                items:1,
              },
              768:{
                items:2,
              },
              1000:{
                items:4
              }
            }

              });
              $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
            })
          </script>
            </div>

          </div>
          <br><br>
    </div>
  </div>
    </section>
    <!-- /Sobre nois-->

    <!-- Troca e vendas-->
    <section id="vantagens">
      <div class="container" style="background: black(0.5);">
         <h1 class="mg-t30 text-center"> <b>VANTAGENS<b></h1>
         <div class="row mg-t30">
           <div class="col-sm-6 col-xs-12 text-justify ">
            <img class=" image-responsive img-fluid full-img imgresp"  src="imagensindex/mante.png" width="100%" style="margin-top: -70px;" />
           </div>
           <div class="col-sm-6 col-xs-12 text-center">
             <i class="fa fa-chevron-down" aria-hidden="true"></i><h3>Vendas e Compras<h3>
              <p class="mg-t30">Encontre Jogadores perto de você afim de comprar seus jogos usados, alem de você tambem poder comprar.</p>
             <i class="fa fa-chevron-down" aria-hidden="true"></i><h3>Trocas<h3>
              <p class="mg-b50 mg-t30">Tenha a posibilidade de trocar seus jogos com segurança podendo almentar sua lista de games jogados.</p>
           </div>
         </div>
      </div>
    </section>
    <!-- /Section cinza -->

    <!-- Sistema-->
    <section id="sistema">
        <div class="container">
            <div class="row mg-t30">
              <div class="text-center">
                    <h1 class="mg-t30"><b>SISTEMA GETGAMES</b></h1><br>
                    <div class="col-sm-6 col-xs-12 text-center">
                      <img class=" image-responsive img-fluid full-img  mg-t30 mg-b50" style="width:80%" src="imagensindex/sistema.png" width="100%" style="margin-top: -70px;" />
                    </div>
                    <div class="col-sm-6 col-xs-12 text-center">
                      <h3 class="fontb text-home mg-t30">Sinta se à vontade para explorar</h3>
                      <P class="mg-t30">Veja aqui as possibilidades que aguardam, como amante dos jogos você terá acesso a uma infinidade de jogos multiplataforma. Cadastre, busque, conheça as novidades interagindo com a plataforma e aproveite nossas pechinchas</P>
                    </div>
              </div>
            </div>
        </div>
    </section>
    <!-- /sistema-->

    <!--Footer-->
    <footer id="footer">
          <div>
          <div class="container">
          <p class="credits text-center mg-t30 mg-b10">
            Trabalho PI - UNA CONTAGEM - GetGames
          </p>
        </div>
      </div>

    </footer>
    <!--Footer-->

    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>