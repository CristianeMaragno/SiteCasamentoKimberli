<?php

	require_once('db.class.php');

	$nomeP = $_POST['name'];
	$emailP = $_POST['email'];
	$presente = $_POST['PId'];

	$objDb = new db();
	$link = $objDb-> conecta_mysql ();

	/*$sql = "INSERT INTO presentes(nome, email, presente) VALUES ('$nomeP', '$emailP', '$presente')";

	if(mysqli_query($link, $sql)){
		header('Location: PDF/Boleto'.$presente.'.pdf');
	} else {
		echo 'Erro ao registrar confirmação! Tente mais tarde.';
		echo("Error description: " . mysqli_error($link));
	}*/

	$sql = "select * from presentes";

	if(mysqli_query($link, $sql)){
		if(empty($nomeP) || empty($emailP)){
			header('Location: presentes.php?campo_vazio=1');
		}else{
			$sql = "INSERT INTO presentes(nome, email, presente) VALUES ('$nomeP', '$emailP', '$presente')";
			if(mysqli_query($link, $sql)){
				header('Location: presentes.php?campo_vazio=0&pagamento=1&presente='.$presente.'');
			}else {
				echo 'Erro ao registrar presente! Tente mais tarde.';
				echo("Error description: " . mysqli_error($link));
			}
		}
	} else {
		echo 'Erro ao fazer seleção no banco de dados! Tente mais tarde.';
		echo("Error description: " . mysqli_error($link));
	} 

?>