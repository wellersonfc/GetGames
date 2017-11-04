<?php
	//php confing - aqui estou configurando as intancias do banco setando em variais.
	$host = 'localhost';
	$bd ='bd_getgames';
	$user ='root';
	$senhabd ='sa123456';

	//Usando a fuction mysqli_connect para passar as permisoes e banco que deseijo usar.
	$conexao = mysqli_connect($host,$user,$senhabd,$bd);

	// Check connection
	if ($conexao ->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}	
?>