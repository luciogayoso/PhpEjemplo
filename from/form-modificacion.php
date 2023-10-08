<div class="form">
	<h3 class="modificarTitulo">FORMULARIO DE MODIFICACION</h3>
	<form class="modificarInput" action="modificacion.php" method="POST">
		<div class="grupoInputsModificar">
			<label for="usuario">Indique un nombre de usuario:</label><br>
			<input id="campoReferencia" type="text" placeholder="usuario" /><br>
			<ul class="busqueda"></ul>
		</div>

		Campos a modificar:<br>

		<div class="grupoInputsCambiar">
			<div class="imagenUsuario">
				<img onclick="seleccionarArchivo()" id="imgPerfilModificar" src="../images/fotoPerfil.png" alt="">
				<input type="file" class="inputFile" placeholder="foto de perfil" name="foto"><br>
			</div>
			<div class="grupoInputsModificar">
				<input type="text" id="clave" placeholder="clave" name="clave"><br>

				<input type="text" id="apellido" placeholder="Apellido" name="apellido"><br>

				<input type="text" id="nombre" placeholder="nombre" name="nombre"><br>

				<input type="date" id="fecha" placeholder="fecha" name="fecha"><br>

				<div class="btn-submit">
					<input type="submit" value="Modificar"><br>
				</div>
			</div>
		</div>
	</form>
</div>

<script src="../js/form-modificar.js"></script>