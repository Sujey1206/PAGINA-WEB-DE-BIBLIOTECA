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
<p align="center" class="titulo">Tus Datos de suscripción</p>
    <section class="division">
	<?php
        echo "<table align=center class='tabla'>";
        echo "<tr><td>";
        echo "<table align=center class='tablaint'>";
        echo "<tr><td align=center style='font-size:26px'><b>Datos personales</b>"; echo "<br/></td></tr>";
        echo "<tr><td>Nombres: "; echo $_POST['Nombre']; echo "<br/></td></tr>";
        echo "<tr><td>Apellidos: "; echo $_POST['Apellidos']; echo "<br/></td></tr>";
        echo "<tr><td>DNI: "; echo $_POST['dni']; echo "<br/></td></tr>";
        echo "<tr><td>Edad: "; echo $_POST['Edad']; echo "<br/></td></tr>";
        echo "<tr><td>Fecha de nacimiento: "; echo $_POST['Nacimiento']; echo "<br/></td></tr>";
        echo "<tr><td>Sexo: "; echo $_POST['Sexo']; echo "<br/></td></tr>";
        echo "<tr><td>Número de teléfono: "; echo $_POST['Telefono']; echo "<br/></td></tr>";
        echo "<tr><td>Dirección: "; echo $_POST['Direccion']; echo "<br/></td></tr>";
        echo "<tr><td>Provincia en la reside: "; echo $_POST['Provincia']; echo "<br/></td></tr>";
        echo "<tr><td>E-mail: "; echo $_POST['Email']; echo "<br/></td></tr>";
        if($_POST['Tipo2']==""){
            echo "<tr><td>Tipo de estudiante: "; echo $_POST['Tipo']; echo "<br/></td></tr>";
            $tip=$_POST['Tipo'];
        }else{
            echo "<tr><td>Tipo de estudiante: "; echo $_POST['Tipo2']; echo "<br/></td></tr>";
            $tip=$_POST['Tipo2'];   
        }
        echo "<tr><td>Institucion Educativa: "; echo $_POST['Institucion']; echo "<br/></td></tr>";
        echo "<tr><td>Fundamento de la solicitud: "; echo $_POST['Comentario']; echo "<br/></td></tr>";
        echo "</table>";
        echo "</tr></td>";
        echo "</table><br/>";
        $nombre=$_POST['Nombre'];
        $ape=$_POST['Apellidos'];
        $dni=$_POST['dni'];
        $edad=$_POST['Edad'];
        $nacim=$_POST['Nacimiento'];
        $sex=$_POST['Sexo'];
        $tel=$_POST['Telefono'];
        $dir=$_POST['Direccion'];
        $prov=$_POST['Provincia'];
        $email=$_POST['Email'];
        $ins=$_POST['Institucion'];
        $com=$_POST['Comentario'];
        $nomarch=$_POST['dni'];
        $miarchivo=fopen($nomarch.'.txt','w');
        fwrite($miarchivo,
        "Nombre: ".$nombre."<br> Apellidos: ".$ape."<br> DNI: ".$dni."<br> Edad: ".$edad.
        "<br> Nacimiento: ".$nacim."<br> Sexo: ".$sex."<br> Telefono: ".$tel."<br> Direccion: ".$dir.
        "<br> Provincia: ".$prov."<br> E-mail: ".$email."<br> Tipo: ".$tip."<br> Institucion: ".$ins."<br> Comentario: ".$com);
        fclose($miarchivo);
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
            <td align="center"><br><a href="formulario.php" target="_self" class="boton">Volver a escribirlos</a></td>
        </tr>
    </table>
    <script src="mensaje.js" type="text/javascript"></script>
	<br>
</body>
</html>