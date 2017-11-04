<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>


    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/estilo.css" rel="stylesheet">
    <link href="../bootstrap/css/font-awesome.css" rel="stylesheet">
    <link href="../bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="js_jquery/index.js">

</head>

<body>

    <body>
        <div class=login-page>

            <div class=row>
                <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4">
                    <img class="logo-cad" src="../imagens/logo.png"></img>
                </div>
            </div>

            <main id="main" class="site-main">
                <div class="cont maincont">


                    <article class="page-cont">
                        <div class="page-styling">


                            <div class="auth-wrap ">
                                <div class="auth-col col-md-12">
                                    <h3 class="cad-esquerda">Cadastro</h3>
                                </div>

                                <div class="auth-col col-md-6">

                                    <form method="post" class="register" action="../controller/cadastroUsuario.php">

                                        <input class=" form-cadastro-esquerda form-control form-page form-wi" type="text" name="nome" id="nome" minlength="2" maxlength="100"
                                            placeholder="Nome completo" required />
                                        <br>


                                        <input class="form-cadastro-esquerda form-control form-page form-wi" type="text" name="cpf" id="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)"
                                            placeholder="Cpf" required />
                                        <br>


                                        <input class="form-cadastro-esquerda form-control form-page form-wi" type="email" name="email" id="email" maxlength="100"
                                            placeholder="Email" required />
                                        <br>


                                        <input class="form-cadastro-esquerda form-control form-page form-wi" type="password" name="senha" id="senha" maxlength="100"
                                            placeholder="Senha" required />
                                        <br>


                                        <input class="form-cadastro-esquerda form-control form-page form-wi" type="text" name="telefone" id="telefone" maxlength="14"
                                            OnKeyPress="formatar('## # ####-####', this)" placeholder="Telefone" required />
                                        <br>


                                        <input class="form-cadastro-esquerda form-control form-page form-wi" type="text" name="whatsapp" id="whatsapp" maxlength="14"
                                            OnKeyPress="formatar('## # ####-####', this)" placeholder="Whatsapp" />
                                        <br>


                                </div>
                                <div class="auth-col col-md-6">


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


                                    <input class="form-cadastro-direita form-control form-page form-wi" type="text" name="numero" id="numero" placeholder="Numero"
                                        required />
                                    <br>
                                </div>
                                <div class="col-xs-10">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat btn-cad">Entrar</button>
                                </div>

                                </form>
                            </div>
                        </div>
            </main>



            <!-- jQuery 3 -->
            <script src="bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- Arquivo JQuery-->
            <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

            <script src="js/index.js"></script>



    </body>

</html>