<?php


	//criando constantes para conexão no hostinger
	define('HOST','mysql.hostinger.com.br');
	define('USER','u901689881_cipgd');
	define('PASS','jo@_316');
	define('BASE','u901689881_cipgd');

	///criando constantes para conexão local
/*	define('HOST','localhost');
	define('USER','root');
	define('PASS','admin');
	define('BASE','cipgd');
	*/

class ConexaoPDO
{
	

	/*private $HOS_T=HOST;
	private $USE_R=USER;
	private $PAS_S=PASS;
	private $BAS_E=BASE;*/
	
	function ConexaoComBanco(){
		try{
			$pdo = new PDO("mysql:host=" . HOST . "; dbname=" . BASE, USER, PASS);
			
			if($pdo){
				return $pdo;
				}else{
			
			echo 'Erro na class ConexaoPDO';
			}
		}
		catch(PDOException $e){
		//	echo 'Erro NO ARQUIVO CONEXÃO.PHP: ' . $e->getMessage;
		}
	}	
}

?>