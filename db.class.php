<?php

class db {

 	private $host = 'localhost';

 	private $usuario = 'root';

 	private $senha = '';

 	private $database = 'kcasamento';

 	public function conecta_mysql(){

 		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);


 		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();	
		}

		return $con;

 	}
}

?>