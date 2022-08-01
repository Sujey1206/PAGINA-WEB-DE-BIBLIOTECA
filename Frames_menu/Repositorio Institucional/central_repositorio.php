<?php
session_start();
$us=$_COOKIE['usuario'];
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Repositorio cientifico</title>
	<style>
		.boton{
			text-decoration: none;
			padding: 4px;
			font-weight: 600;
			font-size: 23px;
			color: #ffffff;
			background-color: #F09252;
			border-radius: 6px;
			border: 2px solid #ED7D31;
			font-family: Agency FB;
			height:40px;
			cursor:pointer;
		}
		.boton:hover{
			color: #ED7D31;
			background-color: #ffffff;
		}
	</style>
</head>
<body background="Imagenes/fondo.jpg">
	<header><img src="Imagenes/portada.png" alt="portada" width="100%" height="500" /></header>
	<nav>
		<table bgcolor="#2C3539" width="100%" border="0" align="center" cellspacing="2" cellpadding="0">
			<tr>
				<td align="center" height="40">
					<table width="85%" border="0" align="center">
					<tr><td align="center" height="90">
					<font size="4" color="#FFFFFF">El Repositorio Científico es una unidad orgánica técnica-administrativa de la Biblioteca
					Central, la cual depende del Vicerrectorado de Investigación de la Universidad Nacional Federico Villarreal. Es 
					responsable de la visibilización de la producción científica con el objetivo de contribuir al posicionamiento de la
					Universidad.</font>
					</td></tr>
					</table>
				</td>
			</tr>
		</table>
	</nav>
	<hr align="center" size="2" width="100%"/>
	<nav>
		<table bgcolor="#2C3539" width="100%" align="center" cellspacing="2" cellpadding="0" height="10px" style="padding:2px;">
			<tr>
				<td align="center">
					<table width="100%" align="center" style="border: 2px dashed white;">
						<tr>
							<td align="center" style=" letter-spacing: 2px;">
								<font size="4" color="#FFFFFF"><?php echo "Bienvenido al repositorio institucional usuario $us.";?></font>
							</td>
							<td align="center" valign="middle" width="300px">
								<form action="../Repositorio Institucional/menu_repositorio.php" method="post" target="_parent">
									<p><input class="boton" style="margin-top:15px;" type="submit" value="Cerrar Sesión" name="cerrar"/></p>
								</form>	
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</nav>
	<hr align="center" size="2" width="100%"/>
	<section>
		<br><img src="../Imagenes/seccion.png" alt="seccion"/><font size="6" face="Agency FB"><b>&nbsp;&nbsp;LO QUE ENCONTRARÁS</b></font><br><br>
		<table bordercolor="black" width="80%" border="1" align="center" cellspacing="0" cellpadding="10">			
			<tr valign="middle" align="center">
				<td bgcolor="#FFE5B4" width="33%"><p><font size="5" face="Agency FB"><b>SOBRE EL REPOSITORIO</b></font></td>
				<td bgcolor="#FFE5B4" width="34%"><p><font size="5" face="Agency FB"><b>REVISTAS Y DATOS ESTADÍSTICOS</b></font></td>
				<td bgcolor="#FFE5B4" width="33%"><p><font size="5" face="Agency FB"><b>PUBLICACIÓN DE TRABAJOS</b></font></td>
			</tr>
			<tr>
				<td bgcolor="#EBF4FA" width="33%" align="justify"><p><font size="4" face="Agency FB"><b>Repositorio Institucional UNFV</b><br><br>
				En el Repositorio Institucional se alojan las publicaciones académicas, científicas y tecnológicas, producidas en la 
				Universidad Nacional Federico Villarreal, organizadas en comunidades y colecciones.</font></td>
				<td bgcolor="#EBF4FA" width="33%" align="justify"><p><font size="4" face="Agency FB"><b>Revistas de investigación y datos
				estadísticos</b><br><br>
				Los artítulos de las revistas editadas por la UNFV y sus dependecias se publican en el 
				<a href="https://revistas.unfv.edu.pe/" target="_blank">Repositorio de Revistas de Investigación</a> y los datos estadísticos y con fines
				de investigación en el <a href="https://datos.unfv.edu.pe/" target="_blank">Repositorio de Datos</a></font></td>
				<td bgcolor="#EBF4FA" width="33%" align="justify"><p><font size="4" face="Agency FB"><b>Publicación de trabajos de investigación</b><br><br>
				Para la publicación de las tesis y trabajos para optar grados y títulos, los graduandos deberán revisar los documentos 
				que se encuentran en la sección "Documentos de interés".</font></td>
			</tr>
		</table><br><br>		
	</section>
	<section>
		<div>
		<br><img src="Imagenes/seccion.png" alt="seccion"/><font size="6" face="Agency FB"><b>&nbsp;&nbsp;REPOSITORIO CIENTÍFICO</b></font><br><br>
		<table bordercolor="black" width="80%" border="1" align="center" cellspacing="0" cellpadding="10">			
			<tr valign="middle" align="center">
				<td rowspan="2" bgcolor="#EBF4FA" align="justify"> <p><font size="6" face="Agency FB"><b>REGLAMENTO</b><br>
				El presente reglamento del Repositorio Científico norma los procedimientos para recolectar, integras, estandarizar, almacenar, 
				preservar y difundir la produccion cientifico.
				</font></p></td>
				<td bgcolor="#FFE5B4"align="center" width="20%"><p>
				<img width="100%" src="Imagenes/reglamento.png" alt="reglamento"/></p></td>
			</tr>
			<tr>
				<td bgcolor="#FFE5B4"align="center" width="10%"><p>
				<a href="Imagenes/reglamento.pdf" target="_blank"><img width="100%" src="Imagenes/descargar.png" alt="descargar"/></a></p></td>
			</tr>
		</table><br>
		<table bordercolor="black" width="80%" border="1" align="center" cellspacing="0" cellpadding="10">			
			<tr valign="middle" align="center">
				<td rowspan="2" bgcolor="#EBF4FA" align="justify"> <p><font size="6" face="Agency FB"><b>POLÍTICAS DEL REPOSITORIO CIENTÍFICO</b><br>
				Estas políticas orientan el cumplimiento de actividades para almacenar, preservar y difundir la producción académica, 
				científica y tecnología en la Universidad.
				</font></p></td>
				<td bgcolor="#FFE5B4"align="center" width="20%"><p>
				<img width="100%" src="Imagenes/politicas.png" alt="politicas"/></p></td>
			</tr>
			<tr>
				<td bgcolor="#FFE5B4"align="center" width="10%"><p>
				<a href="Imagenes/politicas.pdf" target="_blank"><img width="100%" src="Imagenes/descargar.png" alt="descargar"/></a></p></td>
			</tr>
		</table><br>
		<table bordercolor="black" width="80%" border="1" align="center" cellspacing="0" cellpadding="10">			
			<tr valign="middle" align="center">
				<td rowspan="2" bgcolor="#EBF4FA" align="justify"> <p><font size="6" face="Agency FB"><b>GUÍA PARA PRESENTACIÓN DE TRABAJOS DE INVESTIGACIÓN</b><br>
				Con el propósito de uniformizar la presentación de trabajos de investigación, se pone a disposición de la comunidad villarrealina la
				presente guía.
				</font></p></td>
				<td bgcolor="#FFE5B4"align="center" width="20%"><p>
				<img width="100%" src="Imagenes/guia.png" alt="guia"/></p></td>
			</tr>
			<tr>
				<td bgcolor="#FFE5B4"align="center" width="10%"><p>
				<a href="Imagenes/guia.pdf" target="_blank"><img width="100%" src="Imagenes/descargar.png" alt="descargar"/></a></p></td>
			</tr>
		</table><br>
		<table bordercolor="black" width="80%" border="1" align="center" cellspacing="0" cellpadding="10">			
			<tr valign="middle" align="center">
				<td rowspan="2" bgcolor="#EBF4FA" align="justify"> <p><font size="6" face="Agency FB"><b>CARÁTULA PARA PRESENTACIÓN DE TRABAJOS</b><br>
				Descarga el modelo de carátula que se debe utilizar para la presentación de trabajos de investigación.
				</font></p></td>
				<td bgcolor="#FFE5B4"align="center" width="20%"><p>
				<img width="100%" src="Imagenes/caratula.png" alt="caratula"/></p></td>
			</tr>
			<tr>
				<td bgcolor="#FFE5B4"align="center" width="10%"><p>
				<a href="Imagenes/caratula.pdf" target="_blank"><img width="100%" src="Imagenes/descargar.png" alt="descargar"/></a></p></td>
			</tr>
		</table><br>
		<table bordercolor="black" width="80%" border="1" align="center" cellspacing="0" cellpadding="10">			
			<tr valign="middle" align="center">
				<td rowspan="2" bgcolor="#EBF4FA" align="justify"> <p><font size="6" face="Agency FB"><b>MANUAL DEL USUARIO URKUND</b><br>
				En el Manual de Usuario usted podrá encontrar los pasos a seguir para poder realizar la prueba antiplagio a todo texto que 
				se deseé analizar.
				</font></p></td>
				<td bgcolor="#FFE5B4"align="center" width="20%"><p>
				<img width="100%" src="Imagenes/manual.png" alt="manual"/></p></td>
			</tr>
			<tr>
				<td bgcolor="#FFE5B4"align="center" width="10%"><p>
				<a href="Imagenes/manual.pdf" target="_blank"><img width="100%" src="Imagenes/descargar.png" alt="descargar"/></a></p></td>
			</tr>
		</table>
		</div><br>		
	</section>
	<footer style="background-image:url(../Imagenes/fondonegro.jpg);">
	
		<table width="100%" border="0" align="center" cellspacing="0" cellpadding="0">
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>
					<table width="90%" border="0" align="center" cellspacing="0" cellpadding="5">
						<tr align="center">
	
							<td valign="top" colspan="2" align="left" height="70"><img width="80%" src="../Imagenes/logo.png"
									alt="logo" /></td>
							<td valign="bottom" rowspan="3" align="left" height="70">
								<p>
									<font color="#FFFFFF" size="6" face="Agency FB"><b>&nbsp;&nbsp;UBÍCANOS<br></b></font>
								</p>
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.138530880411!2d-77.04953217032292!3d-12.04673516226469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9a5dac3ca31%3A0x9ef3d6b14994baf7!2sUNFV%20-%20Facultad%20de%20Ingenier%C3%ADa%20Industrial%20y%20de%20Sistemas%20(FIIS)!5e0!3m2!1ses-419!2spe!4v1642058567922!5m2!1ses-419!2spe"
									width="450" height="230"></iframe>
							</td>
						</tr>
						<tr>
							<td valign="middle" align="right" width="1%"><img src="../Imagenes/direccion.png"
									alt="direccion" /></td>
							<td valign="middle" align="left">
								<p>
									<font color="#FFFFFF" size="4" face="Agency FB"><b>AUSPICIADO POR: <a href="http://www.unfv.edu.pe/vrin/" style="color:#ffcc99; text-decoration: none;">Vicerrectorado de Investigación</a><br></b></font>
								</p>
							</td>
						</tr>
						<tr>
							<td valign="middle" align="right" width="1%"><img src="../Imagenes/telefono.png" alt="telefono" />
							</td>
							<td valign="middle" align="left">
								<p>
									<font color="#FFFFFF" size="4" face="Agency FB"><b>CENTRAL TELEFÓNICA: (+51) 748
											0888<br></b></font>
								</p>
							</td>
						</tr>
						<tr>
							<td valign="middle" align="right" width="1%"><img src="../Imagenes/correo.png" alt="correo" /></td>
							<td valign="middle" align="left">
								<p>
									<font color="#FFFFFF" size="4" face="Agency FB"><b>CORREO INSTITUCIONAL: <a
												href="mailto:bibliocent@unfv.edu.pe"
												style="color: white; font-style: italic;"> bibliocent@unfv.edu.pe</a><br></b>
									</font>
								</p>
							</td>
							<td align="center"><img src="../Imagenes/redes.png" usemap="#redes" />
								<map name="redes">
									<area alt="facebook" shape="rect" coords="2,3,103,43"
										href="https://www.facebook.com/UNFV.EDU" target="_blank" />
									<area alt="twitter" shape="rect" coords="118,2,224,41"
										href="https://twitter.com/UNFVoficial" target="_blank" />
									<area alt="youtube" shape="rect" coords="233,0,332,40"
										href="https://www.youtube.com/user/PrensaUNFV" target="_blank" />
									<area alt="instagram" shape="rect" coords="348,1,448,40"
										href="https://www.instagram.com/unfvoficial/" target="_blank" />
								</map>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</footer>
</body>
</html>