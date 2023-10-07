<div class="form">
	<h3 class="modificarTitulo">FORMULARIO DE MODIFICACION</h3>
	<form class="modificarInput" action="modificacion.php" method="POST">
		<div class="grupoInputs">
			<label for="usuario">Indique un nombre de usuario:</label>
			<div class="grupoInputs">
				<input id="campoReferencia" type="text" placeholder="usuario"><br>
				<ul class="busqueda"></ul>
			</div>
		</div>

		<br><br>
		Campos a modificar:<br>

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
			<input type="submit" value="Modificar"><br>
		</div>
	</form>
</div>