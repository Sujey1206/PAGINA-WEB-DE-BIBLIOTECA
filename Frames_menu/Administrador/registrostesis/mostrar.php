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
    $sql="select * from tesis order by titulot asc";
    $datos=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_array($datos,MYSQLI_ASSOC)) {
    $id=$row['idt'];
    $tit=$row['titulot'];
    $ref=$row['refimgt'];
    $aut=$row['autort'];
    $desct=$row['desct'];
    $refent=$row['refent'];
    $esc=$row['escuela'];
    echo 
    "<table align=center width=90% class=resultado>
        <tr>
            <td align=center width=5%><b>ID</b></td>
            <td align=center width=16%><b>Titulo</b></td>
            <td align=center width=10%><b>RefImagen</b></td>
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
    mysqli_close($con);
?>
</body>
</html>