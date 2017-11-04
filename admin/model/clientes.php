<?php 
 require 'conector.php';
//var_dump($conexao); exit();
$query = 'SELECT * FROM cliente';
$clientes = mysqli_query($conexao, $query);
$resu = mysqli_fetch_assoc($clientes);
while ($exibe = mysqli_fetch_assoc($clientes)) {
	echo $exibe['idCliente'];
}
?>