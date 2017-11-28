<?php
	@session_start();
	 if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) { 
				  unset($_SESSION['login']); 
				  unset($_SESSION['senha']);
				  header('location:index.php'); 
	  } 
	  $logado = $_SESSION['login'];
?>
<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css"/>



        <title>PM-RN/CIPGD</title>
        <!--menu anima usando jquery e kwiks-->
        <script type="text/javascript" src="menuTop/jquery.js"></script>
        <script type="text/javascript" src="menuTop/kwicks.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.anime').kwicks({
                    max: 200,
                    duration: 400
                });
            });
        </script>

        <!--end menu animado-->
        
        <!--verifica-->
		<script type="text/javascript" language="JavaScript">
        function verificar()
        {
            var _pswnewsuer=document.getElementById("pswnewsuer");
            var _pswnewsuer2=document.getElementById("pswnewsuer2");
			var mat=document.getElementById("mat");

            var form_newuser=document.getElementById("form_newuser");
			
            if ((_pswnewsuer.value == _pswnewsuer2.value)&&((_pswnewsuer.value != "") && (_pswnewsuer2.value != ""))&&(mat.value!= ""))
            {
                form_newuser.submit();
            }
            else
            {
                  window.alert("\n\n\nErros nas senhas! Verifique se são iguais ou se algum campo está vazio!\n\n");
            }
        }
        </script>
        <!--end verifica-->
        
	<!--respon-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boot -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>

        <form name="form_newuser" action="persistir_newuser.php" method="post">
            <div id="principal"> 
                <div id="Topo">
                                       <!--start menu-->
<div class="bs-docs-example">
            <div id="navbar-example" class="navbar navbar-static">
              <div class="navbar-inner">
                <div class="container" style="width: auto;">
                  <a class="brand" href="#">CIPGD</a>
                  <ul class="nav" role="navigation">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="selecao_pracaoficial.php">CADASTRAR</a></li>
       <!--             <li class="dropdown">
                      <a id="drop1" href="selecao_pracaoficial.php" role="button" class="dropdown-toggle" data-toggle="dropdown">CADASTRAR <b class="caret"></b></a> 

                    </li>-->
                    <li class="dropdown">
                      <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">PESQUISAR<b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="pesquisa_efetivo.php">EXIBIR EFETIVO</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="pesquisa_ficha_disciplinar.php">FICHA DISCIPLINAR</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="pesquisa_ficha_sgts.php">FICHA DE RECONHECIMENTO DOS SGTs</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="quantitativo_efetivo.php">QUANTITATIVO POSTO/GRADUAÇÃO</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="pesquisa.php">PESQUISA DADOS DO MILITAR</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="checksbox.php">SELECIONAR DADOS PARA PESQUISA</a></li>
<!--                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li> -->
                      </ul>
                    </li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="info_mat_edicao.php">EDITAR DADOS</a></li>
<!--                    <li class="dropdown">
                      <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">EDITAR DADOS <b class="caret"></b></a>
                    </li>-->
                  </ul>
                  <!--<ul class="nav pull-right">
                    <li id="fat-menu" class="dropdown">
                      <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">AJUDA <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CONTATO</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">SUGESTÕES</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ÇSAJDLK</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ÇLSDKJ</a></li>
                      </ul>
                      -->
                    </li>
                  </ul>
                </div>
              </div>
            </div> <!-- /navbar-example -->
          </div>
                                       <!--endding menu-->                        
                    <center>
                        <div id="menuTopp">

                            <ul class="anime">
                               <?php 
							   /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php. 
session_start();*/ 

