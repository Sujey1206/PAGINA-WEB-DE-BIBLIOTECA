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
    $con=mysqli_connect("localhost:3306","root","");
    mysqli_select_db($con,"pagina");
    $sql="select * from cuentas order by usuario asc"; 
    $datos=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_array($datos,MYSQLI_ASSOC)) { 
    $id=$row['idcuenta'];
    $user=$row['usuario'];
    $pass=$row['contraseña'];
    $email=$row['correo'];
    echo 
    "<table align=center width=90% class=resultado>
        <tr>
            <td align=center width=10%><b>ID</b></td>
            <td align=center width=20%><b>Usuario</b></td>
            <td align=center width=20%><b>Contraseña</b></td>
            <td align=center width=20%><b>Correo Email</b></td>
        </tr>
        <tr>
            <td align=center>$id</td>
            <td align=center>$user</td>
            <td align=center>$pass</td>
            <td align=center>$email</td>
        </tr>
    </table><br>";
    }
    mysqli_close($con);
?>
</body>
</html>