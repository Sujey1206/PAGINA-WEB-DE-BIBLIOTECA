<!DOCTYPE html PUBLI "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
<html>
<head>
	<meta charset="UTF-8">
	<title>Sistema de biblioteca</title>
	<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<style>
	  .boton1{
		text-decoration: none;
		padding: 2px 5px 2px 5px;
		font-weight: 600;
		font-size: 18px;
		color: #ffffff;
		text-shadow: 2px 2px 8px #262626;
		background-color: #C6C7C1;
		border-radius:3px;
		border: 2px solid #A2A49A;
		font-family: Agency FB;
		cursor:pointer;
		height:30px;
		width:100px;
	}
	.boton1:hover{
		color: #C6C7C1;
		text-shadow: 2px 2px 8px #fff;
		background-color: #ffffff;
	}
	.celda1:hover{
		font-size: 25px;
		background-color: #FFA347;
	}
	.letra{
		padding: 0px 5px 0px 5px;
		text-decoration:none;
		color:black
	}
	.letra:hover{
		color: #ffffff;
	}
	</style>
</head>

<body background="../../Imagenes/fondo.jpg">
	<header><img src="../../Imagenes/portada1.jpg" alt="portada" width="100%" height="300" /></header>
	<div>
		<table bgcolor="#2C3539" width="100%" border="0" align="center" cellspacing="2" cellpadding="0">
			<tr>
				<td align="center" height="60">
					<table width="85%" border="0" align="center">
						<tr>
							<td align="justify">
								<font size="4" color="#FFFFFF">¡AVISO! Para el servicio de prestamo de libros se
									requiere una cuenta de usuario, si
									aun no lo tienes por favor dirigirse a la parte de Servicios en solicitud de cuenta,
									para que nuestro personal administrativo
									pueda dar acceso a ello.
								</font>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	<nav>
		<table bgcolor="#FFA62F" width="100%" border="0" align="center" cellspacing="2" cellpadding="0">
			<form action="#" method="post">
			<tr valign="middle" align="center">
				<td valign="middle" align="center" width="30%">ㅤ
					<select name="filtro" id="filtro">
						<option value="seleccionar" selected="selected">------- Catálogo de biblioteca -------</option>
						<option value="titulo">Titulo</option>
						<option value="autor">Autor</option>
						<option value="editorial">Editorial</option>
						<option value="disponibilidad">Disponibilidad</option>
						<option value="formato">Formato</option>
						<option value="forma">Forma literaria</option>
						<option value="clasi">Clasificación COD</option>
					</select>ㅤ
				</td>
				<td valign="middle" align="center" width="70%" height="10">
					<input type="text" id="formulario" placeholder="Escribir aqui.." size="80" name="text"/>
				</td>
				<td valign="middle"  >
					<input  class="boton1" type="submit" value="Buscar" name="Buscar" style="margin-top: 5px;margin-bottom: 2px;margin-left: 0px;margin-right: 80px;"/>
				</td>
			</tr>
			</form>
		</table>
	</nav>
	<hr align="center" size="2" width="100%" />
	<hr align="center" size="2" width="100%" />
	</div>
	<div>
	<?php
		if(isset($_POST['Buscar'])){
			$n=0;
			if (isset($_POST['text']) and $_POST['text'] !=""){
				$texto=$_POST['text'];
				$con=mysqli_connect("localhost:3306","root","");
				mysqli_select_db($con,"pagina");
				$fil=$_POST['filtro'];
				if ($fil == "autor") {
					$sql="select * from sigb where autors like '%$texto%'";
					$cont = "select count(*) from sigb where autors like '%$texto%'";
					$num=mysqli_query($con,$cont);
					$cant = mysqli_fetch_array($num);
				} else if ($fil == "editorial") {
					$sql="select * from sigb where editorials like '%$texto%'";
					$cont = "select count(*) from sigb where editorials like '%$texto%'";
					$num=mysqli_query($con,$cont);
					$cant = mysqli_fetch_array($num);
				} else if ($fil == "disponibilidad") {
					$sql="select * from sigb where dispons like '%$texto%'";
					$cont = "select count(*) from sigb where dispons like '%$texto%'";
					$num=mysqli_query($con,$cont);
					$cant = mysqli_fetch_array($num);
				} else if ($fil == "formato") {
					$sql="select * from sigb where formatos like '%$texto%'";
					$cont = "select count(*) from sigb where formatos like '%$texto%'";
					$num=mysqli_query($con,$cont);
					$cant = mysqli_fetch_array($num);
				} else if ($fil == "forma") {
					$sql="select * from sigb where formas like '%$texto%'";
					$cont = "select count(*) from sigb where formas like '%$texto%'";
					$num=mysqli_query($con,$cont);
					$cant = mysqli_fetch_array($num);
				} else if ($fil == "clasi") {
					$sql="select * from sigb where clasis like '%$texto%'";
					$cont = "select count(*) from sigb where clasis like '%$texto%'";
					$num=mysqli_query($con,$cont);
					$cant = mysqli_fetch_array($num);
				} else {
					$sql="select * from sigb where titulos like '%$texto%'";
					$cont = "select count(*) from sigb where titulos like '%$texto%'";
					$num=mysqli_query($con,$cont);
					$cant = mysqli_fetch_array($num);
				}
				$datos=mysqli_query($con,$sql);
				while ($row=mysqli_fetch_array($datos,MYSQLI_ASSOC)) {
				$n++;
				$id=$row['ids'];
				$tit=$row['titulos'];
				$ref=$row['refimgs'];
				$aut=$row['autors'];
				$edit=$row['editorials'];
				$dis=$row['dispons'];
				$format=$row['formatos'];
				$form=$row['formas'];
				$clas=$row['clasis'];
				if($cant[0] == 0){
				}else{
					echo "<p style=font-size:18px;margin-left:55px;><b>Se encontraron $cant[0] resultados para su búsqueda</b></p>";
					$cant[0] = 0;
				}
				echo "<table bordercolor=black width=90% border=3 align=center cellspacing=5 cellpadding=4 class=celda>
						<tr valign=middle align=center>
							<td bgcolor=#FFE5B4 align=center height=70 width=16%> <p><img width=100% src=Imagenes/$ref alt=libro1/></p></td>
							<td bgcolor=#EBF4FA align=justify height=70>
								<p><a class=titulo3>$tit</a><br>
									<span class=autor>$aut</span>
									<p><span class=tipo>Tipo de material: Texto<img src=Imagenes/book.png alt=libro /> | Formato: $format | Forma
										literaria: $form<br>
										Pie de imprenta: $edit<br>
										Disponibilidad: Ítems disponibles para préstamo: $dis<br>
										Clasificación COD: $clas</span>
									</p>
							</td>
						</tr>
					</table><br>";
				}
				if ($n==0) {
				echo "<br><table bordercolor=black width=95% border=3 align=center cellspacing=5 cellpadding=4 class=celda>
					<tr>
						<td class='mensaje'>No se ha encontrado ningún resultado para el libro \"$texto\".</td>
					</tr>
					</table>";
				}
				mysqli_close($con);
			}else{
			echo "<br><table bordercolor=black width=95% border=3 align=center cellspacing=5 cellpadding=4 class=celda>
				<tr><td>Escribe un dato en el recuadro y haz click en Buscar</td></tr></table>";
			}
			unset($_POST['Buscar']);
		}
	?>
	</div>
	<section>
		<br><img src="../../Imagenes/seccion.png" alt="seccion" />
		<font size="6" face="Agency FB"><b>&nbsp;&nbsp;LIBROS SOLICITADOS</b></font><br><br>
		<table align="center" style="border:5px solid #FFA347; width:60%; padding:5px; border-radius:20px; background:white;">
			<tr>
				<td>
					<table style="border:3px dashed #FFA347;width:100%; padding:10px; border-radius:20px;">
						<tr>
							<td>
							<form action="../../../Servicios/central_opciones/prestamodelibros/prestamo.php" method="post" name="form" enctype="multipart/form-data">
									<fieldset title="Nombre de los libros">
										<legend style="font-weight:bold;"><b>Ingrese los datos del primer libro</b></legend>
										<p>Titulo del primer libro:  <input type="text" name="nombre1" size="40"/></p>
										<p>Código del primer libro:  <input type="text" name="codigo1" size="40"/></p>
									</fieldset><br>
									<fieldset title="Nombre de los libros">
										<legend style="font-weight:bold;"><b>Ingrese los datos del segundo libro</b></legend>
										<p>Titulo del segundo libro:  <input type="text" name="nombre2" size="40"/></p>
										<p>Código del segundo libro:  <input type="text" name="codigo2" size="40"/></p>
									</fieldset>
								
							</td>
						</tr>
						<tr>
							<td align="center"><input type="submit" value="Ir a la solicitud" class="btn1" style="font-family: Agency FB; font-weight:bold; font-size:20px;"/></td>
						</tr>
						</form>
					</table>
				</td>
			</tr>
		</table>
	</section>
	<section>
		<article>
			<br><img src="../../Imagenes/seccion.png" alt="seccion" />
			<font size="6" face="Agency FB"><b>&nbsp;&nbsp;LIBROS MÁS BUSCADOS</b></font><br><br>
			<table bordercolor="black" width="95%" border="3" align="center" cellspacing="10" cellpadding="4">
				<tr valign="middle" align="center">
					<td bgcolor="#FFE5B4" align="center" height="70" width="16%">
						<p><img width="100%" src="Imagenes/libro1.jpg" alt="libro1" /></p>
					</td>
					<td bgcolor="#EBF4FA" align="justify" height="70">
						<p>
							<font size="8" face="Agency FB"><a href="sigb-1-libro.html" class="titulo3">Ingeniería
									sanitaria y de aguas residuales
									Purificación de aguas y tratamiento y remoción de aguas residuales Gordon Maskew
									Fair, John Charles Geyer, Daniel Alexander
									Okun ; [traductor, Salvador Ayanegui J.]</a><br>
								<font size="3">por Fair, Gordon Maskew, 1894-1970 | Geyer, John Charles, 1906-1995
									[coaut.] | Okun, Daniel Alexander [coaut.].</font><br>
								<font size="4">Clasificación COD: 628.1 / F16</font><br>
								<p>
									<font size="4">Tipo de material: Texto<img src="Imagenes/book.png" alt="libro" /> |
										Formato: impreso | Forma literaria: No es ficción<br>
										Pie de imprenta: México, D.F. Limusa 1990 2008<br>
										Disponibilidad: Ítems disponibles para préstamo: Arquitectura y Urbanismo (1),
										Industrial y Sistemas (2).</font>
								</p>
							</font>
						</p>
					</td>
				</tr>
				<tr valign="middle" align="center">
					<td bgcolor="#FFE5B4" align="center" height="70" width="16%">
						<p><img width="100%" src="Imagenes/libro2.jpg" alt="libro2" /></p>
					</td>
					<td bgcolor="#EBF4FA" align="justify" height="70">
						<p>
							<font size="5" face="Agency FB"><a href="sigb-1-libro2.html" class="titulo3">Administración
									de los sistemas de información</a><br>
								<font size="3">por OZ, Effy.</font><br>
								<font size="4">Clasificación COD: 658.40388 / OZ99/2008</font>
								<p>
									<font size="4">Tipo de material: Texto<img src="Imagenes/book.png" alt="libro" /> |
										Formato: impreso | Forma literaria: No es ficción<br>
										Pie de imprenta: México, D.F International Thomson 2008<br>
										Disponibilidad: Ítems disponibles para préstamo: Ciencias Financieras y
										Contables (2), Electrónica e Informática (1),
										Industrial y Sistemas (1).</font>
								</p>
							</font>
						</p>
					</td>
				</tr>
				<tr valign="middle" align="center">
					<td bgcolor="#FFE5B4" align="center" height="70" width="16%">
						<p><img width="100%" src="Imagenes/libro3.jpg" alt="libro3" /></p>
					</td>
					<td bgcolor="#EBF4FA" align="justify" height="70">
						<p>
							<font size="5" face="Agency FB"><a href="sigb-1-libro3.html" class="titulo3">Administración
									de los sistemas de producción Gustavo Velázquez Mastretta</a><br>
								<font size="3">por Velázquez Mastretta, Gustavo.</font><br>
								<font size="4">Clasificación COD: 338.6 / V38/2012</font>
								<p>
									<font size="4">Tipo de material: Texto<img src="Imagenes/book.png" alt="libro" /> |
										Formato: impreso | Forma literaria: No es ficción<br>
										Pie de imprenta: México D.F. Limusa 2012<br>
										Disponibilidad: Ítems disponibles para préstamo: Industrial y Sistemas (5),
										Oceanografía, Pesquería, Ciencias Alimentarias y
										Acuicultura (1)</font>
								</p>
							</font>
						</p>
					</td>
				</tr>
				<tr valign="middle" align="center">
					<td bgcolor="#FFE5B4" align="center" height="70" width="16%">
						<p><img width="100%" src="Imagenes/libro4.jpg" alt="libro3" /></p>
					</td>
					<td bgcolor="#EBF4FA" align="justify" height="70">
						<p>
							<font size="5" face="Agency FB"><a href="sigb-1-libro4.html" class="titulo3">Administración
									de sistemas operativos Windows y Linux un enfoque
									práctico Julio Gómez López, Nicolás Padilla Soriano, Juan Antonio Gil
									Martínez-Abarca</a><br>
								<font size="3">por Gómez López, Julio | Padilla Soriano, Nicolás, coaut | Gil
									Martínez-Abarca, Juan Antonio, coaut.</font><br>
								<font size="4">Clasificación COD: 001.61 / G65</font>
								<p>
									<font size="4">Tipo de material: Texto<img src="Imagenes/book.png" alt="libro" /> |
										Formato: impreso | Forma literaria: No es ficción<br>
										Pie de imprenta: México D.F. Alfaomega 2007<br>
										Disponibilidad: Ítems disponibles para préstamo: Electrónica e Informática (2),
										Industrial y Sistemas (2).</font>
								</p>
							</font>
						</p>
					</td>
				</tr>
			</table>
			<br>
			<table align="center" style="border-radius:20px; border:3px dashed #FFA347; background:#fff;font-family: Pacifico,poppins;height:70px;width:280px">
				<tr>
					<td>
						<table align="center" width="100%" cellspacing="0px" cellpadding="5px" style="font-size:20px; ">
							<tr>
								<td style="border-right:4px solid #FFA347;border-radius: 15px 0px 0px 15px;" class="celda1" width="50px" align="center">
									<a class="letra" href="sigb-1.php">1</a>
								</td>
								<td style="border-right:4px solid #FFA347;" class="celda1" width="50px" align="center">
									<a class="letra" href="sigb-2.php">2</a>
								</td>
								<td align="center" width="100px" class="celda1" style="border-radius:0px 15px 15px 0px;">
									<a class="letra" href="sigb-2.php">Siguiente</a> 
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</article><br>
		<article>
			<img src="../../Imagenes/seccion.png" alt="seccion" />
			<font size="6" face="Agency FB"><b>&nbsp;&nbsp;LIBROS POR ESCUELA</b></font><br><br>
			<table bordercolor="black" width="95%" border="3" align="center" cellspacing="0" cellpadding="10">
				<tr valign="middle" align="center">
					<td bgcolor="#E5E4E2" align="center" height="50" width="25%" class="efecto"><a class="titulo2"
							href="Facultad/fac-1.php" target="marco"><b>Ingenieria de Sistemas</b></a></td>
					<td bgcolor="#E5E4E2" align="center" height="50" width="25%" class="efecto"><a class="titulo2"
							href="Facultad/fac-2.php" target="marco"><b>Ingenieria Industrial</b></a></td>
					<td bgcolor="#E5E4E2" align="center" height="50" width="25%" class="efecto"><a class="titulo2"
							href="Facultad/fac-3.php" target="marco"><b>Ingenieria Agroindustrial</b></a></td>
					<td bgcolor="#E5E4E2" align="center" height="50" width="25%" class="efecto"><a class="titulo2"
							href="Facultad/fac-4.php" target="marco"><b>Ingenieria de transportes</b></a></td>
				</tr>
				<tr valign="middle" align="center">
					<td colspan="4" bgcolor="#F3E5AB" height="2070" cellpadding="0" valign="top"
						style="border-top: none;">
						<iframe src="Facultad/fac-1.php" name="marco" width="100%" height="100%" frameborder="none"
							margin="0" scrolling="no">
						</iframe>
					</td>
				</tr>
			</table>
		</article><br><br>
	</section>
	<footer style="background-image:url(../../../Imagenes/fondonegro.jpg);">

		<table width="100%" border="0" align="center" cellspacing="0" cellpadding="0">
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>
					<table width="90%" border="0" align="center" cellspacing="0" cellpadding="5">
						<tr align="center">

							<td valign="top" colspan="2" align="left" height="70"><img width="80%"
									src="../../../Imagenes/logo.png" alt="logo" /></td>
							<td valign="bottom" rowspan="3" align="left" height="70">
								<p>
									<font color="#FFFFFF" size="6" face="Agency FB"><b>&nbsp;&nbsp;UBÍCANOS<br></b>
									</font>
								</p>
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.138530880411!2d-77.04953217032292!3d-12.04673516226469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9a5dac3ca31%3A0x9ef3d6b14994baf7!2sUNFV%20-%20Facultad%20de%20Ingenier%C3%ADa%20Industrial%20y%20de%20Sistemas%20(FIIS)!5e0!3m2!1ses-419!2spe!4v1642058567922!5m2!1ses-419!2spe"
									width="450" height="230"></iframe>
							</td>
						</tr>
						<tr>
							<td valign="middle" align="right" width="1%"><img src="../../../Imagenes/direccion.png"
									alt="direccion" /></td>
							<td valign="middle" align="left">
								<p>
									<font color="#FFFFFF" size="4" face="Agency FB"><b>AUSPICIADO POR: <a
												href="http://www.unfv.edu.pe/vrin/"
												style="color:#ffcc99; text-decoration: none;">Vicerrectorado de
												Investigación</a><br></b></font>
								</p>
							</td>
						</tr>
						<tr>
							<td valign="middle" align="right" width="1%"><img src="../../Imagenes/telefono.png"
									alt="telefono" />
							</td>
							<td valign="middle" align="left">
								<p>
									<font color="#FFFFFF" size="4" face="Agency FB"><b>CENTRAL TELEFÓNICA: (+51) 748
											0888<br></b></font>
								</p>
							</td>
						</tr>
						<tr>
							<td valign="middle" align="right" width="1%"><img src="../../Imagenes/correo.png"
									alt="correo" /></td>
							<td valign="middle" align="left">
								<p>
									<font color="#FFFFFF" size="4" face="Agency FB"><b>CORREO INSTITUCIONAL: <a
												href="mailto:bibliocent@unfv.edu.pe"
												style="color: white; font-style: italic;">
												bibliocent@unfv.edu.pe</a><br></b>
									</font>
								</p>
							</td>
							<td align="center"><img src="../../../Imagenes/redes.png" usemap="#redes" />
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