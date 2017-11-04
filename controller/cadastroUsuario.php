<?php 
  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $email = $_POST['email'];
  $senha = $_POST['senha']; 
  $telefone = $_POST['telefone'];
  $whatsapp = $_POST['whatsapp']; 
  $cep = $_POST['cep'];
  $estado = $_POST['estado'];
  $cidade = $_POST['cidade'];
  $bairro = $_POST['bairro']; 
  $endereco = $_POST['endereco']; 
  $numero = $_POST['numero'];

  require '../model/conector.php';
  require '../model/cadastrocliente.php';


  $resultado = mysqli_query($conexao, $cadastro_usuario);
  //var_dump($resultado);

  if($resultado==true){
    header('Location: ../view/login.php');
  }else{

  }

?>