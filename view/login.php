<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Get Games | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap/css/font-awesome.css" rel="stylesheet">
  <link href="../bootstrap/css/font-awesome.min.css" rel="stylesheet">
  <link href="../bootstrap/css/login.css" rel="stylesheet">
  <!-- jQuery 3 -->
  <script src="../bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<style>
   .login-page
{
    background-image: url('../imagens/bgl.jpg');
    background-repeat: no-repeat;
    background-size:100%;
    bottom: 0;
    color: black;
    left: 0;
    overflow: auto;
    padding: 3em;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;
    background-size: cover;
}
</style>

<body>
    <div class="login-page">
       <div class=row>
                <div class="col-sm-4  col-sm-offset-4 ">
                    <img class="logo-login" src="../imagens/logo.png"></img>
                </div>
            </div>
      <div class=row>
      <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
        <form role=form ng-submit=submit() action="../controller/loginUsuario.php" method="post">
          <div class="form-content">
            <div class="">
              <input type="text" class="form-control form-page  " name="email" id="email" style="padding-bottom: 15px;" placeholder="EMAIL">
            </div>
            <div style="padding-top: 11px;">
              <input type="password" class="form-control form-page " name="senha" id="senha" style="" placeholder="SENHA">
            </div>
            <div class="check-form check">
            <input type="checkbox" checked="checked"> lembre-me
            </div>
            <div class="button">
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
    </div>
</body>
<html>