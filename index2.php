<!--
- foi acrescentada a responsividade (menu e conteúdo)
- foi criada a parte de cadastro de turmas
- foi criada a tb dados escolares
- foi criada a classe Dadosescolares.class.pp
- já está inserindo dados da tbela dados_escolares

- lançar nota???
- histórico do aluno
- foto 


- cadastrar as notas (eu tenoh que selecionar a turma...)
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<title>SisAca</title>
	<!--chamndo meus css aqui dentro-->
		 <link href="css/modelo.css" rel="stylesheet" type="text/css"/>
	<!--fim dos css-->
    
	<!--respon-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--tags gap do phonegap-->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <!--end-->
            
    <!-- Boot -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- fim Bootstrap-->
    
 
</head>

<body class="logo">
	<div id="principal">
    
        <div id="Esq">

        </div>
        <div id="Center" align="center">
        	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

            <div style="background-color:#F4F4F4; width:40%" class="minha_borda1">
                <form action="index.php" method="post" name="form_login"  onsubmit="return verificar(this)">
                    <table>
                        <tr>
                            <td>
                                <img src="imagens/user.png" /> 
                            </td>
                            <td>
                                <input type="text" name="login" id="login" class="form-control"  placeholder="Seu login aqui" autofocus="autofocus" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                .
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="imagens/cadeado.png" />
                            </td>
                            <td>
                                <input type="password" name="senha" id="senha" class="form-control" placeholder="Sua senha"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                .
                            </td>
                        </tr>
                        <tr>
                            <td>
                                .
                            </td>
                        </tr>
                  </table>
                  <table>
                        <tr>
                            <td>
                                <input type="submit" name="botao" id="botao" value="Entrar" class="form-control" />
                            </td>
                        </tr>
                   </table> 
                   </form>
             </div>
           
            <?php 
				
				if(isset($_REQUEST['botao'])){
					header('location:opcoes.php?msg=1, TRUE');
				}
					?>
        </div>
        <div id="Dir">
            <div id="google_translate_element"></div><script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
            </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
        </div>
        <div id="Rodape" align="left">
            <address>
              <strong>UFRN/EAJ/Pronatec/Curso Técnico em Informática</strong><br>
              1355 Rua XXX XXX, Número yyy<br>
              São Gonçalo do Amarante, RN 59.290-000<br>
              <abbr title="Phone">Fixo:</abbr> (84) 3456-7890
            </address>
            
            <address>
              <strong>ESCOLA ESTADUAL JOSÉ MOACIR</strong><br>
              <a href="mailto:#">eejm@email.com.br</a>
            </address>
        </div>
    </div>
</body>
</html>
<!--
- ao clicar em SISTEMA ACADÊMICO, será direcionado para página opcoes.php
- parte de pesquisa de aluno:
    - mensagem de erro própria (não é do bootsrap) na busca
    - crescentei o botão excluir
    - exclusão funcionando
-->
