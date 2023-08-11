<?php
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Altas</title>
	<link rel="stylesheet" href="css/formAltas.css">
</head>
<body>

<div class="container">
    <h3 class="altaTitulo">FORMULARIO DE ALTA</h3>
	<form class="altaInput" action="altas.php" method="POST" >
		<div class="grupoInputs">
		<label for="apellido">Apellido:</label>
		<input type="text" name="apellido"><br>
		</div>
		

		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre"><br>

		<label for="edad">Edad:</label>
		<input type="text" name="edad"><br>

		<input type="submit" value="Grabar"><br>
	</form>
</div>
	
	
</body>
</html>