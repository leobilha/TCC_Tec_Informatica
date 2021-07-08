<?php

//Criar variáveis
$login = $_POST['login'];
$senha = sha1($_POST['senha']);

//conexao com o banco
$conexao = new PDO("mysql:host=localhost; dbname=footbook; charset=utf8", "root", "");

//prepara consulta
$consulta = $conexao->prepare("INSERT INTO cadastro(login, senha) VALUES (?,?)");

//envia para o banco
$consulta->execute(array($login, $senha));

$resultado =  $consulta->fetchAll();


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>CADASTRADO COM SUCESSO</h3>
	<a href="index.php"><button>Voltar</button></a>

</body>
</html>