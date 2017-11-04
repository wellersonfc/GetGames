<?php 
//var_dump($_POST);
  $email = $_POST['email'];
  $senha = $_POST['senha']; 

  //var_dump($email);
  //var_dump($senha);


  require_once '../model/conector.php';
  //require_once '../model/cadastrocliente.php';

$sql = "SELECT * FROM cliente WHERE emailCliente ='$email' AND senhaCliente ='$senha'";

$sqlexet= mysqli_query($conexao, $sql );

$cont = mysqli_num_rows($sqlexet);

//var_dump($cont);

if($cont > 0 ){
   session_start();

  $query = "SELECT * FROM cliente  WHERE emailCliente ='$email' AND senhaCliente ='$senha'";

  $clientes = mysqli_query($conexao, $query);


  $resu = mysqli_fetch_assoc($clientes);

  $_SESSION['idGlobal'] = $resu['idCliente'];

    header('Location:../view/favoritos.php');
  }else{
    header('Location:../view/login.php');
  }

?>