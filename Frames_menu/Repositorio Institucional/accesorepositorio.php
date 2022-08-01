<?php
session_start();
if(isset($_POST['recordar']) || isset($_POST['user'])){
	if(isset($_POST['user'])){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$_SESSION['user']=$user;
		$_SESSION['pass']=$pass;
		setcookie('usuario',$user,time()+3600000);
		$con=mysqli_connect("localhost:3307","root","");
        mysqli_select_db($con,"pagina");
        $sql="select * from cuentas where usuario='$user' and contraseña='$pass'";
		$res=mysqli_query($con,$sql);
		$filas=mysqli_num_rows($res);
		if($filas){
			$n=2;
		}else{
			header("location:menu_repositorio.php");
			session_destroy();
		}
	}
}else if(isset($_SESSION['user'])){
	$user=$_SESSION['user'];
	$pass=$_SESSION['pass'];
	setcookie('usuario',$user,time()+3600000);
	$con=mysqli_connect("localhost:3307","root","");
        mysqli_select_db($con,"pagina");
        $sql="select * from cuentas where usuario='$user' and contraseña='$pass'";
		$res=mysqli_query($con,$sql);
		$filas=mysqli_num_rows($res);
		if($filas){
			$n=2;
		}else{
			header("location:menu_repositorio.php");
			session_destroy();
		}
}else{
	session_destroy();
}
if(isset($_POST['recordar'])){
}else{
	session_destroy();
	if($n==2){
	}else{
		header("location:menu_repositorio.php");
	}
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="menu icon" href="../../Imagenes/icono.ico"/>
	<title>Men&uacute Principal del Repositorio</title>
	<meta name="Keywords" content="Menú, biblioteca"/>
	<meta name="Description" content="Menú Principal del repositorio de la unfv.Meta tags"/>
	<meta http-equiv="Content-Language" content="es"/>
	<meta name="Distribution" content="global"/>
	<meta name="Robots" content="index"/>
</head>
<frameset rows="130,*" border="0" noresize="noresize">
	<frame src="cabecera_repositorio.php" scrolling="no" />
		<frameset cols="9%,*,16%">
			<frame src="izquierda_repositorio.php" scrolling="no"/>
			<frame src="central_repositorio.php" name="central"/>
			<frame src="derecha_repositorio.php" />
		</frameset>
</frameset>
</html>
