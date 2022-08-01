<html>
<head>
	<meta charset="UTF-8">
	<title>Material de biblioteca</title>
	<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<style>
		.titulo2 {
			font-family: Agency FB;
			font-size: 28px;
			border-radius: 25px;
			text-decoration: none;
			color: black;
		}

		.efecto:focus-within {
			border-bottom: none;
			background-color: #F3E5AB;
		}

		.efecto:hover {
			background-color: #f5eed1;
		}

		.enlaces {
			color: #ED7D31;
			text-decoration: none;
			font-size: 24;
			font-family: Agency FB;
		}

		.titulo {
			font-size: 24;
			font-family: Agency FB;
			color: #ED7D31
		}

		.autor {
			font-size: 17;
			font-family: Agency FB;
		}

		.info {
			font-size: 20;
			font-family: Agency FB;
		}

		.desc {
			font-size: 19;
		}
		.seccion{font-family: Agency FB; font-size: 32px;}
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
	<header><img src="../../Imagenes/portada3.jpg" alt="portada" width="100%" height="300" /></header>
	<nav>
		<table bgcolor="#FFA62F" width="100%" border="0" align="center" cellspacing="2" cellpadding="0">
			<form action="#" method="post">
			<tr valign="middle" align="center">
				<td valign="middle" align="center" width="30%">
					<select name="filtro" id="filtro">
						<option value="seleccionar" selected="selected">------------ Seleccionar ------------</option>
						<option value="titulo">Titulo</option>
						<option value="autor">Autor</option>
						<option value="tipo">Tipo de documento</option>
						<option value="desc">Descripción</option>
					</select>
				</td>
				<td valign="middle" align="center" width="70%" height="10">
					<input type="text" id="formulario" placeholder="Escribir aqui.." size="80" name="text"/>
				</td>
				<td valign="middle"  >
					<input  class="boton1" type="submit" value="Buscar" name="Buscar" style="margin-top: 5px;margin-bottom: 5px;margin-left: 0px;margin-right: 80px;"/>
				</td>
			</tr>
			</form>
		</table>
	</nav>
	<hr align="center" size="2" width="100%" />
	<hr align="center" size="2" width="100%" />
	<div>
		<?php
			if(isset($_POST['Buscar'])){
				$n=0;
				if (isset($_POST['text']) and $_POST['text'] !=""){
					$texto=$_POST['text'];
					$con=mysqli_connect("localhost:3307","root","");
					mysqli_select_db($con,"pagina");
					$fil=$_POST['filtro'];
					if ($fil == "autor") {
						$sql="select * from biblio where autorb like '%$texto%'";
						$cont = "select count(*) from biblio where autorb like '%$texto%'";
						$num=mysqli_query($con,$cont);
						$cant = mysqli_fetch_array($num);
					} else if ($fil == "tipo") {
						$sql="select * from biblio where tipob like '%$texto%'";
						$cont = "select count(*) from biblio where tipob like '%$texto%'";
						$num=mysqli_query($con,$cont);
						$cant = mysqli_fetch_array($num);
					} else if ($fil == "desc") {
						$sql="select * from biblio where descb like '%$texto%'";
						$cont = "select count(*) from biblio where descb like '%$texto%'";
						$num=mysqli_query($con,$cont);
						$cant = mysqli_fetch_array($num);
					}else {
						$sql="select * from biblio where titulob like '%$texto%'";
						$cont = "select count(*) from biblio where titulob like '%$texto%'";
						$num=mysqli_query($con,$cont);
						$cant = mysqli_fetch_array($num);
					}
					$datos=mysqli_query($con,$sql);
					while ($row=mysqli_fetch_array($datos,MYSQLI_ASSOC)) {
					$n++;
					$id=$row['idb'];
					$tit=$row['titulob'];
					$ref=$row['refb'];
					$aut=$row['autorb'];
					$tip=$row['tipob'];
					$desc=$row['descb'];
					$refen=$row['reftitb'];
					if($cant[0] == 0){
					}else{
						echo "<p style=font-size:18px;margin-left:26px;><b>Se encontraron $cant[0] resultados para su búsqueda</b></p>";
						$cant[0] = 0;
					}
					echo "<table bordercolor=black width=95% border=3 align=center cellspacing=5 cellpadding=4 class=celda>
					<tr valign=middle align=center>
						<td bgcolor=#FFE5B4 align=center height=70 width=24%>
							<p><img width=100% src=Imagenes/$ref alt=tesis1 /></p>
						</td>
						<td bgcolor=#EBF4FA align=justify height=70 valign=top>
							<p><a href=$refen class=enlaces class=titulo><b>$tit</b></a><br>
								<span class=autor>Autor: $aut</span>
								<p class=info>Tipo de documento: $tip</p>
								<p class=info>
									<img src=Imagenes/book.png><b></b>Descripcion: <br>
								<blockquote> $desc</blockquote>
								</p>
							</p>
						</td>
					</tr>
					</table><br>";
					}
					if ($n==0) {
					echo "<br><table bordercolor=black width=95% border=3 align=center cellspacing=5 cellpadding=4 class=celda>
						<tr>
							<td class='mensaje'>No se ha encontrado ningún resultado para \"$texto\".</td>
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
		<article>
			<br><img src="../../Imagenes/seccion.png" alt="seccion" />
			<font size="6" face="Agency FB"><b>&nbsp;&nbsp;BÚSQUEDA</b></font><br><br>
			<table bordercolor="black" width="95%" border="3" align="center" cellspacing="10" cellpadding="4">
				<tr valign="middle" align="center">
					<td bgcolor="#FFE5B4" align="center" height="70" width="24%">
						<p><img width="100%" src="Imagenes/tesis1.png" alt="tesis1" /></p>
					</td>
					<td bgcolor="#EBF4FA" align="justify" height="70" valign="top">
						<p><a href="pdf/tesis1.pdf" class="enlaces" class="titulo"><b>Prototipo de Sistema Experto para el diagnóstico
									de fallas en una red de área local</b></a><br>
							<span class="autor">Autor: Cesar Condori Amanqui | Ernesto Walter Ticona Huanca</span>
						<p class="info">Tipo de documento: Tesis</p>
						<p class="info">
							<img src="Imagenes/book.png"><b></b>Descripcion: <br>
						<blockquote> La información hoy en día es tan importante en todas las
							organizaciones y las redes LAN permiten compartir información
							y recursos entre todos los usuarios, por ello es necesario
							desarrollar un software sistema experto que ayude a solucionar
							las fallas de una red LAN. Este proyecto de tesis, denominado “PROTOTIPO DE SISTEMA EXPERTO
							PARA EL
							DIAGNOSTICO DE FALLAS DE UNA RED DE AREA LOCAL”. Diagnóstica las fallas de hardware
							de conectividad, fallas de hardware de interfaz, fallas de software de
							comunicaciones y fallas de usuario, y de acuerdo con el tipo de fallo encontrado el
							sistema experto nos mostrara una solución.</blockquote>
						</p>
						</p>
					</td>
				</tr>
				<tr valign="middle" align="center">
					<td bgcolor="#FFE5B4" align="center" height="70" width="24%">
						<p><img width="100%" src="Imagenes/libro1.png" alt="libro1" /></p>
					</td>
					<td bgcolor="#EBF4FA" align="justify" height="70" valign="top">
						<p><a href="http://www.aliat.org.mx/BibliotecasDigitales/sistemas/Programacion_basica.pdf" class="enlaces" class="titulo"><b>Programación Básica</b></a><br>
							<span class="autor">Autor: Manuel Josue Escobar Cristiani</span>
						<p class="info">Tipo de documento: Libro</p>
						<p class="info">
							<img src="Imagenes/book.png"><b></b>Descripcion: <br>
						<blockquote> Que el estudiante aprenda cómo nació el lenguaje de programación “C” y su importancia en el
							 desarrollo de los sistemas de cómputo, así como algunos conceptos básicos, pero en extremo importantes,
							  utilizados en la programación de sistemas. El objetivo principal de este libro es enseñarle al alumno el lenguaje 
							  de programación “C”; para lograr este objetivo es muy importante, que durante el curso, el alumno tenga acceso a un
							   equipo con el compilador “C” y así aprender mediante la programación constante de ejemplos y proyectos.</blockquote>
						</p>
						</p>
					</td>
				</tr>
				<tr valign="middle" align="center">
					<td bgcolor="#FFE5B4" align="center" height="70" width="24%">
						<p><img width="100%" src="Imagenes/articulo1.png" alt="articulo1" /></p>
					</td>
					<td bgcolor="#EBF4FA" align="justify" height="70" valign="top">
						<p><a href="https://www.um.es/ead/red/46/Basogain.pdf" class="enlaces" class="titulo"><b>Pensamiento Computacional a través de la Programación: Paradigma de Aprendizaje</b></a><br>
							<span class="autor">Autor: Xabier Basogain Olabe | Miguel Ángel Olabe Basogain</span>
						<p class="info">Tipo de documento: Articulo</p>
						<p class="info">
							<img src="Imagenes/book.png"><b></b>Descripcion: <br>
						<blockquote> Este artículo presenta el concepto del Pensamiento Computacional y cómo puede ser integrado en el
							 aula a través del diseño e implementación de proyectos de programación. Se describe la necesidad, el propósito
							  y las principales características del Pensamiento Computacional. Se muestra con varios ejemplos cómo se pueden
							   desarrollar los elementos fundamentales del Pensamiento Computacional utilizando un lenguaje programación.
							    La última sección del artículo muestra el contenido y los resultados del curso “Pensamiento Computacional 
								en la Escuela” impartido en la modalidad MOOC (Massive Open Online Courses) en la plataforma Miríada X.</blockquote>
						</p>
						</p>
					</td>
				</tr>
				<tr valign="middle" align="center">
					<td bgcolor="#FFE5B4" align="center" height="70" width="24%">
						<p><img width="100%" src="Imagenes/revista1.jpg" alt="revista1" /></p>
					</td>
					<td bgcolor="#EBF4FA" align="justify" height="70" valign="top">
						<p><a href="https://revistas.unsm.edu.pe/index.php/rcsi/issue/view/27/46TITULO:" class="enlaces" class="titulo"><b>Revista científica de sistemas e informática</b></a><br>
							<span class="autor">Autor: Universidad Nacional de San Martín </span>
						<p class="info">Tipo de documento: Revista</p>
						<p class="info">
							<img src="Imagenes/book.png"><b></b>Descripcion: <br>
						<blockquote> Las revistas científicas de acceso abierto han incrementado exponencialmente el número de publicaciones
							 y el número de autores respectivamente, los cuales pueden publicar un artículo científico y hacerse responsable
							  de su contenido. Generalmente, el autor principal mantiene esa denominación y los otros autores suelen 
							  denominarse coautores, sin embargo, la autoría de un manuscrito es responsabilidad entera de todos los que
							   consignan sus datos en el mismo. En muchos artículos científicos, los autores suelen invitar a otros
							    profesionales para colaborar con los manuscritos, esta es una práctica que permite compartir diferentes
								 puntos de vista, mejorar la calidad de la redacción científica e incluir a investigadores de diferentes
								  nacionalidades (Jetal., 2017).</blockquote>
						</p>
						</p>
					</td>
				</tr>
			</table>
			<br>
			<table align="center" style="border-radius:20px; border:3px dashed #FFA347; background:#fff;font-family: Pacifico,poppins;height:70px;width:280px">
				<tr>
					<td>
						<table align="center" width="100%" cellspacing="0px" cellpadding="5px" style="font-size:20px;">
							<tr>
								<td style="border-right:4px solid #FFA347;border-radius: 15px 0px 0px 15px;" class="celda1" width="50px" align="center">
									<a class="letra" href="biblioteca.php">1</a>
								</td>
								<td style="border-right:4px solid #FFA347;" class="celda1" width="50px" align="center">
									<a class="letra" href="biblioteca2.php">2</a>
								</td>
								<td align="center" width="100px" class="celda1" style="border-radius:0px 15px 15px 0px;">
									<a class="letra" href="biblioteca2.php">Siguiente</a> 
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</article><br>
		<article>
			<img src="../../Imagenes/seccion.png" alt="seccion" />
			<font size="6" face="Agency FB"><b>&nbsp;&nbsp;DOCUMENTOS MÁS BUSCADOS</b></font><br><br>
			<table bordercolor="black" width="95%" border="3" align="center" cellspacing="0" cellpadding="10">
				<tr valign="middle" align="center">
					<td bgcolor="#E5E4E2" align="center" height="50" width="25%" class="efecto"><a class="titulo2"
							href="tipos/libros.html" target="marco"><b>Libros</b></a></td>
					<td bgcolor="#E5E4E2" align="center" height="50" width="25%" class="efecto"><a class="titulo2"
							href="tipos/tesis.html" target="marco"><b>Tesis</b></a></td>
					<td bgcolor="#E5E4E2" align="center" height="50" width="25%" class="efecto"><a class="titulo2"
							href="tipos/revistas.html" target="marco"><b>Revistas</b></a></td>
					<td bgcolor="#E5E4E2" align="center" height="50" width="25%" class="efecto"><a class="titulo2"
							href="tipos/articulos.html" target="marco"><b>Artículos</b></a></td>
				</tr>
				<tr valign="middle" align="center">
					<td colspan="4" bgcolor="#F3E5AB" height="2600" cellpadding="0" valign="top"
						style="border-top: none;">
						<iframe src="tipos/libros.html" name="marco" width="100%" height="100%" frameborder="none"
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