<?php
//(1)
	$host = "localhost";
	$usuario = "root";
	$senha = "infotec";
	$nome_do_banco = "banco_sisaca";

	// Create connection
	$conn = new mysqli($host, $usuario, $senha);
	
	// Check connection
	if ($conn->connect_error) {
		die("Falha na conex�o: " . $conn->connect_error);
	} 
	//echo "Conex�o com sucesso";
	
?>