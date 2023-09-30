<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu general</title>
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Dancing+Script&family=Dosis:wght@300&family=Fuggles&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/formAltas.css">

</head>

<body>
	<div id="contenedor">
		<div id="header">

			<div class="top">
				<!-- Logo -->
				<div id="logo">
					<span style="display:none" class="image avatar48"><img src="../images/menu.png" alt="" /></span>
					<h1 id="title">Administra Usuario</h1>
					<p>Gestiona los usurios de este sistema</p>
				</div>

				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="#altas" id="altas-link"><span class="icon solid fa-home">Altas</span></a></li>
						<li><a href="#bajas" id="bajas-link"><span class="icon solid fa-th">Bajas</span></a></li>
						<li><a href="#modificacion" id="modificacion-link"><span
									class="icon solid fa-user">ModificacionMe</span></a></li>
						<li><a href="#listar" id="listar-link"><span class="icon solid fa-envelope">Listar</span></a>
						</li>
					</ul>
				</nav>

			</div>
		</div>

		<div id="main">

			<section id="banner">
				<div class="container">
					<h2 class="titulo">Administrar Usuario</h2>
					<h3 class="contenido1">Este sistem esta encargo de mantener</h3>
					<h3 class="contenido2">todo la informacion de sus auuario</h3>
					<h3 class="contenido3">para una correcto fucionamientos</h3>
				</div>
			</section>

			<!-- Intro -->
			<section id="altas" class="one dark cover">
				<div class="container">
					<?php
					include("form-altas.php");
					?>
				</div>
			</section>

			<!-- Portfolio -->
			<section id="bajas" class="two">
				<div class="container">
					<?php
					include("form-bajas.php");
					?>
				</div>
			</section>

			<!-- About Me -->
			<section id="modificacion" class="three">
				<div class="container">
					<?php
					include("form-modificacion.php");
					?>
				</div>
			</section>

			<!-- Contact -->
			<section id="listar" class="four">
				<div class="container">
					<?php
					include("listar.php");
					?>
				</div>
			</section>


			<!-- Footer -->
			<footer id="footer">

				<!-- Copyright -->
				<ul class="copyright">
					<li>&copy; Untitled. All rights reserved.</li>
					<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>

			</footer>

		</div>




	</div>



	<!-- <div class="menu">		
	
	<a href="index.php">Alta</a><br>
	<a href="form-bajas.php">Bajas</a><br>
	<a href="form-modificacion.php">Modificaciones</a><br>
	<a href="listar.php">Listado de personas</a><br>

	</div> -->
</body>

</html>