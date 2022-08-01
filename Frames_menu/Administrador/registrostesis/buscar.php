<!DOCTYPE html >
<html>
<head>
<title>Operaciones de la base de datos Colegio</title>
<style>
     .TablaMod{
        margin-top:50px;
        border:3px dashed #F09252;
        border-radius: 20px;
        padding:10px;
    }
    .resultado{
        margin-top:20px;
        border:3px dashed #2fdb63;;
        border-radius: 20px;
        padding:10px;
    }
    .texto{
        height:30px;
        border-radius: 6px;
        border: 1px solid #ED7D31;
        font-family: Agency FB;
        font-size: 18px;
        width:450px;
    }
    .titulo{
        font-family: Agency FB;
        font-size: 18px;
    }
    .mensaje{
        font-size: 23px;
        color: #F09252;
        font-weight:bold;
        text-shadow: 2px 2px 5px #fff;
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
        width:200px;
    }
    .boton:hover{
    color: #ED7D31;
    background-color: #ffffff;
    }
</style>
</head>
<body style="background-image:url(../img/fond.jpg)">
<table width="90%" align="center" class="TablaMod">
    <form action="#" method="post">
    <tr>
    <td colspan=2 align="center" style="padding:10px; font-size:40px;font-family: 'Cherry Swash', cursive;"><b>&nbsp;BUSCAR</b><br></td>
    </tr>
    <tr>
        <td align="center" width="70%" class="titulo"><b>Titulo</b></td>
        <td align="center" width="30%" class="titulo"><b>Acción</b></td>
    </tr>
    <tr>
        <td align="center"><input  class="texto"  type="text" name="Titulo" size="80" /></td>
        <td align="center"><input class="boton" type="submit" value="Buscar" name="Buscar"/></td>
    </tr>
    </form>
</table>
<?php
if(isset($_POST['Buscar'])){
    $n=0;
    if (isset($_POST['Titulo']) and $_POST['Titulo'] !=""){
        $tit=$_POST['Titulo'];
        $con=mysqli_connect("localhost:3307","root","");
        mysqli_select_db($con,"pagina");
        $sql="select * from tesis where titulot like '%$tit%'";
        $datos=mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($datos,MYSQLI_ASSOC)) {
        $n++;
        $id=$row['idt'];
        $tit=$row['titulot'];
        $ref=$row['refimgt'];
        $aut=$row['autort'];
        $desct=$row['desct'];
        $refent=$row['refent'];
        $esc=$row['escuela'];
        echo "<table align=center width=90% class=resultado>
            <tr>
                <td align=center width=5%><b>ID</b></td>
                <td align=center width=20%><b>Titulo</b></td>
                <td align=center width=15%><b>RefImagen</b></td>
                <td align=center width=15%><b>Autor</b></td>
                <td align=center width=30%><b>Descripción</b></td>
                <td align=center width=15%><b>RefEnlace</b></td>
                <td align=center width=15%><b>Escuela</b></td>
            </tr>
            <tr>
                <td align=center>$id</td>
                <td align=center>$tit</td>
                <td align=center>$ref</td>
                <td align=center>$aut</td>
                <td align=center>$desct</td>
                <td align=center>$refent</td>
                <td align=center>$esc</td>
            </tr>
        </table><br>";
        }
        if ($n==0) {
        echo "<br><table align=center>
            <tr>
                <td class='mensaje'>No se ha encontrado ningún resultado para el libro \"$tit\".</td>
            </tr>
            </table>";
        }
        mysqli_close($con);
    }else{
    echo "<br><table align=center class='mensaje'><tr><td>Escribe un dato en el recuadro y haz click en Buscar</td></tr></table>";
    }
    unset($_POST['Buscar']);
}
?>
</body>
</html>