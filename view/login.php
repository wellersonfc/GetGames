<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="../bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<!-- nosso estilo -->
	<link rel="stylesheet" href="../bootstrap/css/estilo.css">
</head>

<body>

	<body>
		<div class=login-page>

			<div class=row>
				<div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
					<img class="logo-login" src="../imagens/logo.png"></img>
				</div>
			</div>

			<div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
				<form role=form ng-submit=submit() action="../controller/loginUsuario.php" method="post">
					<div class="form-content ">
						<div class="form-group">
							<input type="text" class="form-control form-page form-wi" name="email" id="email" placeholder="EMAIL">
						</div>
						<div class="form-group">
							<input type="password" class="form-control form-page form-wi" name="senha" id="senha" placeholder="SENHA">
						</div>
						<div class="check-form">
							<label class="checkbox-inline ">
								<input type="checkbox" class="form-page" value="" id=check>
								<p class="check">lembre-me</p>
							</label>
						</div>
						<div class="buttonn">
							<button type="submit" class="btn-new">
								<img src="../imagens/btnlogin.png" onMouseOver="this.src='../imagens/btnloginhover.png'" onMouseOut="this.src='../imagens/btnlogin.png'"
								 onClick="location='#'">
							</button>
						</div>
				</form>
				<div>

					<a class="check" href="">
						<p>Novo Usuario</p>
					</a>

					<a class="check" href="">
						<p>Esqueceu a senha?</p>
					</a>

				</div>
				</div>
			</div>

			<!-- jQuery 3 -->
			<script src="../bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
			<!-- Bootstrap 3.3.7 -->
			<script src="../bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	</body>

</html>