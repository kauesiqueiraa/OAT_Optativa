<?php
require_once("config/conexao_bd.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Banco Digital CPU</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<link rel="stylesheet" type="text/css" href="css/estilo-1200.css" media="screen and (max-width:1200px)">

	<link rel="stylesheet" type="text/css" href="css/estilo-1024.css" media="screen and (max-width:1024px)">

	<link rel="stylesheet" type="text/css" href="css/estilo-600.css" media="screen and (max-width:600px)">

	<link rel="stylesheet" type="text/css" href="css/estilo-320.css" media="screen and (max-width:320px)">
	
</head>
<body>

	<div id="container">

		<div id="header">
			<h1>BANCO DIGITAL CPU</h1>
			<!-- <img height="150px" src="https://3eaf214443cb92a1.cdn.gocache.net/wp-content/uploads/2019/08/banking-760x450.jpg"> -->
		</div>

		<div id="menu">
			<ul>
				<li><a class="nav-link" href="?pg=inicio">Inicio</a></li>
				<li><a class="nav-link" href="?pg=cadastro">Cadastro</a></li>
				<li><a class="nav-link" href="?pg=listagem">Lista</a></li>
				<li><a class="nav-link" href="?pg=sobre">Sobre</a></li>
			</ul>
		</div>		

		<div id="main">
			<div id="menu-lateral">
				<ul>
					<li><a class="nav-link" href="?pg=inicio">Inicio</a></li>
					<li><a class="nav-link" href="?pg=cadastro">Cadastro</a></li>
					<li><a class="nav-link" href="?pg=listagem">Lista</a></li>
					<li><a class="nav-link" href="?pg=sobre">Sobre</a></li>
				</ul>				
			</div>
				<div id="content">
	
					<main role="main">
						<?php
							if(isset($_GET["pg"])){
								$pagina = $_GET["pg"];
							}
							else{
								$pagina = "inicio";
							}				
							include("paginas/".$pagina.".php");
						?>
					</main>
			
			</div>	
			<div id="menu-lateral-direita">
				<ul>
					<li><a class="nav-link" href="?pg=inicio">Inicio</a></li>
					<li><a class="nav-link" href="?pg=cadastro">Cadastro</a></li>
					<li><a class="nav-link" href="?pg=listagem">Lista</a></li>
					<li><a class="nav-link" href="?pg=sobre">Sobre</a></li>
				</ul>
			</div>		
		</div>

		<div id="footer">
			<p>Todos os direitos reservados</p>
		</div>
		
	</div>

</body>
</html>