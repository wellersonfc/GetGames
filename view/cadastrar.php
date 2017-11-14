<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Get Games | Cadastro</title>


    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/login.css" rel="stylesheet">
    <link href="../bootstrap/css/font-awesome.css" rel="stylesheet">
    <link href="../bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="js_jquery/index.js">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script src="../bootstrap/js/javascript.js"></script>
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
      <div class="col-sm-8  col-sm-offset-2">

            <form method="post" class="register" action="../controller/cadastroUsuario.php">

                <div class="col-sm-6 ">

                    <input class=" form-control form-page" type="text" name="nome" id="nome" minlength="2" maxlength="100"
                                            placeholder="Nome completo" required /><br>
                    <input class=" form-control form-s form-page " type="text" name="cpf" id="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)"
                                            placeholder="Cpf" required /><br>
                    <input class=" form-control form-s form-page " type="email" name="email" id="email" maxlength="100"
                                            placeholder="Email" required /><br>
                    <input class=" form-control form-s form-page " type="password" name="senha" id="senha" maxlength="100"
                                            placeholder="Senha" required /><br>
                    <input class=" form-control form-s form-page " type="text" name="telefone" id="telefone" maxlength="14"
                                            OnKeyPress="formatar('## # ####-####', this)" placeholder="Telefone" required /><br>
                    <input class="form-control form-s form-page" type="text" name="whatsapp" id="whatsapp" maxlength="14"
                                            OnKeyPress="formatar('## # ####-####', this)" placeholder="Whatsapp" /><br>


                </div>
               <div class="col-sm-6">

                     <input class="form-control form-page" type="text" name="cep" id="cep" maxlength="9" OnKeyPress="formatar('#####-###', this)"
                                        placeholder="CEP" required /><br>

                     <input class="form-control form-s form-page" type="text" name="estado" id="estado" placeholder="Estado"
                                        required/><br>

                     <input class="form-control form-s form-page" type="text" name="cidade" id="cidade" placeholder="Cidade"
                                        required/><br>
                     <input class="form-control form-s form-page" type="text" name="bairro" id="bairro" placeholder="Bairro"
                                        required /><br>
                     <input class="form-control form-s form-page" type="text" name="endereco" id="endereco" placeholder="Endereço"
                                        required/><br>
                    <input class="form-control form-s form-page" type="text" name="numero" id="numero" placeholder="Numero"
                                        required /><br>
                    <div style="padding-right: 15px;">                 
                        <button type="submit" class="btn  navbar-right btn-primary" 65px">Entrar</button>
                    </div>
                </div>
            
            </form>
                            
           </div>
        </div>
    </div>
</body>

</html>