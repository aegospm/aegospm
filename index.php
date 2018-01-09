<?php
	include_once '../classes/ConexaoPDO.class.php';		
//	include_once '../classes/FachadaPersistencia.class.php';
	
	if(isset($_REQUEST['entrar'])){
												try{
														$conexao = new ConexaoPDO;//fazendo conexão com o banco
																						
														$pdo = $conexao->ConexaoComBanco();//pegando o retorno da conexão e colocando em $pdo
																						
														//setando algusn atibutos
														$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
														$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
														
														$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
														//Em caso de querys
														$sql = "SELECT * FROM login_sorveteria";
													 	
													 //	echo $matricula . "<br />";
													//	echo date('Y-m-d'). "<br />";
														
														$resultados = $pdo->prepare($sql);
													 
														//Definição de parâmetros
														$resultados->bindParam(":nome_param", $pesq, PDO::PARAM_STR);
														$resultados->execute();
													
													//echo'<p>'.$sql.'</p><hr>';
														
													
													//echo '<hr><p>Resultados: '.$resultados->rowCount().'</p>';
													$flag_existe = false;
													foreach($resultados as $linha)
													{			
														if((strcmp($linha['login'], $_REQUEST['login'])==0)&&(strcmp($linha['senha'], $_REQUEST['senha'])==0)){
															echo "ok";
															$flag_existe = true;
															
															session_start();
															$_SESSION['login'] = $linha['login']; 
															$_SESSION['senha'] = $linha['senha'];
															$_SESSION['privilegio'] = $linha['privilegio'];
															header('location:opcoes.php');
														}
													}
													
													}catch(PDOExcetion $erro){
														echo $erro->getMessage();
													}

	}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Sorveteria</title>
        <link href="css/style.css" rel="stylesheet" >
	<!--respon-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Boot -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="../http://code.jquery.com/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script>
		function verificar() {
			var _login = document.getElementById("login");
			var _senha = document.getElementById("senha");
			var _logar = document.getElementById("form_login");
			if ((_login.value == "") || (_senha.value == "")) {
				window.alert("Preencha todos os campos!");
				return false;//retorna para a tab <form
			} else {
				_logar.submit();
				return true;//retorna para a tag <form
			}
		}
	</script>
    
    </head>
    
    <body>
		<div id="principal">
            <header>
                <h1>Logo da sorveteria</h1>
            </header>
            <section id="login">
                
                <article id="login">
                    <form action="index.php" method="post" name="form_login" >
                      <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" id="login" name="login" placeholder="Login" style="width:15em;">
                      </div>
                      <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" style="width:15em;">
                      </div>

                      <button type="submit" class="btn btn-default" onclick="return verificar()" name="entrar" id="entrar">Entrar</button>
                    </form>
                    <?php
						if(isset($flag_existe)){
													if(!$flag_existe){
														?>
														<div class="alerta error">
															Login não existe!
														</div>
														<?php
													}
						}
                    ?>
                </article>
            </section>
            <footer>
                rodapé
            </footer>
        </div>
    </body>
</html>
