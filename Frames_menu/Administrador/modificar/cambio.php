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
<body style="background-image:url(../img/iframefond.jpg)">
<?php
$miclave=$_POST['miclave'];
$nombre=$_POST['nombre'];
$tel=$_POST['tel'];
$email=$_POST['email'];
file_exists($miclave.'.txt') //comprobar
or die ("Error: no existe el archivo correspondiente a este nombre");

$miarchivo=fopen($miclave.'.txt','w');//abrir archivo, nombre archivo, modo apertura
fwrite($miarchivo, // escribir
"Nombre: ".$nombre."<br> Teléfono: ".$tel."<br> E-mail: ".$email."<br> Nombre archivo: ".$miclave);
fclose($miarchivo); //cerrar archivo
echo "<p class=mensaje align=center>Tu archivo se ha modificado exitosamente</p>";
?>
</body>