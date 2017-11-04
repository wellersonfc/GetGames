<?php 
 require 'conector.php';
//var_dump($conexao); exit();



  
$login = "SELECT idCliente, nomeCliente, emailCliente, senhaCliente FROM cliente WHERE emailCliente ='$email' AND senhaCliente ='$senha' ";


$select_clientes = "SELECT * FROM cliente";

	//$select_clientes_edit = "SELECT * FROM cliente where id = $id";

$cadastro_usuario = "INSERT INTO `cliente`(`nomeCliente`, `emailCliente`, `senhaCliente`, `telefone`, `whatsapp`, `img`, `cep`, `uf`, `cidade`, `bairro`, `endereco`, `numero`, `cpf`) VALUES ('$nome','$email','$senha','$telefone','$whatsapp','','$cep','$estado','$cidade','$bairro ','$endereco','$numero','$cpf')";

  $atu ="UPDATE cliente
    SET nomeCliente = '$nome', emailCliente = '$email', senhaCliente = $senha, telefone = '$telefone', whatsapp = '$whatsapp', img = '', cep ='$cep', uf = '$estado', cidade = '$cidade', bairro= '$bairro', 
      endereco = '$endereco', numero = '$numero', cpf ='$cpf'
    WHERE idCliente = '$id'";

	
?>