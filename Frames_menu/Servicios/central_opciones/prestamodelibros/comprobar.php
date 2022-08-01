<!DOCTYPE html PUBLI "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
<html>
<head>
<title>Comprobar datos</title>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
    .division{
        background:none;
        border-weight: 2px;
        align:center;
        border-color: black;
        padding:10px;
        border-collapse: collapse;
        
    }
    .boton{
        text-decoration: none;
        padding: 10px;
        font-weight: 600;
        font-size: 23px;
        color: #ffffff;
        background-color: #F09252;
        border-radius: 6px;
        border: 2px solid #ED7D31;
        font-family: Agency FB;
    }
    .boton:hover{
        color: #ED7D31;
        background-color: #ffffff;
    }
    .tabla{
        border:5px solid #FFA347;
        width:60%;
        align:center;
        padding:5px; 
        border-radius:20px;
        background:white;
    }
    .tablaint{
        border:3px dashed #FFA347;
        width:100%;
        padding:10px; 
        border-radius:20px;
    }
    .titulo{
        color: #FFA347;
        font-size: 50px;
        font-weight: bold;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        font-family: Comic Sans MS;
    }
</style>
</head>
<body background="../../Imagenes/fondo.jpg">
<p align="center" class="titulo">Tus Datos de Solicitud</p>
    <section class="division">
	<?php
    echo "<table align=center class='tabla'>";
    echo "<tr><td>";
    echo "<table align=center class='tablaint'>";
    echo "<tr><td align=center style='font-size:26px'><b>Datos personales</b>"; echo "<br/></td></tr>";
    echo "<tr><td>Nombres: "; echo $_POST['Nombre']; echo "<br/></td></tr>";
    echo "<tr><td>Apellidos: "; echo $_POST['Apellidos']; echo "<br/></td></tr>";
    echo "<tr><td>Centro Educativo: "; echo $_POST['Centro']; echo "<br/></td></tr>";
    echo "<tr><td>Nombre centro Educativa: "; echo $_POST['Nomcentro']; echo "<br/></td></tr>";
    echo "<tr><td>Número de teléfono: "; echo $_POST['Telefono']; echo "<br/></td></tr>";
    echo "<tr><td>Dirección: "; echo $_POST['Direccion']; echo "<br/></td></tr>";
    echo "<tr><td>Provincia de residencia: "; echo $_POST['Provincia']; echo "<br/></td></tr>";
    echo "<tr><td>Usuario: "; echo $_POST['Usuario']; echo "<br/></td></tr>";
    echo "<tr><td>Contraseña: "; echo $_POST['Contraseña']; echo "<br/></td></tr>";
    echo "<tr><td>Fecha actual: "; echo $_POST['Fecha']; echo "<br/></td></tr>";
    echo "<tr><td>Materiales solicitados: "; echo $_POST['Materiales']; echo "<br/></td></tr>";
    echo "<tr><td>Código del material 1: "; echo $_POST['Primero']; echo "<br/></td></tr>";
    echo "<tr><td>Código del material 2: "; echo $_POST['Segundo']; echo "<br/></td></tr>";
    echo "<tr><td>Fundamento del préstamo: "; echo $_POST['Fundamento']; echo "<br/></td></tr>";
    echo "</table>";
    echo "</tr></td>";
    echo "</table><br/>";
    $nombre=$_POST['Nombre'];
    $ape=$_POST['Apellidos'];
    $centro=$_POST['Centro'];
    $nomcentro=$_POST['Nomcentro'];
    $car=$_POST['Carrera'];
    $tel=$_POST['Telefono'];
    $dir=$_POST['Direccion'];
    $prov=$_POST['Provincia'];
    $user=$_POST['Usuario'];
    $contra=$_POST['Contraseña'];
    $fecha=$_POST['Fecha'];
    $mat=$_POST['Materiales'];
    $codpri=$_POST['Primero'];
    $codseg=$_POST['Segundo'];
    $fund=$_POST['Fundamento'];
    $nomarch=$_POST['Usuario'];
    $miarchivo=fopen($nomarch.'.txt','w');//abrir archivo, nombre archivo, modo apertura
    fwrite($miarchivo, // escribir
    "Nombre: ".$nombre."<br> Apellidos: ".$ape."<br> Centro educativo: ".$centro."<br> Nombre del Centro Educativo: ".$nomcentro.
    "<br> Carrera: ".$car."<br> Telefono: ".$tel."<br> Direccion: ".$dir.
    "<br> Provincia: ".$prov."<br> Usuario: ".$user."<br> Contraseña: ".$contra."<br> Fecha de la solicitud: ".$fecha.
    "<br> Materiales: ".$mat."<br> Codigo del primer libro: ".$codpri."<br> Codigo del segundo libro:  ".$codseg.
    "<br> Fundamentos: ".$fund);
    fclose($miarchivo); //cerrar archivo*/
    ?>
    </section>
    <table align="center" style="font-family: Agency FB; font-size: 22px;">
        <tr>
            <td colspan="2">Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</td>
        </tr>

        <tr>
            <td align="center">Los datos son correctos: </td>
            <td align="center">Los datos no son correctos: </td>
        </tr>

        <tr>
        <td align="center"><br><input type="submit" value="Enviar" onclick="mostrar()" class="boton"/></td>
            <td align="center"><br><a href="prestamo.php" target="_self" class="boton">Volver a escribirlos</a></td>
        </tr>
    </table>
    <script src="mensaje.js" type="text/javascript"></script>
	<br>
</body>
</html>