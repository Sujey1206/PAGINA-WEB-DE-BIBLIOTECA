<html>
<head>
<style>

.resultado{
        margin-top:20px;
        border:3px dashed #2fdb63;;
        border-radius: 20px;
        padding:10px;
    }
</style>
</head>
<body style="background-image:url(../img/fond.jpg)">
<?php
    $con=mysqli_connect("localhost:3307","root","");
    mysqli_select_db($con,"pagina");
    $sql="select * from sigb order by titulos asc";
    $datos=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_array($datos,MYSQLI_ASSOC)) {
    $id=$row['ids'];
    $tit=$row['titulos'];
    $ref=$row['refimgs'];
    $aut=$row['autors'];
    $edit=$row['editorials'];
    $dis=$row['dispons'];
    $format=$row['formatos'];
    $form=$row['formas'];
    $clas=$row['clasis'];
    echo 
    "<table align=center width=90% class=resultado>
        <tr>
            <td align=center width=5%><b>ID</b></td>
            <td align=center width=20%><b>Titulo</b></td>
            <td align=center width=10%><b>RefImagen</b></td>
            <td align=center width=16%><b>Autor</b></td>
            <td align=center width=10%><b>Editorial</b></td>
            <td align=center width=20%><b>Disponibilidad</b></td>
            <td align=center width=10%><b>Formato</b></td>
            <td align=center width=10%><b>Formas</b></td>
            <td align=center width=10%><b>Clasificacion</b></td>
        </tr>
        <tr>
            <td align=center>$id</td>
            <td align=center>$tit</td>
            <td align=center>$ref</td>
            <td align=center>$aut</td>
            <td align=center>$edit</td>
            <td align=center>$dis</td>
            <td align=center>$format</td>
            <td align=center>$form</td>
            <td align=center>$clas</td>
        </tr>
    </table><br>";
    }
    mysqli_close($con);
?>
</body>
</html>