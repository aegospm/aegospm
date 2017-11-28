<?php

// sql para criar tb
$sql = "CREATE TABLE IF NOT EXISTS `aluno` (`nome` varchar(255) NOT NULL, `cpf` varchar(15) NOT NULL, `idade` int(3) NOT NULL, `sexo` varchar(15) NOT NULL, PRIMARY KEY (`cpf`))";
//ver colunas: SHOW COLUMNS FROM aluno;
if ($conn->query($sql) === TRUE) {
	//echo "Tabela aluno criado com sucesso";
} else {
	echo "Erro ao criar tabela: " . $conn->error;
}

?>