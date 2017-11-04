<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cadastro Usuario - Favoritos </title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="../bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700,200italic,400italic,600italic">
	<!-- nosso estilo -->
	<link rel="stylesheet" href="../bootstrap/css/estilo.css">
	<link href="../bootstrap/css/genero.css" rel="stylesheet">

</head>

<body>

	<body>
		<div class=login-page>

			<div class=row>
				<div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
					<img class="logo-favoritos" src="../imagens/logo.png"></img>
				</div>
			</div>


			<div class="col-md-12 " align="left">
				<h2 class="favoritos-title">Favoritos</h2>
			</div>
			<br>


			<form method="post" class="register" action="home.php">
				<ul>
					<div class="col-xs-12 col-md-3">
						<!-- Checkbox Aventura -->
						<li>
							<input type="checkbox" id="cbAventura" value="Aventura" />
							<label for="cbAventura">
								<img src="../imagens/aventura.jpg" class="img-fluid" alt="Responsive image" width="250" height="150" />
								<h5 class="favoritos-check">Aventura</h5>
							</label>
						</li>
						<!-- Checkbox RPG -->
						<li>
							<input type="checkbox" id="cbRPG" value="RPG" />
							<label for="cbRPG">
								<img src="../imagens/rpg.jpg" class="img-fluid" alt="Responsive image" width="250" height="150" />
								<h5 class="favoritos-check">RPG</h5>
							</label>
						</li>
						<!-- Checkbox Shooter -->
						<li>
							<input type="checkbox" id="cbShooter" value="Shooter" />
							<label for="cbShooter">
								<img src="../imagens/shooter.jpg" class="img-fluid" alt="Responsive image" width="250" height="150" />
								<h5 class="favoritos-check">Shooter</h5>
							</label>
						</li>
					</div>
					<div class="col-xs-12 col-md-3">
						<!-- Checkbox Luta -->
						<li>
							<input type="checkbox" id="cbLuta" value="Luta" />
							<label for="cbLuta">
								<img src="../imagens/luta.jpg" class="img-fluid" alt="Responsive image" width="250" height="150" />
								<h5 class="favoritos-check">Luta</h5>
							</label>
						</li>
						<!-- Checkbox Plataforma -->
						<li>
							<input type="checkbox" id="cbPlataforma" value="Plataforma" />
							<label for="cbPlataforma">
								<img src="../imagens/plataforma.jpg" class="img-fluid" alt="Responsive image" width="250" height="150" />
								<h5 class="favoritos-check">Plataforma</h5>
							</label>
						</li>
						<!-- Checkbox Puzzles -->
						<li>
							<input type="checkbox" id="cbPuzzles" value="Puzzles" />
							<label for="cbPuzzles">
								<img src="../imagens/puzzle.jpg" class="img-fluid" alt="Responsive image" width="250" height="150" />
								<h5 class="favoritos-check">Puzzles</h5>
							</label>
						</li>
					</div>
					<div class="col-xs-12 col-md-3">

						<!-- Checkbox Corrida -->
						<li>
							<input type="checkbox" id="cbCorrida" value="Corrida" />
							<label for="cbCorrida">
								<img src="../imagens/corrida.jpg" class="img-fluid" alt="Responsive image" width="250" height="150" />
								<h5 class="favoritos-check">Corrida</h5>
							</label>
						</li>
						<!-- Checkbox Simulador -->
						<li>
							<input type="checkbox" id="cbSimulador" value="Simulador" />
							<label for="cbSimulador">
								<img src="../imagens/simulador.jpg" class="img-fluid" alt="Responsive image" width="250" height="150" />
								<h5 class="favoritos-check">Simulador</h5>
							</label>
						</li>
						<!-- Checkbox Terror -->
						<li>
							<input type="checkbox" id="cbTerror" value="Terror" />
							<label for="cbTerror">
								<img src="../imagens/terror.jpg" class="img-fluid" alt="Responsive image" width="250" height="150" />
								<h5 class="favoritos-check">Terror</h5>
							</label>
						</li>
					</div>
					<div class="col-xs-12 col-md-3">
						<!-- Checkbox Estratégia -->
						<li>
							<input type="checkbox" id="cbEstratégia" value="Estratégia" />
							<label for="cbEstratégia">
								<img src="../imagens/estrategia.jpg" class="img-fluid" alt="Responsive image" width="250" height="150" />
								<h5 class="favoritos-check">Estratégia</h5>
							</label>
						</li>
						<!-- Checkbox Música -->
						<li>
							<input type="checkbox" id="cbMúsica" value="Música" />
							<label for="cbMúsica">
								<img src="../imagens/musica.jpg" class="img-fluid" alt="Responsive image" width="250" height="150" />
								<h5 class="favoritos-check">Música</h5>
							</label>
						</li>
						<!-- Checkbox Esportes -->
						<li>
							<input type="checkbox" id="cbEsportes" value="Esportes" />
							<label for="cbEsportes">
								<img src="../imagens/esporte.jpg" class="img-fluid" alt="Responsive image" width="250" height="150" />
								<h5 class="favoritos-check">Esportes</h5>
							</label>
						</li>
				</ul>
				<div>
					<br>
					<br>
					<div class="col-xs-12">
						<button type="submit" class="btn btn-primary btn-block btn-flat btn-two">Entrar</button>
					</div>

			</form>
			<!-- jQuery 3 -->
			<script src="../bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
			<!-- Bootstrap 3.3.7 -->
			<script src="../bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
			<script src="js_query/jquery-3.2.1.min.js"></script>

	</body>

</html>