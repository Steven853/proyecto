<?php 
	
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'proyecto';

	$conection = @mysqli_connect($host,$user,$password,$db);

	if(!$conection){
		echo "Error en la conexión";
	}

?>