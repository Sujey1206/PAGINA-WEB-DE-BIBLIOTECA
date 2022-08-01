<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Menu Administrador</title>
	<link rel="menu icon" href="img/icon.png"/>
    <link rel="stylesheet" href="css/eleccion.css">
	<link rel="stylesheet" href="css/style.css">
  </head>
  <body margin = 0px;>
     <header></header>
	 <br><br><br>
      <table align ="center" style="margin-top:50px; margin-left:20px;" >
	    <tr> 
				<td width="500px">
					<table class="tabla">
						<tr>
							<td>
							   <table class="tablaint">
									<tr>
										<td height="25px">
										   <center><span style="font-weight: bold; font-size:40px; ">SOLICITUDES</span></center>
										</td>
									</tr>
									<tr align="center">
										<td>
										   <table style="padding:10px">
												<tr>
													<td><a href="inicio.php" target="centro" class="boton">Inicio</a></td>
													<td><a href="buscar/leer.php" target="centro" class="boton">Buscar</a></td>
													<td><a href="eliminar/borrar.php" target="centro" class="boton">Eliminar</a></td>
												</tr>
										   </table>
										</td>
									</tr>
									<tr valign="middle" align="center">
										<td><iframe src="inicio.php" width="100%" height="450" name="centro"></iframe></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>


				
				<td width="1000px" height="520px">
					<table width="100%" align="right" style="padding:20px">
						<tr>
							<td width="100%" height="520px">
								<table width="95%" align="center">
									<tr>
										<td>
											<nav>
											<a href="registrocuentas/insertar.php" target="zona">INSERTAR</a>
											<a href="registrocuentas/modificar.php" target="zona">MODIFICAR</a>
											<a href="registrocuentas/buscar.php" target="zona">BUSCAR</a>
											<a href="registrocuentas/eliminar.php" target="zona">ELIMINAR</a>
											<a href="registrocuentas/mostrar.php" target="zona">MOSTRAR</a>
											<div class="animation start-home"></div>
											</nav><br>
										</td>
									</tr>
									<tr>
										<td colspan="5">
											<iframe src="registrocuentas/inicio.php" name="zona" class="cuadro">
											</iframe>
										</td>
									</tr>
									<tr><td><table align="center" style="margin-top:20px"><tr>
										<td style="padding:10px;"><a  href="registrocuentas/inicio.php" target="zona" class="boton">INICIO</a></td>
										<td><a href="menu.php" class="boton">VOLVER</a></td>
									</tr></table> </td></tr>
								</table>
							</td>
						</tr>	
					</table>
				</td>
		</tr>
	  </table>
  </body>
</html>