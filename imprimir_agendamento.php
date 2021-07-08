<?php
	
	
	//conexao com o banco

	$conexao = new PDO("mysql:host=localhost; dbname=footbook; charset=utf8", "root", "");
	
	//prepara consulta
	$consulta = $conexao->prepare("SELECT * FROM agendamento INNER JOIN perfil ON agendamento.login = perfil.login");
	$consulta->execute();
	$resultado = $consulta->fetchALL(); //Retorna todos os dados da consulta.


	
	

	foreach ($resultado as $key => $valor) {

	//	$consulta2 = $conexao->prepare("SELECT imgSimbolo FROM perfil WHERE login = ".$valor["equipeAdversaria"]);
	//	$consulta2->execute();
	//	$resultado2 = $consulta2->fetchALL(); //Retorna todos os dados da consulta.
	//	$campos = array_keys($resultado2);
		

		
				
		echo "<h1>EQUIPE</h1> <img width='200px;' src='uploads/{$valor['imgSimbolo']}'>";



//		$query= $conexao->prepare("SELECT imgSimbolo FROM perfil WHERE login = ".$valor["equipeAdversaria"]);

		$query= $conexao->prepare("SELECT imgSimbolo FROM perfil WHERE login = '".$valor["equipeAdversaria"]."'");
		$query->execute();
		$equipe = $query->fetchAll(PDO::FETCH_CLASS, 'stdClass');
		foreach($equipe as $equipeX) {
			echo "<h1>EQUIPE ADVERSARIA</h1> <img width='200px;' src='uploads/". $equipeX->imgSimbolo . PHP_EOL ."'>";
    		
		} 


	//	echo "aa  ID Equipe Adversaria: ".$valor["equipeAdversaria"]." caminho: ".$valor["imgSimbolo"]." aa";

		//	foreach ($resultado2 as $key2 => $valor2) {
			//echo "aa  ID Equipe Adversaria: ".$valor["equipeAdversaria"]." caminho: ".$valor2["imgSimbolo"]." aa";
	//			echo "<h1>EQUIPE ADVERSARIA</h1> <img width='200px;' src='uploads/".mysql_result($resultado2, "imgSimbolo", 0)."'>";
		//}




				
	}

	
	?>