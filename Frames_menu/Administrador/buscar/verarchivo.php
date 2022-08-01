<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-color:#FFFFFF;
            margin: 40px;
        }
        .mensaje{
            font-size: 42px;
            font-family: 'Cherry Swash', cursive;
            margin-top: 95px;
        }
    </style>
</head>
<body style="background-image:url(../img/fond.jpg)">
<?php
    $arch=$_POST['archivo'];
    file_exists('../../Servicios/central_opciones/solicitudcuenta/'.$arch.'.txt')//Comprueba si existe un fichero o directorio
    or die ("<p class=mensaje align=center>Error: no existe el archivo correspondiente a este nombre</p>");
    $miarchivo=fopen('../../Servicios/central_opciones/solicitudcuenta/'.$arch.'.txt','r'); //Abre un fichero
    $ver = fgets($miarchivo);//la variable ver toma el valor del contenido del archivo abierto -- fgets: Lee una línea del archivo abierto
    fclose($miarchivo);// cierra un archivo
    echo "<p class=mensaje align=center>",$ver,"</p>";//
?>
</body>
