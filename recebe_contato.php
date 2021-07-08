<?php

					//variavel
					$nome = $_POST['nome'];
					$telefone = $_POST['telefone'];
					$email = $_POST['email'];
					$mensagem = $_POST['mensagem'];

					$conexao = new PDO("mysql:host=localhost; dbname=footbook; charset=utf8", "root", "");


					$consulta = $conexao->prepare("INSERT INTO contato (nome,telefone,email,mensagem) VALUES (?,?,?,?)");

					$consulta->execute(array($nome, $telefone, $email, $mensagem));

					$resultado = $consulta->rowCount();

					if($resultado == 0) {
						header("Location: contato.php?erro=envio");
					} else {
						header("Location: contato.php?sucesso=1");
					}

					





?>