/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php. */
session_start();
 if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) { 
 			  unset($_SESSION['login']); 
 			  unset($_SESSION['senha']);
			  header('location:index.php'); 
  } 
  $logado = $_SESSION['login'];
  

  $msg = "" + $_REQUEST['msg'] +"";
                                ?>         
							 <?php
							 	//echo "resultado do (strcmp($_REQUEST['msg'], 1) = " . strcmp($_REQUEST['msg'], 1);
							 //   echo "resultado do (strcmp($_REQUEST['msg'], '1') = " . strcmp($_REQUEST['msg'], '1');
							 //	echo "resultado do (strcmp($_REQUEST['msg'], "1") = " . strcmp($_REQUEST['msg'], "1");
								
                                if (strcmp($_SESSION['tipo'], "1") == 0) {
								
                                      /* echo "<li class=\"cadastrar\"><a href=\"selecao_pracaoficial.php\" class=\"menuElegente\"></a></li>";
                                       echo "<li class=\"pesquisa\"><a href=\"tomada_de_decisao_pesquisa.php\" class=\"menuElegente\"></a></li>";
                                       echo "<li class=\"editardados\"><a href=\"info_mat_edicao.php\" class=\"menuElegente\"></a></li>";
									   */
									   ?>
									   

									   
									   <?php
    //                                    out.print("<li class=\"pesquisa\"><a href=\"#\" class=\"menuElegente\"></a></li>");
	   									 // echo "<br/><br/><br/>entrou como admin: " . $_REQUEST['msg'];
										 
                                    } else {
    //                                    out.print("<li alt=\"Área restrita.\" title=\"Área restrita.\" class=\"home\"><a href=\"#\" class=\"menuElegente\"></a></li>");
                                         echo "<li class=\"pesquisa\"><a href=\"tomada_de_decisao_pesquisa.php\" class=\"menuElegente\"></a></li>";
                                         echo "<li alt=\"Área restrita.\" title=\"Área restrita.\" class=\"contato\"><a href=\"#\" class=\"menuElegente\"></a></li>";
    //                                    out.print("<li alt=\"Área restrita.\" title=\"Área restrita.\" class=\"download\"><a href=\"#\" class=\"menuElegente\"></a></li>");
    //                                    out.print("<li alt=\"Área restrita.\" title=\"Área restrita.\" class=\"pesquisa\"><a href=\"#\" class=\"menuElegente\"></a></li>");

                                    }
                                ?>
                               
                            </ul>
                        </div>
                    </center>

                </div>
                <div id="Esq">
               	<?php
						echo "     Você está logado como ".$_SESSION['login'] . "<br >";
						
						if(strcmp($_SESSION['login'], "cipgdadmin")==0){

				//informações dos selects


    include_once 'classes/ConexaoPDO.class.php';
    include_once 'classes/FachadaPersistencia.class.php';
    
	include_once 'classes/FachadaDeletar.class.php';
									//$_REQUEST – Variável em PHP que verifica tanto os valores passados por $_GET e por $_POST. $_REQUEST – Variável em PHP que verifica tanto os valores passados por $_GET e por $_POST. 
?>
 <br><br>
 <fieldset class="butGray2">

  <legend>ALTERAÇÕES RECENTES:</legend>
<?php
    include_once 'classes/ConexaoPDO.class.php';
    include_once 'classes/FachadaPersistencia.class.php';
    
	include_once 'classes/FachadaDeletar.class.php'; 
//Dados de acesso
/*$host = "localhost";
$dbn  = "cipgd";
$user = "root";
$pass = "admin";
 */
 
 //acesso remoto hosting
$host = "mysql.hostinger.com.br";
$dbn  = "u901689881_cipgd";
$user = "u901689881_cipgd";
$pass = "jo@_316";
$tabela = "AlteracoesRecentes_tb";
 
	try
	{
		//Conectar
		$ligacao = new PDO("mysql:dbname=$dbn; host=$host", $user, $pass);
		$ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 
		//Em caso de pesquisas, via procedures
		//$pesq = "";
		//$sql = "CALL Nome_da_procedure()";
	 
		//Em caso de querys
		$pesq = "mat";
		$sql = "SELECT * FROM AlteracoesRecentes_tb ORDER BY cod DESC";
	//	echo "<br /><br /><br />Matrícula: ".$_REQUEST['mat']."<br /><br /><br /><br />";
	 
		$resultados = $ligacao->prepare($sql);
	 
		//Definição de parâmetros
		$resultados->bindParam(":nome_param", $pesq, PDO::PARAM_STR);
		$resultados->execute();
	 
	 	$contAlteracoes = 0;
		//echo'<p>'.$sql.'</p><hr>';
		
		$vetorUnidimensional = array(".");		

		foreach($resultados as $linha)
		{
						$data = $linha['data'];
						////array_unshift($vetorUnidimensional, $data);

						/*if (array_key_exists($linha['data'], $vetorUnidimensional)) {
							 echo "<br >" . " O elemento " . $data . " existe dentro do array <br >";
						}else{
						
							$vetorUnidimensional[$contAlteracoes] = $linha['data'];
							echo "Add valor: " . $vetorUnidimensional[$contAlteracoes]. "<br >";
						}
						*/
						$auxElementoNaoExiste = 1;
						for($i=0; $i<count($vetorUnidimensional); $i++){
							if(strcmp($vetorUnidimensional[$i], $linha['data'])==0){
								$auxElementoNaoExiste = 0;
								break;
							}else{
								$auxElementoNaoExiste=1;
							}
						}
						
						
						if($auxElementoNaoExiste==1){
									$vetorUnidimensional[$contAlteracoes] = $linha['data'];								
									$contAlteracoes++;
									if(($contAlteracoes%2) == 0){
									?>
									
									<a href="alteracoesRecentes.php" alt="<?php echo  $linha['data']; ?>" title="<?php echo  $linha['data']; ?>" class="style_1">
                                    	
										<?php 
											if(strcmp($linha['data'], "")==0){
												echo  "-------"; 
											}else{
												echo  $linha['data']; 
											}

										?>
                                        
									</a>
									<br >
				<?php
									}else{
									?>
									
									<a href="alteracoesRecentes.php" alt="<?php echo  $linha['data']; ?>" title="<?php echo  $linha['data']; ?>" class="style_2">
										<?php 
											if(strcmp($linha['data'], "")==0){
												echo  "-------"; 
											}else{
												echo  $linha['data']; 
											}

										?>
									</a>
									<br >
				<?php
									}
						}
						

						
				 		if($contAlteracoes==16){
							break;
						}
				 		
			
		}
								
		//Desconectar
		$ligacao = null;
		}
		
		catch(PDOException $erro)
		{
			echo $erro->getMessage();
		}
		
 
	}
	
	
