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
      <table align="center" width="100%" style="margin-top:50px;" >
	    <tr> 
				<td width="95%" height="520px">
					<table width="100%" align="right" style="padding:20px" border="0">
						<tr>
							<td width="100%" height="520px">
								<table width="100%" align="center" border="0">
									<tr>
										<td>
											<nav>
											<a href="registrosbiblio/insertar.php" target="zona">INSERTAR</a>
											<a href="registrosbiblio/modificar.php" target="zona">MODIFICAR</a>
											<a href="registrosbiblio/buscar.php" target="zona">BUSCAR</a>
											<a href="registrosbiblio/eliminar.php" target="zona">ELIMINAR</a>
											<a href="registrosbiblio/mostrar.php" target="zona">MOSTRAR</a>
											<div class="animation start-home"></div>
											</nav><br>
										</td>
									</tr>
									<tr>
										<td colspan="5">
											<iframe src="registrosbiblio/inicio.php" name="zona" class="cuadro">
											</iframe>
										</td>
									</tr>
									<tr><td><table align="center" style="margin-top:20px"><tr>
										<td style="padding:10px;"><a  href="registrosbiblio/inicio.php" target="zona" class="boton">INICIO BIBLIOTECA</a></td>
										<td><a href="eleccion.php" class="boton">VOLVER</a></td>
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