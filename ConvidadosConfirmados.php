<?php

	require_once('db.class.php');

	$nomeC = $_POST['name'];
	$emailC = $_POST['email'];

	$objDb = new db();
	$link = $objDb-> conecta_mysql ();

	$sql = "select * from confirmados";
	if(mysqli_query($link, $sql)){
		if(empty($nomeC) || empty($emailC)){
			header('Location: index.php?campo_vazio=1');
		}else{
			$sql = "INSERT INTO confirmados(nome, email) VALUES ('$nomeC', '$emailC')";
			if(mysqli_query($link, $sql)){
				header('Location: index.php?campo_vazio=0');
			}else {
				echo 'Erro ao registrar confirmação! Tente mais tarde.';
				echo("Error description: " . mysqli_error($link));
			}
		}
	} else {
		echo 'Erro ao fazer seleção no banco de dados! Tente mais tarde.';
		echo("Error description: " . mysqli_error($link));
	}

?>