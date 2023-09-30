<?php
include("conexion.php");

function insertar($use, $cla, $ape, $nom, $fe, $foto, $fotoTamanio)
{
    if ($fotoTamanio > 0) {
        $fp = fopen($foto, "rb");
        $contenido = fread($fp, $fotoTamanio);
        $contenido = addslashes($contenido);
        fclose($fp);

        $base = "gestionsubir";
        $Conexion = mysqli_connect("localhost", "root", "", $base);

        $cadena = "INSERT INTO persona(apellido, nombre, fecha,foto,usuario,clave) VALUES ('$ape','$nom','$fe','$contenido','$use','$cla')";

        try {
            $resultado = mysqli_query($Conexion, $cadena);

            if ($resultado) {
                return true;
            }
        } catch (Exception $e) {
            return substr($e, 22, 41);
        }


    } else {
        return false;
    }
}

?>