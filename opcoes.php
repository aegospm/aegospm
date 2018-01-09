<?php
	@session_start();
	 if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) { 
				  unset($_SESSION['login']); 
				  unset($_SESSION['senha']);
				  header('location:index.php'); 
	  } 
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Sorveteria</title>
        <link href="css/style.css" rel="stylesheet" >
        <link href="css/grid.css" rel="stylesheet" >
        
    <!--MDL-->
	<link rel="stylesheet" href="../mdl/material.min.css">
	<script src="../mdl/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    
    <body>
		<div id="principal">
            <header>
                <h1>Logo da empresa</h1>
            </header>
            <nav class="meu_menu_desktop">
              <ul class="menu">
                        <li><a href="#">CADASTRAR</a>
                            <ul>
                                  <li><a href="#">Cliente</a></li>
                                  <li><a href="#">Produto</a></li>          
                            </ul>
                        </li>
                        <li><a href="#">PESQUISAR</a>
                            <ul>
                                  <li><a href="#">Cliente</a></li>
                                  <li><a href="#">Produto</a></li>          
                            </ul>
                        </li>                
            </ul>
            </nav>
            <nav class="meu_menu_mobile">
                <!-- Left aligned menu below button -->
                <button id="demo-menu-lower-left"
                        class="mdl-button mdl-js-button mdl-button--icon">
                  <i class="material-icons">more_vert</i>
                </button>
                
                <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
                    for="demo-menu-lower-left">
                  <li class="mdl-menu__item">Some Action</li>
                  <li class="mdl-menu__item mdl-menu__item--full-bleed-divider">Another Action</li>
                  <li disabled class="mdl-menu__item">Disabled Action</li>
                  <li class="mdl-menu__item">Yet Another Action</li>
                </ul>
                            </nav>
            <section>
                seção
                <article>
                    seção
                </article>
            </section>
          <!--  <aside>
                lateral
            </aside>
            -->
            <footer>
                rodapé
            </footer>
        </div>
    </body>
</html>
