<?php
session_start();
if(isset($_POST['cerrar'])){
		session_destroy();
		session_unset();
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
	<frame src="../Login/login.php" name="central"/>
</frameset>
</html>