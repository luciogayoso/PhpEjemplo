<div class="form">
	<h3 class="altaTitulo">FORMULARIO DE ALTA</h3>
	<form class="altaInput" action="../server/altas.php" method="POST" enctype="multipart/form-data">
		<div class="grupoInputs">
			<img onclick="seleccionarArchivo()" id="imgPerfil" src="../images/fotoPerfil.png" alt="">
			<input type="file" class="inputFile" placeholder="foto de perfil" name="foto"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="usuario" name="usuario"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="clave" name="clave"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="Apellido" name="apellido"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="nombre" name="nombre"><br>
		</div>

		<div class="grupoInputs">
			<input type="date" placeholder="fecha" name="fecha"><br>
		</div>

		<div class="btn-submit">
			<input class="btn" type="submit" value="Grabar"><br>
		</div>
	</form>
</div>

<script src="../js/form-altas.js"></script>