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
        <td align="center" class="titulo"><b>Tipo de Documento</b></td>
        <td align="center" class="titulo"><b>Descripcion</b></td>
        <td align="center" class="titulo"><b>RefEnlace</b></td>
        <td align="center" class="titulo"><b>Accion</b></td>
    </tr>
    <tr>
        <td align="center"><input class="texto" type="text" name="Titulo" size="25" /></td>
        <td align="center"><input class="texto" type="text" name="RefImagen" size="25" /></td>
        <td align="center"><input class="texto" type="text" name="Autor" size="25" /></td>
        <td align="center"> <select  name="Tipo" style="width: 99%;">
            <option value="Libro" selected="selected">Libro</option>
            <option value="Revista">Revista</option>
            <option value="Articulo">Articulo</option>
            <option value="Tesis">Tesis</option>
            </select></td>
        <td align="center"><input class="texto" type="text" name="Descripcion" size="40" /></td>
        <td align="center"><input class="texto" type="text" name="RefEnlace" size="25" /></td>
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
    $con=mysqli_connect("localhost:3307","root","");
    mysqli_select_db($con,"pagina");
    $tit=$_POST['Titulo'];
    $ref=$_POST['RefImagen'];
    $autor=$_POST['Autor'];
    $tip=$_POST['Tipo'];
    $desc=$_POST['Descripcion'];
    $refen=$_POST['RefEnlace'];
    $sql =  "insert into biblio
    (titulob, refb, autorb, tipob, descb, reftitb) value ('$tit','$ref','$autor','$tip','$desc','$refen');";
    mysqli_query($con,$sql);
    mysqli_close($con);
    echo "<br><table align=center><tr><td class='mensaje'><br>Se ingreso el dato correctamente</td></tr></table>";
    unset($_POST['insertar']);
}
?>
</body>
</html>