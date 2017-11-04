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

</head>

<body class="body1">


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
        <a class="dropdown-toggle" data-toggle="dropdown">Usuario
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
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
    <div class="container-fluid" >
    	<div class="row">
    		<div class="col-md-3">
    		</div>
    		
    		<div class="col-md-6" >
    			<div class="row">
    				<div class="col-md-6">
    					<a href="">
          <img src="http://placehold.it/250x250" alt="Alternate Text" class="img-responsive"/>
          <form action="envia_foto.php" method="post" enctype="multipart/form-data"> <input type="file" name="Arquivo" id="Arquivo"><br> <input type="submit" value="Enviar"> <input type="reset" value="Apagar"> </form>
          <form method="post" class="register" action="../controller/cadastroUsuario.php">

                </a></div>
                <div class="col-md-4">
                	    <input class="form-cadastro-direita form-control form-page form-wi" type="text" name="nome" id="nome" minlength="2" maxlength="100"
                                            placeholder="Nome completo" required />
                                       


                                        <input class="form-cadastro-direita form-control form-page form-wi" type="text" name="cpf" id="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)"
                                            placeholder="Cpf" required />
                                       


                                        <input class="form-cadastro-direita form-control form-page form-wi"type="email" name="email" id="email" maxlength="100"
                                            placeholder="Email" required />
                                       


                                        <input class="form-cadastro-direita form-control form-page form-wi" type="password" name="senha" id="senha" maxlength="100"
                                            placeholder="Senha" required />
                                     


                                        <input class="form-cadastro-direita form-control form-page form-wi" type="text" name="telefone" id="telefone" maxlength="14"
                                            OnKeyPress="formatar('## # ####-####', this)" placeholder="Telefone" required />
                                        

                                        <input class="form-cadastro-direita form-control form-page form-wi" type="text" name="whatsapp" id="whatsapp" maxlength="14"
                                            OnKeyPress="formatar('## # ####-####', this)" placeholder="Whatsapp" />
                                            <input class="form-cadastro-direita form-control form-page form-wi" type="text" name="cep" id="cep" maxlength="9" OnKeyPress="formatar('#####-###', this)"
                                        placeholder="CEP" required />
                                    <br>

                                    <input class=" form-cadastro-direita form-control form-page form-wi" type="text" name="estado" id="estado" placeholder="Estado"
                                        required/>
                                    <br>

                                    <input class="form-cadastro-direita form-control form-page form-wi" type="text" name="cidade" id="cidade" placeholder="Cidade"
                                        required/>
                                    <br>

                                    <input class="form-cadastro-direita form-control form-page form-wi" type="text" name="bairro" id="bairro" placeholder="Bairro"
                                        required />
                                    <br>

                                    <input class="form-cadastro-direita form-control form-page form-wi" type="text" name="endereco" id="endereco" placeholder="Endereço"
                                        required/>
                                    <br>


                                    <input class=" form-control form-page form-wi" type="text" name="numero" id="numero" placeholder="Numero"
                                        required />
                                    <br>
                                </div>
                                <div class="col-xs-10">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat ">EDITAR</button>
                                </div>

                                </form>
                                

