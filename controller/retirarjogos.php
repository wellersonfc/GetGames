<?php
require_once '../model/conector.php'; 

session_start(); 
$idusus = intval($_SESSION['idGlobal']);

$b = $_GET['id'];

$id = intval($b);

$query = "DELETE FROM `jogosclientes` WHERE jogosclientes.idcliente = '$idusus' AND jogosclientes.idjogos ='$id'";

$deu = mysqli_query($conexao, $query);

header('Location: ../view/meusjogos.php');
?>