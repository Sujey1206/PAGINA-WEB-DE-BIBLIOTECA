<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login UNFV</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section>
            <div class="imgBx">
                <img src="Imagenes/fondoizq.jpg"/>
            </div>
            <div class="contentBx">
                <div class="formBx">
                    <h2>Inicio de Sesión</h2>
                    <form action="../Repositorio Institucional/accesorepositorio.php" method="post" target="_parent">
                        <div id="usuario">
                            <div class="inputBx">
                                <span>Usuario</span>
                                <?php
                                    session_start();
                                    if(isset($_SESSION['user'])){
                                        echo "<p class=guardado>".$_SESSION['user']."</p>";
                                    }else{
                                        echo "<input type=text name=user>";
                                    }
                                ?>
                            </div>
                            <div class="inputBx">
                                <span>Contraseña</span>
                                <?php
                                    if(isset($_SESSION['pass'])){
                                        $largo=($_SESSION['pass']);
                                        $cant=strlen($largo);
                                        $con="";
                                        for($i=1;$i<=$cant;$i++){
                                            $con=$con."*";
                                        }
                                        echo "<p class=guardado>".$con."</p>";
                                    }else{
                                        echo "<input type=password name=pass>";
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="recordar">
                            <?php
                                if(isset($_SESSION['user'])){
                                    echo "<label><input type=checkbox name=recordar checked=checked> Recordar sesión</label>";
                                }else{
                                    echo "<label><input type=checkbox name=recordar> Recordar sesión</label>";
                                }
                            ?>
                          
                        </div>
                        <div class="inputBx">
                        <input type="submit" value="Ingresar" name="ingresar" >  
                        </div>
                    
                        <div class="inputBx">
                            <p>¿No recuerda su contraseña? <a href="contraseña.php">Ingresa aqui</a></p>
                        </div>
                    </form>
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