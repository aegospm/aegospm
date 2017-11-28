<?php
/*
- limites de alunos por turma: 40
- aula de responsividade

*/
class ManipularDadosMsqli{

	public function PersistirDadosDisciplina($conn, $nome){
		
		$sql = "INSERT INTO disciplina (nome) VALUES ('".$nome."')";
		
		if ($conn->query($sql) === TRUE) {
			return 1; //1 indica sucesso
		} else {
			return $conn->error;//echo "Erro na query: " . $sql . "<br>Tipo do erro: " . $conn->error;
		}
    
    }	
	public function PersistirFoto($conn, $matricula, $foto){
		
		$sql = "INSERT INTO foto (matricula, foto) VALUES ('$matricula', '$foto')";
		
		if ($conn->query($sql) === TRUE) {
			return 1; //1 indica sucesso
		} else {
			return $conn->error;//echo "Erro na query: " . $sql . "<br>Tipo do erro: " . $conn->error;
		}
    
    }

	public function PesquisarIdFoto($conn, $matricula){

		$sql = "SELECT foto FROM foto WHERE matricula='$matricula'";
		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// saída de dados para cada linha
			while($row = $result->fetch_assoc()) {
				return $row["foto"];
			}
		} else {
			return $conn->error;
		}
	}
	
    public function PersistirDadosAluno($conn, $aluno){


		$sql = "INSERT INTO aluno (matricula, cpf, nome, sobrenome, genero, data_de_nascimento, uf_nascimento, nacionalidade, rg, orgao_emissor, etnia, email, celular, atendimento_espeial) VALUES ('".$aluno->getMatricula()."', '".$aluno->getCpf()."', '".$aluno->getNome()."', '".$aluno->getSobrenome()."', '".$aluno->getGenero()."', '".$aluno->getData_de_nascimento()."', '".$aluno->getUf_nascimento()."', '".$aluno->getNacionalidade()."', '".$aluno->getRg()."', '".$aluno->getOrgao_emissor()."', '".$aluno->getEtnia()."', '".$aluno->getEmail()."', '".$aluno->getCelular()."', '".$aluno->getAtendimento_especial()."')";
		
		if ($conn->query($sql) === TRUE) {
			return 1; //1 indica sucesso
		} else {
			if(strcmp(substr($conn->error, 0, 15), "Duplicate entry")==0){
				 return 2;//cpf já existe
			}else{
				return 0;//echo "Erro na query: " . $sql . "<br>Tipo do erro: " . $conn->error;
			}
		}
    
    }
    public function PersistirDadosprofessor($conn, $professor){
		echo "'".$professor->getCpf() . "'<br /> '"; 
		echo $professor->getMatricula(). "'<br /> '"; 
		echo $professor->getNome(). "'<br /> '"; 
		echo $professor->getSobrenome(). "'<br /> '"; 
		echo $professor->getGenero(). "'<br /> '"; 
		echo $professor->getEmail(). "'<br /> '"; 
		echo $professor->getCelular(). "'<br /> '"; 
		echo $professor->getEscolaridade(). "'<br /> '";
		 echo $professor->getFormacao(). "'<br /> '"; 
		 echo $professor->getA_1_ano(). "'<br /> '"; 
		 echo $professor->getA_2_ano(). "'<br /> '"; 
		 echo $professor->getA_3_ano(). "'<br /> '"; 
		
		$sql = "INSERT INTO professor (matricula, cpf, nome, sobrenome, genero, email, celular, telefone, atendimento_especial, escolaridade, formacao, A_1_ano, A_2_ano, A_3_ano) VALUES ('".$professor->getMatricula()."', '".$professor->getCpf()."', '".$professor->getNome()."', '".$professor->getSobrenome()."', '".$professor->getGenero()."', '".$professor->getEmail()."', '".$professor->getCelular()."', '".$professor->getCelular()."', '".$professor->getAtendimento_especial()."', '".$professor->getEscolaridade()."', '".$professor->getFormacao()."', '".$professor->getA_1_ano()."', '".$professor->getA_2_ano()."','".$professor->getA_3_ano()."')";
		
		if ($conn->query($sql) === TRUE) {
			return 1; //1 indica sucesso
		} else {
			if(strcmp(substr($conn->error, 0, 15), "Duplicate entry")==0){
				 return 2;//cpf já existe
			}else{
				return $conn->error;//echo "Erro na query: " . $sql . "<br>Tipo do erro: " . $conn->error;
			}
		}
    
    }	  

    public function PersistirLogin($conn, $login, $senha, $cpf, $privilegio){
		
		$sql = "INSERT INTO login (login, senha, cpf, privilegio) VALUES ('".$login."', '".$senha."', '".$cpf."', '".$privilegio."')";
		
		if ($conn->query($sql) === TRUE) {
			return 1; //1 indica sucesso
		} else {
			if(strcmp(substr($conn->error, 0, 15), "Duplicate entry")==0){
				 return 2;//cpf já existe
			}else{
				return $conn->error;//echo "Erro na query: " . $sql . "<br>Tipo do erro: " . $conn->error;
			}
		}
    
    }	  

    public function PersistirDados($conn, $nome, $cpf, $idade, $sexo){
		// Montamos a consulta SQL
		$sql = "INSERT INTO aluno (nome, cpf, idade, sexo) VALUES ('".$nome."', '".$cpf."', '".$idade."', '".$sexo."')";
		if ($conn->query($sql) === TRUE) {
			return 1; //1 indica sucesso
		} else {
			if(strcmp(substr($conn->error, 0, 15), "Duplicate entry")==0){
				 return 2;//cpf já existe
			}else{
				return 0;//echo "Erro na query: " . $sql . "<br>Tipo do erro: " . $conn->error;
			}
		}
    }
   public function PersistirDadosescolares($conn, $cpf, $mat, $serie, $turma, $turno){
		
		$sql = "INSERT INTO dados_escolares (cpf, matricula, serie, turma, turno) VALUES ('$cpf', '$mat', '$serie', '$turma', '$turno')";
		
		if ($conn->query($sql) === TRUE) {
			return 1; //1 indica sucesso
		} else {
			if(strcmp(substr($conn->error, 0, 15), "Duplicate entry")==0){
				 return 2;//cpf já existe
			}else{
				return $conn->error;//echo "Erro na query: " . $sql . "<br>Tipo do erro: " . $conn->error;
			}
		}
    }	
	
    public function PersistirMensagem($conn, $nome, $assunto, $mensagem, $matricula, $cpf){
		// Montamos a consulta SQL
		$sql = "INSERT INTO mensagem (nome, assunto, mensagem, matricula, cpf_aluno, confirmacao) VALUES ('".$nome."', '".$assunto."', '".$mensagem."', '".$matricula."', '".$cpf."', '0')";

		if ($conn->query($sql) === TRUE) {
			return 1; //1 indica sucesso
		} else {
			return 0;//echo "Erro na query: " . $sql . "<br>Tipo do erro: " . $conn->error;
		}
    }
	
	public function PersistirTurma($conn, $nome, $ano){
		$sql = "INSERT INTO turma (nome, ano) values('$nome', '$ano')";
		if($conn->query($sql) === true){
			return 1;
		}else{
			return $conn->error;
		}
		
	}
    public function AtualizarLeitura($conn, $codigo){
		// Montamos a consulta SQL
		$sql = "UPDATE mensagem SET confirmacao='1' WHERE cod like '$codigo'";

		if ($conn->query($sql) === TRUE) {
			return 1; //1 indica sucesso
		} else {
			return 0;//echo "Erro na query: " . $sql . "<br>Tipo do erro: " . $conn->error;
		}
    }	   
	public function PesquisarDados($conn, $login, $senha){

		$sql = "SELECT * FROM login WHERE login='$login' and senha='$senha'";
		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// saída de dados para cada linha
			while($row = $result->fetch_assoc()) {
				return $row["privilegio"];
			}
		} else {
			return $conn->error;
		}
	}
	public function PesquisarCPF($conn, $login, $senha){

		$sql = "SELECT * FROM login WHERE login='$login' and senha='$senha'";
		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// saída de dados para cada linha
			while($row = $result->fetch_assoc()) {
				return $row["cpf"];
			}
		} else {
			return $conn->error;
		}
	}	
	public function PesquisarDadosMatricula($conn, $login, $senha){

		$sql = "SELECT * FROM login WHERE login='$login' and senha='$senha'";
		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// saída de dados para cada linha
			while($row = $result->fetch_assoc()) {
				return $row["cpf"];
			}
		} else {
			return 0; //$conn->error;
		}
	}
	
	public function PesquisarNomeProfessor($conn, $cpf){

		$sql = "SELECT * FROM professor WHERE cpf='$cpf'";
		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// saída de dados para cada linha
			while($row = $result->fetch_assoc()) {
				return $row["nome"];
			}
		} else {
			return 0; //$conn->error;
		}
	}
	
	public function PesquisarNomeAluno($conn, $cpf){

		$sql = "SELECT * FROM aluno WHERE cpf='$cpf'";
		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// saída de dados para cada linha
			while($row = $result->fetch_assoc()) {
				return $row["nome"];
			}
		} else {
			return 0; //$conn->error;
		}
	}
	

	
	public function PesquisarMensagensProfessor($conn, $nome_sobrenome){

		$sql = "SELECT * FROM mensagem WHERE nome ='$nome_sobrenome'";
		
		$result = $conn->query($sql);
		$cont = 0;

		if ($result->num_rows > 0) {
			// saída de dados para cada linha
			while($row = $result->fetch_assoc()) {
				$cont = $cont + 1;
			}
			return $cont;
		} else {
			return $conn->error; //$conn->error;
		}
	}
	
	public function PesquisarMensagensProfessor2($conn, $nome_sobrenome){

		$sql = "SELECT * FROM mensagem WHERE nome ='$nome_sobrenome'";
		
		$result = $conn->query($sql);
		$cont = 0;

		if ($result->num_rows > 0) {
			// saída de dados para cada linha
			while($row = $result->fetch_assoc()) {
				$cont = $cont + 1;
			}
			return $cont;
		} else {
			return $conn->error; //$conn->error;
		}
	}
	
	public function PesquisarDadosVetorUpdate($conn, $cpf, $tabela){
		$arr = [];
		
		$sql = "SELECT * FROM $tabela WHERE cpf like '$cpf'";
		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// saída de dados para cada linha
			while($row = $result->fetch_assoc()) {
				$arr[0] = $row["nome"];
				$arr[1] = $row["cpf"];
				$arr[2] = $row["idade"];
				$arr[3] = $row["sexo"];
				return $arr;
			}
		} else {
			return "Sem resultados da pesquisa!";
		}
	}
	//este método não cria outro vetor
	public function PesquisarDadosVetorUpdate2($conn, $matricula, $tabela){
		$arr = [];
		
		$sql = "SELECT * FROM $tabela WHERE matricula like '$matricula'";
		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// saída de dados para cada linha
			return $result->fetch_assoc();

		} else {
			return "Sem resultados da pesquisa!";
		}
	}	
	public function DeletarDados($conn, $matricula, $tabela){
		// sql para deletar tupla
		$sql = "DELETE FROM $tabela WHERE matricula like '$matricula'";
		
		if ($conn->query($sql) === TRUE) {
			return 1;//deletou com sucesso
		} else {
			return $conn->error; //sem sucesso para deletar
		}
	}
	
	public function AtualizarDados($conn, $matricula, $cpf, $nome, $sobrenome, $genero, $data_de_nascimento, $uf_nascimento, $nacionalidade, $rg, $orgao_emissor, $etnia, $email, $celular, $atendimento_espeial){
		echo $matricula ."<br />". $cpf ."<br />". $nome ."<br />". $sobrenome ."<br />". $genero ."<br />". $data_de_nascimento ."<br />". $uf_nascimento ."<br />". $nacionalidade ."<br />". $rg ."<br />" . $orgao_emissor ."<br />". $etnia ."<br />". $email ."<br />". $celular ."<br />". $atendimento_espeial;
		
		/*	$sql = "UPDATE aluno SET cpf='$cpf', 
			nome='$nome', 
			sobrenome='$sobrenome', 
			genero='$genero',
			data_de_nascimento='$data_de_nascimento', 
			uf_nascimento='$uf_nascimento', 
			nacionalidade='$nacionalidade',
			rg='$rg', 
			orgao_emissor='$orgao_emissor', 
			etnia='$etnia',
			email='$email', 
			celular='$celular', 
			atendimento_espeial='$atendimento_espeial' 
			WHERE matricula like '$matricula'";
			 
			echo "valor do if: " . $conn->query($sql);
			if ($conn->query($sql) === TRUE) {
				return 1;
			} else {
				return $conn->error;
			}			
			*/
			
			 $bool = mysqli_query("UPDATE aluno SET cpf='$cpf', nome='$nome', sobrenome='$sobrenome', genero='$genero', data_de_nascimento='$data_de_nascimento', uf_nascimento='$uf_nascimento', nacionalidade='$nacionalidade', rg='$rg', orgao_emissor='$orgao_emissor', etnia='$etnia', email='$email', celular='$celular', atendimento_espeial='$atendimento_espeial' WHERE matricula like '$matricula'");
			 if ($bool) {
				return 1;
			} else {
				return 0;
			}

	}
	
	
	
}   

?>