<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 

//Salvar Imagem do jogo
if(isset($_FILES['arquivo'])){
      $new_name = $_FILES['arquivo']['name']; //Definindo um novo nome para o arquivo
      $dir = '../imagens/'; 
      move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
   }

//posta cadastro de usuario;
$njogos = $_POST['nomejogo'];
$desen= $_POST['desenvolvedor'];
$datajogo= $_POST['datajogo'];
$cate= $_POST['categoria'];
$plata= $_POST['plataforma'];
$img = $_FILES['arquivo']['name'];
$des = $_POST['descricao'];

//Importação da do conector
require '../model/conector.php';

$queryjogos = "INSERT INTO `jogos`(`nome`, `anolancamento`, `descricao`, `imgJogo`, `desenvolvedor_jogo`)
			VALUES ('$njogos','$datajogo','$des','$img','$desen')";

$resultado = mysqli_query($conexao, $queryjogos);	
	

//impostação do ultimo cadastro
$query1 = "SELECT idJogos FROM jogos where idJogos =(SELECT max(idJogos) from jogos)";
$id = mysqli_query($conexao, $query1);
$resu = mysqli_fetch_assoc($id);
$ultimoid=intval($resu['idJogos']);



foreach($cate as $i){
	$salvarcategoria = "INSERT INTO `jogoscategoria`(`idJogos`, `idCategoria`) VALUES ('$ultimoid','$i')";
	$resultado = mysqli_query($conexao, $salvarcategoria);
 	//var_dump($resultado);
}

foreach($plata as $v){
	$salvarplataforma = "INSERT INTO `jogosplataforma`(`idPlataforma`, `IdJogos`) VALUES ('$v','$ultimoid')";
	$resultado = mysqli_query($conexao, $salvarplataforma);
 	//var_dump($resultado);
}
echo '<script type="text/javascript">alert("Jogo Cadastrado com Sucesso")</script>';
header('Location: ../cadastroJogos.php');

?>