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
<table width="90%" align="center" class="TablaMod">
    <form action="#" method="post">
    <tr>
    <td colspan="5" align="center" style="padding:10px; font-size:40px;font-family: 'Cherry Swash', cursive;"><b>MODIFICAR</b><br></td>
    </tr>
    <tr>
        <td align="center" class="titulo"><b>ID</b></td>
        <td align="center" class="titulo"><b>Usuario</b></td>
        <td align="center" class="titulo"><b>Contraseña</b></td>
        <td align="center" class="titulo"><b>Correo Email</b></td>
        <td align="center" class="titulo"><b>Accion</b></td>
    </tr>
    <tr>
        <td align="center"><input class="texto" type="text" name="cod" size="21" /></td>
        <td align="center"><input class="texto" type="text" name="Usuario" size="21" /></td>
        <td align="center"><input class="texto" type="text" name="Contraseña" size="21" /></td>
        <td align="center"><input class="texto" type="text" name="Email" size="30" /></td>
        <td align="center">
            <input class="boton" type="submit" value="Modificar" name="Modificar"/>
        </td>
    </tr>
    <tr>
        <td height="30px"></td>
    </tr>
    </form>
</table>
<?php
if(isset($_POST['Modificar'])){
    $con=mysqli_connect("localhost:3306","root","");
    mysqli_select_db($con,"pagina");
    $id=$_POST['cod'];
    $user=$_POST['Usuario'];
    $pass=$_POST['Contraseña'];
    $email=$_POST['Email'];
    $sql = "update cuentas set usuario = '$user', contraseña= '$pass', correo= '$email' where idcuenta = '$id'";
    $cont = "select count(*) from cuentas where idcuenta = '$id'";
    $num=mysqli_query($con,$cont);
    $n = mysqli_fetch_array($num);//Obtiene una fila de resultados como un array
    if ($n[0]==0) {
        echo "<br>
        <table align=center>
            <tr>
                <td class=mensaje>No existe el usuario de id \"$id\".</td>
            </tr>
        </table>";
    }else{
        echo "<br><table align=center class=mensaje>
            <tr>
                <td>Se modifico correctamente el usuario de id \"$id\".</td>
            </tr>
        </table>"; 
    }
    mysqli_query($con,$sql);
    mysqli_close($con);
    unset($_POST['Modificar']);
}
?>
</body>
</html>