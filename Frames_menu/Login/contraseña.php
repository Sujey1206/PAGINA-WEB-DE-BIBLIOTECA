<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login UNFV</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <section>
            <div class="imgBx">
                <img src="Imagenes/fondoizq.jpg"/>
            </div>
            <div class="contentBx">
                <div class="formBx">
                    <h2>Cambio de contraseña</h2>
                    <form action="#" method="post">
                        <div class="inputBx">
                            <span>Usuario</span>
                            <input type="text" name="Usuario">
                        </div>
                        <div class="inputBx">
                            <span>Correo electrónico</span>
                            <input type="text" name="Email">
                        </div>
                        <div class="inputBx">
                            <span>Nueva Contraseña</span>
                            <input type="password" name="Contraseña">
                        </div> 
                        <div class="inputBx">
                            <input type="submit" value="Cambiar"name="Cambiar">
                        </div>
                        <div class="inputBx">
                            <p align="center">¿Vamos a Iniciar sesion? <a href="login.php">Ingresa aqui</a></p>
                        </div>
                    </form>
                    <table border="0" width="320px" align="center">
                    <tr><td align="center" width="320px" height="40px">
                    <?php
                        if(isset($_POST['Cambiar'])){
                            $con=mysqli_connect("localhost:3307","root","");
                            mysqli_select_db($con,"pagina");
                            $user=$_POST['Usuario'];
                            $pass=$_POST['Contraseña'];
                            $email=$_POST['Email'];
                            $sql = "update cuentas set contraseña= '$pass'  where usuario = '$user' and correo= '$email'";
                            $cont = "select count(*) from cuentas where usuario = '$user' and correo= '$email'";
                            $num=mysqli_query($con,$cont);
                            $n = mysqli_fetch_array($num);
                            if ($n[0]==0) {
                                echo "<table align=center>
                                    <tr>
                                        <td class=mensaje align=center>Los datos del usuario \"$user\" no coinciden.</td>
                                    </tr>
                                </table>";
                            }else{
                                echo "<table align=center class=mensaje>
                                    <tr>
                                        <td align=center>Contraseña cambiada correctamente para el usuario \"$user\".</td>
                                    </tr>
                                </table>"; 
                            }
                            mysqli_query($con,$sql);
                            mysqli_close($con);
                            unset($_POST['Cambiar']);
                        }
                    ?>
                    </td></tr>
                    </table>
                    <h3>Visitanos en nuestras redes sociales</h3>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/UNFV.EDU" target="_blank"><img src="Imagenes/facebook.png"/></a></li>
                        <li><a href="https://twitter.com/UNFVoficial" target="_blank"><img src="Imagenes/twitter.png"/></a></li>
                        <li><a href="https://www.instagram.com/unfvoficial/" target="_blank" ><img src="Imagenes/instagram.png"/></a></li>
                        <li><a href="https://www.youtube.com/user/PrensaUNFV" target="_blank"><img src="Imagenes/youtube.png"/></a></li>
                    </ul>
                </div>
            </div>
        </section>
    </body>
</html>