<?php
session_start();


//UPLOAD IMAGEM SIMBOLO
$nome_simbolo = $_FILES['img_simbolo']['name'];
$local_temp_simbolo = $_FILES['img_simbolo']['tmp_name'];
$hash_simbolo = sha1_file($local_temp_simbolo);
$extensao_simbolo = strtolower(end(explode(".", $nome_simbolo)));
$nome_real_simbolo = "{$hash_simbolo}.{$extensao_simbolo}";

$destino_simbolo = "uploads/" . $hash_simbolo . "." . $extensao_simbolo;
if (move_uploaded_file($local_temp_simbolo, $destino_simbolo)) {
	echo "Upload realizado com sucesso!";
	echo "<a href='{$destino_simbolo}'> Clique para ver a imagem</a>";
} else {
	echo "Ocorreu um erro no upload";
}


//UPLOAD IMAGEM EQUIPE
$nome_img_equipe = $_FILES['img_equipe']['name'];
$local_temp_equipe = $_FILES['img_equipe']['tmp_name'];
$hash_equipe = sha1_file($local_temp_equipe);
$extensao_equipe = strtolower(end(explode(".", $nome_img_equipe)));
$nome_real_img_equipe = "{$hash_equipe}.{$extensao_equipe}";

$destino_equipe = "uploads/" . $hash_equipe . "." . $extensao_equipe;
if (move_uploaded_file($local_temp_equipe, $destino_equipe)) {
	echo "Upload realizado com sucesso!";
	echo "<a href='{$destino_equipe}'> Clique para ver a imagem</a>";
} else {
	echo "Ocorreu um erro no upload";
}
// OUTROS DADOS
$login = $_SESSION['login'];
$tecnico = $_POST['tecnico'];
$capitao = $_POST['capitao'];
$fundacao = $_POST['fundacao'];
$lema = $_POST['lema'];

//conexao com o banco
$conexao = new PDO("mysql:host=localhost; dbname=footbook; charset=utf8", "root", "");

//prepara consulta
$consulta = $conexao->prepare("INSERT INTO perfil (imgSimbolo, imgEquipe, lema, tecnico, capitao, fundacao, login) VALUES (?,?,?,?,?,?,?)");

//envia para o banco
$consulta->execute(array($nome_real_simbolo, $nome_real_img_equipe, $lema, $tecnico, $capitao, $fundacao, $login,));

$resultado = $consulta->rowCount();



if($resultado == true) {
	echo "<h1>Informações Cadastradas!<h1>";
	(header("Location: perfil.php"));

} else {
	echo "<h1>Erro ao cadastrar informações. Tente novamente!</h1>";
}







?>