<?php
class FachadaDeletar
{
//select 3
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
//$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);


	function deletar_linha_qualquer_tabela($tabela, $mat){
			/* Variáveis PDO */
			$base_dados = 'u901689881_cipgd';
			$usuario_bd = 'u901689881_cipgd';
			$senha_bd   = 'jo@_316';
			$host_db    = 'mysql.hostinger.com.br';
			$conexao_pdo = null;
			
			/* Concatenação das variáveis para detalhes da classe PDO */
			$detalhes_pdo = 'mysql:host=' . $host_db . ';dbname='. $base_dados;
			
			// Tenta conectar
			try {
				// Cria a conexão PDO com a base de dados
				$conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);
				
					// Prepara o comando a ser executado
					$prepara = $conexao_pdo->prepare("DELETE FROM " . $tabela . " WHERE Matricula = ?");
					 
					// Parâmetros do comando SQL
					$parametros = array( $mat );
					 
					// Executa o comando
					$verifica = $prepara->execute( $parametros );
					 
					// Verifica se o comando foi executado
					if ( $verifica ) {
						echo 'Linha excluída.';
					} else {
						$erro = $prepara->errorInfo();
						echo 'Ocorreu um erro na sua consulta. <br>';
						echo 'Erro: ' . $erro[2];
					}

			} catch (PDOException $e) {
				// Se der algo errado, mostra o erro PDO
				print "Erro: " . $e->getMessage() . "<br/>";
				
				// Mata o script
				die();
			}
/*		try { 
			$pdo = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u244186567_cipgd', "u244186567_root", "jo@_316"); 
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
			$stmt = $pdo->prepare('DELETE FROM ' . $tabela . 'WHERE Matricula = :'.$mat); 
			$stmt->bindParam(':mat', $mat); 
			$stmt->execute(); echo $stmt->rowCount(); 
			} catch(PDOException $e) { 
				echo 'Erro ao deletar. No método functio deletar_linha_qualquer_tabela: ' . $e->getMessage(); 
			}
*/
	}
	
	
	function deletar_linha_especificada($pdo, $tabela, $cod)
	{

			echo 'aqui';
		try{
			$sql = "DELETE FROM $tabela WHERE Cod =  :Cod";
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':Cod', $cod, PDO::PARAM_INT);   
			$stmt->execute();
		}
		catch(PDOException $e)
		{
			echo $sql . "<br>" . $e->getMessage();
		}
			
	}//end
	
	
	function deletar_linha_tabela_efetivo_cipgd_tb($pdo, $tabela, $mat)
	{

			echo 'aqui';
			
			$delete = $pdo->query("DELETE FROM $tabela WHERE Matricula like '" . $mat . "'");
			if($delete){
				echo "<br/>"  . 'Não existe mais em nosso banco de dados a mat: ' . $mat. "<br/>";
		}else{
				echo "<br/>"  .'Falha ao deletar ao deletar mensagens de ' . $mat . "<br/>";
				}
	}//end

	function deletar_especificado($pdo, $tabela, $email)
	{


			$delete = $pdo->query("DELETE FROM $tabela WHERE email like '" . $email . "'");
//			if($delete){
				echo "<br/>"  . 'Não existe mais em nosso banco de dados o e-mail: ' . $email. "<br/>";
	//		}else{
		//		echo "<br/>"  .'Falha ao deletar ao deletar mensagens de ' . $email . "<br/>";
			//	}
	}//end
	

	function deletar_foto($pdo, $tabela, $foto)
	{

			echo 'aqui';
			
			$delete = $pdo->query("DELETE FROM $tabela WHERE foto like '" . $foto . "'");
//			if($delete){
				echo "<br/>"  . 'Não existe mais em nosso banco de dados o e-mail: ' . $email. "<br/>";
	//		}else{
		//		echo "<br/>"  .'Falha ao deletar ao deletar mensagens de ' . $email . "<br/>";
			//	}
	}//end
	
	function deletar_todas($pdo, $tabela)
	{

			
			$delete = $pdo->query("DELETE FROM email WHERE email like email");
			if($delete){
				echo "<br/>" . 'Sucesso ao deletar todas as mensagens' . "<br/>";
			}else{
				echo "<br/>" . 'Erro ao deletar todas as mensagens' . "<br/>";
				}
	}//end
}
?>