?>  
 </fieldset>
 
 
 <!--AFASTAMENTOS EXPIRADOS:-->
 <br ><br >
 <fieldset class="butGray2">

  <legend>AFASTAMENTOS EXPIRADOS:</legend>
<?php
    include_once 'classes/ConexaoPDO.class.php';
    include_once 'classes/FachadaPersistencia.class.php';
    
	include_once 'classes/FachadaDeletar.class.php'; 
	//Dados de acesso
	/*$host = "localhost";
	$dbn  = "cipgd";
	$user = "root";
	$pass = "admin";
	 */
	 
	 //acesso remoto hosting
	$host = "mysql.hostinger.com.br";
$dbn  = "u901689881_cipgd";
$user = "u901689881_cipgd";
	$pass = "jo@_316";
	$tabela = "AlteracoesRecentes_tb";
	 
	$tabela2 = "Afastamento";
	$contAfastamento = 0;
	try
	{
		//Conectar
		$ligacao2 = new PDO("mysql:dbname=$dbn; host=$host", $user, $pass);
		$ligacao2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 
		//Em caso de pesquisas, via procedures
		//$pesq = "";
		//$sql = "CALL Nome_da_procedure()";
	 
		//Em caso de querys
		$pesq = "mat";
		//$sql = "SELECT * FROM $tabela2 WHERE Matricula='" . $_REQUEST['mat']."'";
		
		//dd-mm-aaaa aaaa-mm-dd
		$sql = "SELECT * FROM Afastamento ORDER BY SUBSTR( DataFim, 1, 4), SUBSTR( DataFim, 6, 2), SUBSTR( DataFim, 9, 2)";
	 
		$resultados2 = $ligacao2->prepare($sql);
	 
		//Definição de parâmetros
		$resultados2->bindParam(":nome_param", $pesq, PDO::PARAM_STR);
		$resultados2->execute();
	 
		//echo'<p>'.$sql.'</p><hr>';
	 $contAfatamentoPendentes=0;
	foreach($resultados2 as $linha)
		{
		$contAfatamentoPendentes+=1;
		//echo "contAfatamentoPendentes = " . $contAfatamentoPendentes . "<br > data fim: " . $linha['DataFim'] . "<br >";
				 ?>
    <?php 
		$dataHoje = date('Y-m-d');
		$dataExpirada = $linha["DataFim"];
		
		// agora está no padrão americano
		/*
		$data_01_americano = converte_data($dataHoje);

		$data_02_americano = converte_data($dataExpirada);
		*/
		
		$data_no_padrao_americano_yyyy_mm_dd_01 = strtotime($dataHoje);
		$data_no_padrao_americano_yyyy_mm_dd_02 = strtotime(SUBSTR( $dataExpirada, 1, 10));//coloquei SUBSTR porque tinha uns números a mais depois da data

		// converte a datas americanas
		// para timestamps numéricos

		$subtracaoDasDatas = ($data_no_padrao_americano_yyyy_mm_dd_02 - $data_no_padrao_americano_yyyy_mm_dd_01);
		$dias = (int)floor( $subtracaoDasDatas / (60 * 60 * 24)); // 225 dias
		//echo "<br > datas do jeito que está no sistema: $dataHoje e " . $linha['DataFim'];
		//echo "<br > a segunda data com substrig: $dataHoje e " . SUBSTR( $dataExpirada, 1, 10);
		//echo "<br > diferença em dias: " . $dias . "<br >";
		//echo SUBSTR( $dataExpirada, 1, 10). " <br >";
		
		
		//echo "<br > $dias <br >";
		if($dias<=0){
			if(strcmp($linha['Situacao'], "0") == 0){
				if(($contAfatamentoPendentes%2)==0){
				?>
						<!--se a data expirar, o valor 1 do input abaixo setará o militar como pronto, pois já era para ter se apresentado-->        
                        <a href="editar_dados.php?mat=<?php echo $linha['Matricula'];?>"alt="<?php echo  $linha['DataFim']." - ". $linha['Matricula']; ?>" title="<?php echo  $linha['DataFim']." - ". $linha['Matricula']; ?>" class="style_1">
							<?php 
						//	echo  $linha['DataFim']." - ". $linha['Matricula']; 
                            echo SUBSTR( $linha['DataFim'], 8, 2) . "/" . SUBSTR( $linha['DataFim'], 5, 2) . "/". SUBSTR( $linha['DataFim'], 0, 4)." - Mat:". $linha['Matricula']; 
							?>
                      

                        </a>   
                        <br >
				<?php
				}else{
				?>
						<!--se a data expirar, o valor 1 do input abaixo setará o militar como pronto, pois já era para ter se apresentado-->        
                        
                        <a href="editar_dados.php?mat=<?php echo $linha['Matricula'];?>" alt="<?php echo  $linha['DataFim']." - ". $linha['Matricula']; ?>" title="<?php echo  $linha['DataFim']." - ". $linha['Matricula']; ?>" class="style_2"> 					
							<?php 
							//echo  $linha['DataFim']." - ". $linha['Matricula']; 
                            echo SUBSTR( $linha['DataFim'], 8, 2) . "/" . SUBSTR( $linha['DataFim'], 5, 2) . "/". SUBSTR( $linha['DataFim'], 0, 4)." - Mat:". $linha['Matricula']; 
							?>
                       </a>     
						<br >
				<?php
				}
			}
		}
			
		}
		//Desconectar
		$ligacao2 = null;
		}
		catch(PDOException $erro2)
		{
			echo $erro2->getMessage();
		}
	?>
 </fieldset>
                </div>


                <div id="Center">

				<center>
    <?php
				//informações dos selects


    include_once 'classes/ConexaoPDO.class.php';
    include_once 'classes/FachadaPersistencia.class.php';
    
	include_once 'classes/FachadaDeletar.class.php';

	
										$conexao = new ConexaoPDO;//fazendo conexão com o banco
										
										$pdo = $conexao->ConexaoComBanco();//pegando o retorno da conexão e colocando em $pdo
										
										//setando algusn atibutos
										$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
										$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);

										 
										 
										$fachadaP = new FachadaPersistencia;



			if((strcmp($_REQUEST['usuario'], "1pel")==0)||(strcmp($_REQUEST['usuario'], "2pel")==0)||(strcmp($_REQUEST['usuario'], "3pel")==0)||(strcmp($_REQUEST['usuario'], "4pel")==0)||(strcmp($_REQUEST['usuario'], "scs")==0))		
												{
												$result = $fachadaP->PersistirNewUser($pdo, $_REQUEST['txtMtricula'], $_REQUEST['usuario'],$_REQUEST['pswnewsuer'], "1");
//												echo "<br />dados: " . $_REQUEST['txtMtricula'] . "; ". $_REQUEST['usuario']. "; ".$_REQUEST['pswnewsuer'];
											?>
                                            	
                                                <div class="alert alert-success">
                                                  Usuário cadastrado com sucesso!
                                                </div>
                                            <?php
											
											}else{
												echo "<br />dados: " . $_REQUEST['txtMtricula'] . "; ". $_REQUEST['usuario']. "; ".$_REQUEST['pswnewsuer'];
//												$result = $fachadaP->PersistirNewUser($pdo, $_REQUEST['txtMtricula'], $_REQUEST['usuario'],$_REQUEST['pswnewsuer'], "0");
											?>
                                                <div class="alert alert-success">
                                                  Usuário cadastrado com sucesso!
                                                </div>
                                            <?php
											}
											
?>
</div>
                
                  <div id="Dir">
                    <br/><br/><br/>
                    <form name="form_cadastro" id="form_cadastro" action="encerrar_sessao.php" method="post">
                        <input type="submit" value="Sair" class="encerrarSessao"/>
                    </form> 
                    
                    <br /><br /><br /><br />
                    <?php
						if(strcmp($_SESSION['login'], "cipgdadmin")==0){
					?>	 <a href="adduser.php"  class="btn btn-primary btn-large">
                    		<small><small>
						      Adicionar novo usuário
                            </small></small>
						</a>
                     <?php
					        
						}
                    ?>
                </div>
                <div id="Rodape">.</div>
            </div>
        
       
    </body>
</html>

