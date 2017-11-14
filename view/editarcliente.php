<?php require_once '../model/conector.php'; 

session_start(); 

$id = intval($_SESSION['idGlobal']);

echo $id;

$qq = "SELECT * FROM cliente WHERE idCliente = '$id'";

$clientes = mysqli_query($conexao, $qq);

$resu = mysqli_fetch_assoc($clientes);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Get Games | Editar Cadastro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap/css/login.css" rel="stylesheet">
   <link href="../bootstrap/css/estilo.css" rel="stylesheet">
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

<div class="login-page">
       
	<nav class="navbar navbar-relative navbar-inverse navbar-transparente" style="margin: -42px">
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
    <?php include 'menu.php';?>
 </div>
</div>
<!-- /container -->
    </nav>
    <div class=row>
    <div class="container-fluid" >
    	<div class="row">
    		
    		
    		<div class="col-md-6 col-md-offset-3 grad " style="margin-top: 100px;" >
    			<div class="row text-center">
              <div class="col-sm-offset-3 col-sm-6 ">
    				
                	    <input class="form-control form-r form-page " type="text" name="nome" id="nome" minlength="2" maxlength="100"
                                            placeholder="Nome completo" value="<?php echo $resu['nomeCliente'] ?>" required />
                       <input class="form-control form-r form-page " type="password" name="senha" id="senha" maxlength="100"
                                            placeholder="Senha"  value="<?php echo $resu['telefone'] ?>" required />
                        <input class="form-control form-r form-page  " type="text" name="telefone" id="telefone" maxlength="14"
                                            OnKeyPress="formatar('## # ####-####', this)" placeholder="Telefone" value="<?php echo $resu['telefone'] ?>" required />
                        <input class=" form-control  form-r form-page " type="text" name="whatsapp" id="whatsapp" maxlength="14"
                                            OnKeyPress="formatar('## # ####-####', this)" placeholder="Whatsapp" value="<?php echo $resu['whatsapp'] ?>"  />
                         <input class=" form-control form-r form-page  " type="text" name="cep" id="cep" maxlength="9" OnKeyPress="formatar('#####-###', this)"
                                        placeholder="CEP" value="<?php echo $resu['cep'] ?>" required />
                                    

                         <input class="  form-control form-r form-page " type="text" name="estado" id="estado" placeholder="Estado"
                                        required/>
                                    

                          <input class=" form-control form-r form-page  " type="text" name="cidade" id="cidade" placeholder="Cidade"
                                        required/>
                                   

                          <input class=" form-control form-r form-page " type="text" name="bairro" id="bairro" placeholder="Bairro"
                                        required />
                                    

                           <input class=" form-control form-r form-page  " type="text" name="Rua" id="endereco" placeholder="Rua"
                                        required/>
                                   


                          <input class=" form-control form-r form-page " type="text" name="numero" id="numero" placeholder="Numero"
                                        required  value="<?php echo $resu['numero'] ?>" />
                                    <br>
                          <button type="submit" class="panton btn btn-primary ">EDITAR</button>
                                
                                    
                                </div>

                                </form>
       
   </body>
       </html>
                                

