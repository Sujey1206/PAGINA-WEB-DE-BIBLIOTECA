<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio de Sesion Administrador</title>
	  <link rel="menu icon" href="img/icon.png"/>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>

    <div class="login-box">
      <img src="img/adm.jpg" class="avatar" alt="Avatar Image">
      <h1>Bienvenido Administrador</h1>
      <form action="#" method="post">
        <label for="username">Nombre de Usuario</label>
        <input type="text" placeholder="Ingrese su nombre de usuario" name="user">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingrese su contraseña" name="pass">
        <input type="submit" value="Iniciar Sesion" name="boton">
      </form>
    </div>
    <?php 
      if(isset($_POST['boton'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $n=0;
        if($user=="admin" && $pass=="admin"){
          header("location:menu.php");
          $n++;
        }else if($user=="" || $pass==""){
          $n=1;
        }else{
          $n=2;
        }
        if($n==2){
          echo "Error de autentificacion";
          $n=0;
        }  
        unset($_POST['boton']);
      }
    ?>
  </body>
</html>
