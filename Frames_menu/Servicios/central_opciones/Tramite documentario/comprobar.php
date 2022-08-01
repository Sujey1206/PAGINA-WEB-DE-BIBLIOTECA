<!DOCTYPE html PUBLI "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
<html>
<head>
<title>Comprobar datos</title>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
    .division{
        background:none;
        border-weight: 5px;
        align:center;
        border-color: black;
        padding:10px;
        border-collapse: collapse;
        
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
</style>
</head>
<body background="../../Imagenes/fondo.jpg">
	<p align="center" class="titulo">Tus Datos de suscripción</p>
    <section class="division">
        <?php
        $archiv = $_FILES['archivo']['tmp_name'];
        echo "<table align=center class='tabla'>";
        echo "<tr><td>";
        echo "<table align=center class='tablaint'>";
        echo "<tr><td align=center style='font-size:26px'><b>Datos personales</b>"; echo "<br/></td></tr>";
        echo "<tr><td>Nombres: "; echo $_POST['Nombres']; echo "<br/></td></tr>";
        echo "<tr><td>Apellido Paterno: "; echo $_POST['Paterno']; echo "<br/></td></tr>";
        echo "<tr><td>Apellido Materno:"; echo $_POST['Materno']; echo "<br/></td></tr>";
        echo "<tr><td>E-mail:"; echo $_POST['Email']; echo "<br/></td></tr>";
        echo "<tr><td>Celular:"; echo $_POST['Celular']; echo "<br/></td></tr>";
        echo "<tr><td>Teléfono fijo:"; echo $_POST['Telefono']; echo "<br/></td></tr>";
        echo "<tr><td>Departamento:"; echo $_POST['Departamento']; echo "<br/></td></tr>";
        echo "<tr><td>Provincia:"; echo $_POST['Provincia']; echo "<br/></td></tr>";
        echo "<tr><td>Distrito:"; echo $_POST['Distrito']; echo "<br/></td></tr>";
        echo "<tr><td>Dirección:"; echo $_POST['Direccion']; echo "<br/></td></tr>";
        echo "<tr><td>Número o Piso:"; echo $_POST['Piso']; echo "<br/></td></tr>";
        echo "<tr><td>Tipo de solicitante: "; echo $_POST['Solicitante']; echo "<br/></td></tr>";
        echo "<tr><td>Tipo de documento: "; echo $_POST['Documento']; echo "<br/></td></tr>";
        echo "<tr><td>Número de documento: "; echo $_POST['Numero']; echo "<br/>";
        echo "</table>";
        echo "</tr></td>";
        echo "</table><br/><br/>";

        echo "<table align=center class='tabla'>";
        echo "<tr><td>";
        echo "<table align=center class='tablaint'>";
        echo "<tr><td align=center style='font-size:26px'><b>Datos del Trámite</b>"; echo "<br/></td></tr>";
        echo "<tr><td><span>Trámite a realizar: "; echo $_POST['Tramite']; echo "</span><br/></td></tr>";
        echo "<tr><td>Dependencia de Ref.: "; echo $_POST['Dependencia']; echo "<br/></td></tr>";
        echo "<tr><td>Facultad del solicitante:"; echo $_POST['Facultad']; echo "<br/></td></tr>";
        echo "<tr><td>Esc. del solicitante:"; echo $_POST['Escuela']; echo "<br/></td></tr>";
        echo "<tr><td>Código del solicitante:"; echo $_POST['Codigo']; echo "<br/></td></tr>";
        
        echo "<tr><td>Fundamento de la solicitud: "; echo $_POST['Fundamento']; echo "<br/></td></tr>";
        echo "<tr><td>Documentos que se adjuntan: "; echo $_POST['Adjuntar']; echo "<br/></td></tr>";
        
        if($archiv == ""){
            echo "<tr><td>";echo "Ningun archivo seleccionado";echo "<br/></td></tr>";
            $arc="";
        }else{
            echo "<tr><td>";copy($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);echo "Archivo subido con éxito <br/></td></tr>";
            $arc=copy($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);
        }
        echo "</table>";
        echo "</tr></td>";
        echo "</table><br/><br/>";
        $tramite=$_POST['Tramite'];
        $dependencia=$_POST['Dependencia'];
        $soli=$_POST['Solicitante'];
        $tipo=$_POST['Documento'];
        $numero=$_POST['Numero'];
        $pat=$_POST['Paterno'];
        $mat=$_POST['Materno'];
        $nom=$_POST['Nombres'];
        $fac=$_POST['Facultad'];
        $esc=$_POST['Escuela'];
        $cod=$_POST['Codigo'];
        $dep=$_POST['Departamento'];
        $prov=$_POST['Provincia'];

        $dis=$_POST['Distrito'];
        $dir=$_POST['Direccion'];
        $piso=$_POST['Piso'];
        $tel=$_POST['Telefono'];
        $cel=$_POST['Celular'];
        $email=$_POST['Email'];
        $fund=$_POST['Fundamento'];
        $adj=$_POST['Adjuntar'];
        
        $nomarch=$_POST['Numero'];
        $miarchivo=fopen($nomarch.'.txt','w');//abrir archivo, nombre archivo, modo apertura
        fwrite($miarchivo, // escribir
        "Tramite: ".$tramite."<br> Dependencia de Ref.: ".$dependencia."<br> Tipo de solicitante: ".$soli."<br> Tipo de documento: ".$tipo.
        "<br> Número de documento: ".$numero."<br> Apellido Paterno: ".$pat."<br> Apellido Materno: ".$mat."<br> Nombres: ".$nom.
        "<br> Facultad: ".$fac."<br> Escuela: ".$esc."<br> Codigo: ".$cod."<br> Departamento: ".$dep."<br> Provincia: ".$prov.
        "<br> Distrito: ".$dis."<br> Direccion: ".$dir."<br> Piso: ".$piso."<br> Telefono: ".$tel."<br> Celular: ".$cel.
        "<br> Email: ".$email."<br> Fundamento: ".$fund."<br> Adjuntar: ".$adj."<br> Archivo: ".$arc);
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
            <td align="center"><input type="submit" value="Enviar" onclick="mostrar()" class="boton"/></td>
            <td align="center"><a href="formulario.php" target="_self" class="boton">Volver a escribirlos</a></td>
        </tr>
    </table>
    <script src="mensaje.js" type="text/javascript"></script>
</body>
</html>