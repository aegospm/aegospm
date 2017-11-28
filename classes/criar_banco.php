<?php
// Create database
$sql = "CREATE DATABASE banco_sisaca";
if ($conn->query($sql) === TRUE) {
    echo "Banco criado com sucesso";
} else {

	echo "<br />".$conn->error . "<br />";

	$banco_existe = substr($conn->error, strlen($conn->error)-15, 15);
	
	echo $banco_existe . "<br />";
	
	if(strcmp("database exists", $banco_existe)==0){
	//	echo "Banco já existe no nosso sistema";
	}else{
		echo "Houve o seguinte erro na criação do banco: " . $conn->error;
	}
}
//$conn->close();
?>