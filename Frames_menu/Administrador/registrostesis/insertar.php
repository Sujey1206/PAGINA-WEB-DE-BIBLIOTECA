<!DOCTYPE html >
<html>
<head>
<title>Operaciones de la base de datos Colegio</title>
<style>
    .TablaInsert{
        margin-top:50px;
        border:3px dashed #F09252;
        border-radius: 20px;
        padding:10px;
    }
    .texto{
        height:30px;
        border-radius: 6px;
        border: 1px solid #ED7D31;
        font-family: Agency FB;
        font-size: 18px;
    }
    .titulo{
        font-family: Agency FB;
        font-size: 18px;
        letter-spacing: 2px;
    }
    .boton{
        text-decoration: none;
        padding: 5px;
        font-weight: 600;
        font-size: 23px;
        color: #ffffff;
        background-color: #F09252;
        border-radius: 6px;
        border: 2px solid #ED7D31;
        font-family: Agency FB;
        cursor:pointer;
        valign:middle;
        height:40px;
    }
    .boton:hover{
    color: #ED7D31;
    background-color: #ffffff;
    }
    .mensaje{
        font-size: 23px;
        color: #F09252;
        font-weight:bold;
        text-shadow: 2px 2px 5px #fff;
    }
</style>
</head>
<body style="background-image:url(../img/fond.jpg)">
<table width="90%" align="center" class="TablaInsert">
    <form action="#" method="post">
    <tr>
        <td colspan="7" align="center" style="padding:10px; font-size:40px;font-family: 'Cherry Swash', cursive;"><b>INSERTAR</b><br></td>
    </tr>
    <tr>
        <td align="center" class="titulo"><b>Titulo</b></td>
        <td align="center" class="titulo"><b>RefImagen</b></td>
        <td align="center" class="titulo"><b>Autor</b></td>
        <td align="center" class="titulo"><b>Descripcion</b></td>
        <td align="center" class="titulo"><b>RefEnlace</b></td>
        <td align="center" class="titulo"><b>Escuela</b></td>
        <td align="center" class="titulo"><b>Acción</b></td>
    </tr>
    <tr>
        <td align="center"><input class="texto" type="text" name="Titulo" size="25" /></td>
        <td align="center"><input class="texto" type="text" name="RefImagen" size="23" /></td>
        <td align="center"><input class="texto" type="text" name="Autor" size="23" /></td>
        <td align="center"><input class="texto" type="text" name="Descripcion" size="50" /></td>
        <td align="center"><input class="texto" type="text" name="RefEnlace" size="23" /></td>
        <td align="center">
            <select  name="Escuela" style="width: 99%;">
                <option value="Ingenieria de Sistemas" selected="selected">Ing. Sistemas</option>
                <option value="Ingenieria Industrial">Ing. Industrial</option>
                <option value="Ingenieria Agroindustrial">Ing. Agroindustrial</option>
                <option value="Ingenieria de Transportes">Ing. Transportes</option>
            </select>
        </td>
        <td align="center">
            <input type="submit" value="Insertar" name="insertar" class="boton"/>
        </td>
    </tr>
    <tr>
        <td height="30px"></td>
    </tr>
    </form>
</table>
<?php
if(isset($_POST['insertar'])){
    $con=mysqli_connect("localhost:3306","root","");
    mysqli_select_db($con,"pagina");
    $tit=$_POST['Titulo'];
    $ref=$_POST['RefImagen'];
    $autor=$_POST['Autor'];
    $desc=$_POST['Descripcion'];
    $refen=$_POST['RefEnlace'];
    $esc=$_POST['Escuela'];
    $sql =  "insert into tesis
    (titulot, refimgt, autort, desct, refent, escuela) value ('$tit','$ref','$autor','$desc','$refen','$esc');";
    mysqli_query($con,$sql);
    mysqli_close($con);
    echo "<br><table align=center><tr><td class='mensaje'><br>Se ingreso el dato correctamente</td></tr></table>";
    unset($_POST['insertar']);
}
?>
</body>
</html>