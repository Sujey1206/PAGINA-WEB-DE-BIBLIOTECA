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
            margin-top: 160px;
        }
    </style>
</head>
<body style="background-image:url(../img/fond.jpg)">
<?php
$arch=$_POST['archivo'];
file_exists('../../Servicios/central_opciones/solicitudcuenta/'.$arch.'.txt')or die ("<p class=mensaje align=center>No existe el archivo indicado.</p>");
unlink('../../Servicios/central_opciones/solicitudcuenta/'.$arch.'.txt');
echo "<p class=mensaje align=center>Tu archivo ha sido borrado.</p>";
?>
</body>