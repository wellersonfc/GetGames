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
     <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script src="../bootstrap/js/javascript.js"></script>

</head>

<body class="body-recad">
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
    <div class="container-fluid container-info" >
    	<div class="row">
        <div class="col-md-2"></div>
    		<div class="col-md-8">
            <div class="col-md-12" style="background-color: white; padding: 25px">
            <div class="box-body">
              <table id="example2" class="table  table-striped">
                <thead>
                <tr>
                  <th>jogo</th>
                  <th></th>
                  
                </tr>
                </thead>
                <tbody>
                      <?php
          for($i=0;$i<18;$i++)
        {
?>
                
                <tr>
                  <td><a href="infojogo.php"><img src="../imagens/fifa18p4.jpg"  style="width: 100px ;"></td></a>
                  <td><h4 class="panton">Fifa 18<small>Playstation</h4>
                    <p>O jogo possui diversas melhorias, se comparado a sua versão anterior. Suas animações de movimentação e finalização possibilitam uma batida e cabeceio mais fluidos na bola, combinando-se para aumentar o potencial de finalizações dramáticas e incríveis. O game também trouxe mudanças em sua jogabilidade, possibilitando o jogador a mandar a bola direto para a área durante o cruzamento.</p>

</td>
                </tr>
              <?php } ?>

      
              </table>
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
    		
   </body>
       </html>
                                

