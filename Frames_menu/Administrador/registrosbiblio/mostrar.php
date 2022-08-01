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
    $sql="select * from biblio order by titulob asc";
    $datos=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_array($datos,MYSQLI_ASSOC)) {
    $id=$row['idb'];
    $tit=$row['titulob'];
    $ref=$row['refb'];
    $aut=$row['autorb'];
    $tip=$row['tipob'];
    $desc=$row['descb'];
    $refen=$row['reftitb'];
    echo 
    "<table align=center width=90% class=resultado>
        <tr>
            <td align=center width=32px><b>ID</b></td>
            <td align=center width=131px><b>Titulo</b></td>
            <td align=center width=65px><b>RefImagen</b></td>
            <td align=center width=98px><b>Autor</b></td>
            <td align=center width=65px><b>Tipo</b></td>
            <td align=center width=196px><b>Descripción</b></td>
            <td align=center width=65px><b>RefEnlace</b></td>
        </tr>
        <tr>
            <td align=center>$id</td>
            <td align=center>$tit</td>
            <td align=center>$ref</td>
            <td align=center>$aut</td>
            <td align=center>$tip</td>
            <td align=center>$desc</td>
            <td align=center style=width:65px;>$refen</td>
        </tr>
    </table><br>";
    }
    mysqli_close($con);
?>
</body>
</html>