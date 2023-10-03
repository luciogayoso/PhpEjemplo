<?php
function insertar($use, $cla, $ape, $nom, $fe, $foto, $fotoTamanio)
{
    if ($fotoTamanio > 0) {
        $fp = fopen($foto, "rb");
        $contenido = fread($fp, $fotoTamanio);
        $contenido = addslashes($contenido);
        fclose($fp);

        $Conexion = include("conexion.php");

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

function getUsuarioUsersNames()
{
    $Conexion = include("conexion.php");
    $cadena = "SELECT usuario FROM persona ";

    $consulta = mysqli_query($Conexion, $cadena);
    $html = "<select class='select' style='border-bottom: 1px solid black;
    border-top: 0;
    border-left: 0;
    border-right: 0;
    width:15em;
    font-size:1.5em;
    cursor: pointer' name='userName'>";

    while ($registro = mysqli_fetch_row($consulta)) {
        $html = $html . "<option value=" . $registro[0] . ">" . $registro[0] . "</option>";
    }

    $html = $html . "</select>";
    return $html;
}

function getUsuarioUserName($userName)
{
    $Conexion = include("conexion.php");
    $cadena = "SELECT * FROM persona where usuario=" . $userName;

    $consulta = mysqli_query($Conexion, $cadena);
    $html = "<select name='userName'>";

    while ($registro = mysqli_fetch_row($consulta)) {
        $html = +"<option value=" . $registro[0] . ">" . $registro[0] . "</option>";
    }

    $html = +"</select>";
    return $html;
}

?>