<?php 

$desen= $_POST['desenvolvedor'];
$datajogo= $_POST['datajogo'];
$cate= $_POST['categoria'];
$plata= $_POST['plataforma'];

 require '../model/conector.php';
foreach($cate as $i){
   	foreach($plata as $v){
	   $query = "INSERT INTO `jogos`(`nome`, `anolancamento`, `descricao`, `imgJogo`, 
	   		`JogosCategoria_idJogosCategoria`, `JogosClientes_idJogosClientes`, `desenvolvedor_jogo`) 
	   		VALUES 
	   		('$njogo','$datajogo','dddd','dddddd','$desen','$i','$v')";
	   		 
	   		$resultado = mysqli_query($conexao, $query);
 			//var_dump($resultado);
 	}
}

?>