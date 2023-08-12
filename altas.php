
<html lang="es">
	<head>
	<link rel="stylesheet" href="css/altaBajaModificacion.css">
	</head>
</html>


<?php 

include 'menu.php';

$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];

// salida de informacion

echo "<h3>".$ape."</h3>". "<h3>".$nom."</h3>". "<h3>".$ed."</h3>";

$base = "gestion";
$Conexion =  mysqli_connect("localhost","root","",$base);

$cadena= "INSERT INTO persona(apellido, nombre, edad) VALUES ('$ape','$nom','$ed')";

$resultado = mysqli_query($Conexion,$cadena);

if($resultado){
	echo "se ha insertado un registro"."<br>";

}else{
	echo "NO se ha generado un registro"."<br>";
}

 ?>
