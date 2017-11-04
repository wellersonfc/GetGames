<?php
require_once '../model/conector.php'; 

$b = $_GET['id'];

$id = intval($b);

$query = "DELETE FROM cliente WHERE idCliente = '$id'";

$deu = mysqli_query($conexao, $query);

header('Location: ../controleUsuarios.php');
?>