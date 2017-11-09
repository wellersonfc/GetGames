<?php
require_once '../model/conector.php'; 
session_start(); 

$idusus = intval($_SESSION['idGlobal']);

$b = $_GET['id'];


$idjogo = intval($b);

$query = "INSERT INTO `jogosclientes`(`idcliente`, `idjogos`) VALUES ('$idusus ','$idjogo')";

$deu = mysqli_query($conexao, $query);

header('Location: ../view/cadastroJogosCliente.php');
?>