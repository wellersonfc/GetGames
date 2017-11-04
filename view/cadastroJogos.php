<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminControl</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="../bootstrap/bower_components/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="../bootstrap/bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="../bootstrap/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../bootstrap/dist/css/skins/skin-blue.min.css">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">


      <a href="painelADM.html" class="logo">

        <span class="logo-mini">
          <b>A</b>CTL</span>

        <span class="logo-lg">
          <b>Admin</b>Control</span>
      </a>

      <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">



            <li class="dropdown user user-menu">

              <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                <img src="../imagens/user.jpg" class="user-image" alt="User Image">

                <span class="hidden-xs">Giovanni Bueno</span>
              </a>
              <ul class="dropdown-menu">

                <li class="user-header">
                  <img src="../imagens/user.jpg" class="img-circle" alt="User Image">

                  <p>
                    Giovanni Bueno
                    <small>product owner</small>
                  </p>
                </li>

                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>


          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">


      <section class="sidebar">

        <div class="user-panel">
          <div class="pull-left image">
            <img src="../imagens/user.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Giovanni Bueno</p>

          </div>
        </div>


        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MENU NAVEGAÇÃO</li>

          <li class="active">
            <a href="#">
              <i class="fa fa-link"></i>
              <span>Cadastro de jogos</span>
            </a>
          </li>
          <li>
            <a href="controleUsuarios.html">
              <i class="fa fa-link"></i>
              <span>Controle de usuario</span>
            </a>
          </li>

        </ul>

      </section>

    </aside>

    <div class="content-wrapper">

      <section class="content-header">
        <h1>
          Cadastro de Jogos
        </h1>

      </section>


      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Jogo</h3>
              </div>

              <div class="box-body">
                <form method="post" class="register">
                  <p> Nome do Jogo
                    <br>
                    <input type="text" name="nomejogo" id="nomejogo" minlength="2" maxlength="100" required />
                  </p>
                  <p>Desenvolvedor
                    <br>
                    <input type="text" name="desenvolvedor" id="desenvolvedor" maxlength="100" required />
                  </p>
                  <p>Data de Lançamento
                    <br>
                    <input type="text" name="datajogo" id="datajogo" maxlength="4" required />
                  </p>
                  <div class="form-group">
                    <p>Descrição do jogo
                      <textarea class="form-control" rows="5" id="descricao" required></textarea>
                    </p>
                    <p>Imagem Capa
                      <form action="#">
                        <input type="file" name="pic" accept="image/*" required>
                    </p>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Catergoria</h3>
                <div class="box-body">

                  <input type="checkbox" id="cbAventura" value="Aventura" />
                  <label>Aventura</label>

                  <input type="checkbox" id="cbrpg" value="cbrpg" />
                  <label>RPG</label>

                  <input type="checkbox" id="cbshooter" value="cbshooter" />
                  <label>Shooter</label>
                  <br>
                  <br>

                  <input type="checkbox" id="cbshooter" value="cbshooter" />
                  <label>Luta</label>

                  <input type="checkbox" id="cbplataforma" value="cbplataforma" />
                  <label>Plataforma</label>

                  <input type="checkbox" id="cbpluzze" value="cbpluzze" />
                  <label>Puzzles</label>
                  <br>
                  <br>

                  <input type="checkbox" id="cbcorrida" value="cbcorrida" />
                  <label>Corrida</label>

                  <input type="checkbox" id="cbcasual" value="cbcasual" />
                  <label>Casual</label>

                  <input type="checkbox" id="cbIndie" value="cbIndie" />
                  <label>Indie</label>
                  <br>
                  <br>

                  <input type="checkbox" id="cbSobrevivencia" value="cbSobrevivencia" />
                  <label>Sobrevivência</label>

                  <input type="checkbox" id="cbMultiplayer" value="cbMultiplayer" />
                  <label>Multiplayer</label>

                  <input type="checkbox" id="cbMundoaberto" value="cbMundoaberto" />
                  <label>Mundo Aberto</label>
                  <br>
                  <br>

                  <input type="checkbox" id="cbMmo" value="cbMmo" />
                  <label>MMO</label>

                  <input type="checkbox" id="cbSimulador" value="cbSimulador" />
                  <label>Simulador</label>

                  <input type="checkbox" id="cbTerror" value="cbTerror" />
                  <label>Terror</label>
                  <br>
                  <br>

                  <input type="checkbox" id="cbEstrategia" value="Aventura" />
                  <label>Estratégia</label>

                  <input type="checkbox" id="cbMusica" value="cbMusica" />
                  <label>Música</label>

                  <input type="checkbox" id="cbEsportes" value="cbEsportes" />
                  <label>Esportes</label>
                  <br>
                  </p>
                  <p>
                    <span>Plataformas * </span>
                    <br/>
                    <br/>
                    <input type="checkbox" value="pcMicrosoft" />
                    <label>PC - Microsoft Windows</label>
                    <div>
                      <input type="checkbox" value="playstation" />
                      <label>PlayStation </label>

                      <input type="checkbox" value="playstation2" />
                      <label>PlayStation 2 </label>

                      <input type="checkbox" value="playstation3" />
                      <label>PlayStation 3 </label>

                      <input type="checkbox" value="playstation4" />
                      <label>PlayStation 4 </label>
                    </div>
                    <br/>
                    <div>
                      <input type="checkbox" value="xbox" />
                      <label>Xbox</label>

                      <input type="checkbox" value="xbox360" />
                      <label>Xbox 360 </label>

                      <input type="checkbox" value="xboxOne" />
                      <label>Xbox One </label>
                    </div>
                    <br/>
                    <div>
                      <input type="checkbox" value="nintendoWii" />
                      <label>Nintendo Wii</label>

                      <input type="checkbox" value="nintendoU" />
                      <label>Nintendo Wii U</label>

                      <input type="checkbox" value="nintendoDS" />
                      <label>Nintendo DS</label>

                      <input type="checkbox" value="nintendo64" />
                      <label>Nintendo 64</label>

                      <input type="checkbox" value="nintendoSwitch" />
                      <label>Nintendo Switch</label>

                      <input type="checkbox" value="snes" />
                      <label>SNES</label>
                      <br>

                      <input type="checkbox" value="gba" />
                      <label>GBA</label>

                      <input type="checkbox" value="gameCube" />
                      <label>Game Cube</label>

                    </div>
                  </p>
                  <p class="auth-submit">
                    <input type="submit" value="Cadastrar">
                  </p>

                  </form>


                </div>
              </div>
            </div>
      </section>
      <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">

        <!-- Default to the left -->
        <strong>Copyright &copy; 2017
          <a href="#">GETGAMES - TRABALHO DE PI</a>.</strong> TODOS OS DIREITOS RESERVADOS.
      </footer>



      <!-- jQuery 3 -->
      <script src="../bootstrap/../bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="../bootstrap/../bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../bootstrap/dist/js/adminlte.min.js"></script>

</body>

</html>