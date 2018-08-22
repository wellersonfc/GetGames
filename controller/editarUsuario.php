<?php 
  $nome = $_POST['nome'];
  //$cpf = $_POST['cpf'];
  //$email = $_POST['email'];
  $senha = $_POST['senha']; 
  $telefone = $_POST['telefone'];
  $whatsapp = $_POST['whatsapp']; 
  $cep = $_POST['cep'];
  $estado = $_POST['estado'];
  $cidade = $_POST['cidade'];
  $bairro = $_POST['bairro']; 
  //$endereco = $_POST['endereco']; 
  $numero = $_POST['numero'];
  session_start(); 

  $id = intval($_SESSION['idGlobal']);

  require '../model/conector.php';

  $atu ="UPDATE cliente
    SET 
    nomeCliente = '$nome',
    senhaCliente = '$senha',
    telefone = '$telefone',
    whatsapp = '$whatsapp',
    img = '',
    cep ='$cep',
    uf = '$estado',
    cidade = '$cidade',
    bairro= '$bairro',
    numero = '$numero'

    WHERE idCliente = '$id'";

  $resultado = mysqli_query($conexao, $atu);

  if($resultado==true){
    header('Location:../view/home.php');
  }else{
     header('Location:../view/home.php');
  }

?>