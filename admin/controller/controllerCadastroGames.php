<?php 
//posta cadastro de usuario;

$njogos = $_POST['nomejogo'];
$desen= $_POST['desenvolvedor'];
$datajogo= $_POST['datajogo'];
$cate= $_POST['categoria'];
$plata= $_POST['plataforma'];
$img = $_POST['arquivo'];
$des = $_POST['descricao'];

//Importação da do conector
require '../model/conector.php';


//impostação do ultimo cadastro
$query1 = "SELECT class FROM jogos where class =(SELECT max(class) from jogos)";

$id = mysqli_query($conexao, $query1);

$resu = mysqli_fetch_assoc($id);

$ultimoid=intval($resu['class'])+1;


if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0)
{

	$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
	$nome = $_FILES['arquivo']['name'];
	

	// Pega a extensao
	$extensao = strrchr($nome, '.');

	// Converte a extensao para mimusculo
	$extensao = strtolower($extensao);

	// Somente imagens, .jpg;.jpeg;.gif;.png
	// Aqui eu enfilero as extesões permitidas e separo por ';'
	// Isso server apenas para eu poder pesquisar dentro desta String
	if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
	{
		// Cria um nome único para esta imagem
		// Evita que duplique as imagens no servidor.
		$novoNome = md5(microtime()) . '.' . $extensao;
		
		// Concatena a pasta com o nome
		$destino = 'imagens/' . $novoNome; 
		
		// tenta mover o arquivo para o destino
		if( @move_uploaded_file( $arquivo_tmp, $destino  ))
		{
			echo "Arquivo salvo com sucesso em : <strowng>" . $destino . "</strong><br />";
			echo "<img src=\"" . $destino . "\" />";
		}
	}
}

foreach($cate as $i){
   	foreach($plata as $v){
	   $query = "INSERT INTO `jogos`(`nome`, `anolancamento`, `descricao`, `imgJogo`, 
	   		`JogosCategoria_idJogosCategoria`, `JogosClientes_idJogosClientes`, `desenvolvedor_jogo`,`class`) 
	   		VALUES 
	   		('$njogos','$datajogo','$des','$img','$i','$v','$desen','$ultimoid')";
	   		 
	   		$resultado = mysqli_query($conexao, $query);
 			//var_dump($resultado);
 	}
}

?>