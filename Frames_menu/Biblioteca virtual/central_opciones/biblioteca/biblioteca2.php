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
						<p><img width="100%" src="Imagenes/revista2.jpg" alt="revista2" /></p>
					</td>
					<td bgcolor="#EBF4FA" align="justify" height="70" valign="top">
						<p><a href="pdf/revista2.pdf" class="enlaces" class="titulo">
                            <b>Revista Iberoamericana de automática e informática industrial</b></a><br>
							<span class="autor">Autor: Pedro Albertos</span>
						<p class="info">Tipo de documento: Revista</p>
						<p class="info">
							<img src="Imagenes/book.png"><b></b>Descripcion: <br>
						<blockquote> Esta revista es una publicación de revisión por pares, de acceso abierto. El proceso de revisión se 
                            rige por la metodología de doble ciego. El editor realiza una evaluación inicial de todos los manuscritos 
                            recibidos para valorar su idoneidad para la revista. Los trabajos que se consideren adecuados se enviarán 
                            a un mínimo de dos revisores expertos independientes para evaluar la calidad científica del trabajo. El 
                            editor será el responsable de la decisión final respecto a la aceptación o rechazo de los artículos.
                            </blockquote>
						</p>
						</p>
					</td>
				</tr>
				<tr valign="middle" align="center">
					<td bgcolor="#FFE5B4" align="center" height="70" width="24%">
						<p><img width="100%" src="Imagenes/articulo2.jpg" alt="articulo2" /></p>
					</td>
					<td bgcolor="#EBF4FA" align="justify" height="70" valign="top">
						<p><a href="https://revistas.unsm.edu.pe/index.php/rcsi/article/view/133/329" class="enlaces" class="titulo">
                            <b>Simulación del proceso de polinización entomófila asistida en las plantaciones aceiteras del Shanusi para planificar escenarios futuros de producción</b></a><br>
							<span class="autor">Autor: Herson Zamora-Pinedo</span>
						<p class="info">Tipo de documento: Articulo</p>
						<p class="info">
							<img src="Imagenes/book.png"><b></b>Descripcion: <br>
						<blockquote> Las plantaciones de palma aceitera requieren de manejo y control de variables que permitan garantizar un exitoso proceso 
                            de cosecha, en el que se garantice altos niveles de eficacia de las plantaciones y eficiencia en el uso de los recursos asignados.
                             Diseñamos un modelo de simulación del proceso de polinización entomófila asistida en plantaciones de palmas aceiteras para la 
                             proyección de escenarios futuros de producción. Realizamos un estudio no experimental, de tipo descriptivo propositivo para generar
                              el modelo de simulación aplicando la metodología de dinámica de sistemas. Trabajamos con una muestra de 72 palmicultores, cuyas
                               parcelas están ubicadas en la de Región Loreto - Perú, a quienes aplicamos un instrumento para conocer el total de hectáreas,
                               número de parcelas, área, año de siembra, hectáreas en producción, con una polinización natural, racimos por planta, kilos por 
                               planta y porcentaje de inflorescencia polinizada y sin polinizar.</blockquote>
						</p>
						</p>
					</td>
				</tr>
				<tr valign="middle" align="center">
					<td bgcolor="#FFE5B4" align="center" height="70" width="24%">
						<p><img width="100%" src="Imagenes/libro2.jpg" alt="libro2" /></p>
					</td>
					<td bgcolor="#EBF4FA" align="justify" height="70" valign="top">
						<p><a href="http://docplayer.es/docview/26/9194274/" class="enlaces" class="titulo">
                            <b>Ingeniería De Sistemas</b></a><br>
							<span class="autor">Autor: Benjamin S. Blanchard</span>
						<p class="info">Tipo de documento: Libro</p>
						<p class="info">
							<img src="Imagenes/book.png"><b></b>Descripcion: <br>
						<blockquote>Un sistema puede variar por su forma, adecuación, y/o función. Se puede tratar con un grupo de 
                            aviones desarrollando una misión en una situación geográfica concreta, un barco o una capacidad de dirigir 
                            el combate, una red de comunicaciones capaz de distribuir información a nivel mundial, un sistema de 
                            distribución de energía que abarque canales y plantas generadoras de energía, una planta de fabricación 
                            capaz de producir «x» productos en un tiempo determinado, o un pequeño vehículo terrestre que realice el 
                            transporte de cierto tipo de carga de un lugar a otro. Cada sistema está formado por componentes, y éstos 
                            a su vez pueden descomponerse en otros más pequeños. Si en un sistema determinado se establecen dos niveles
                             jerárquicos, al inferior se le suele denominar «subsistema».</blockquote>
						</p>
						</p>
					</td>
				</tr>
				<tr valign="middle" align="center">
					<td bgcolor="#FFE5B4" align="center" height="70" width="24%">
						<p><img width="100%" src="Imagenes/tesis2.png" alt="tesis2" /></p>
					</td>
					<td bgcolor="#EBF4FA" align="justify" height="70" valign="top">
						<p><a href="pdf/tesis2.pdf" class="enlaces" class="titulo">
                            <b>Estudio comparativo de plataformas alternativas de videoconferencia basadas en software en el backbone de la ESPOCH</b></a><br>
							<span class="autor">Autor: Wilfrido Humberto Villacrés Suárez</span>
						<p class="info">Tipo de documento: Tesis</p>
						<p class="info">
							<img src="Imagenes/book.png"><b></b>Descripcion: <br>
						<blockquote> La ESPOCH cuenta con equipos de videoconferencia multipunto híbrido basado en hardware, ubicado en 
                            DESITEL, el mismo que tiene que ser trasladado a cada lugar que se requiera una sesión de video conferencia,
                             lo que se pretende con esta investigación es incrementar la disponibilidad de puntos de conexión de 
                             videoconferencia.</blockquote>
						</p>
						</p>
					</td>
				</tr>
			</table><br>
			<table align="center" style="border-radius:20px; border:3px dashed #FFA347; background:#fff;font-family: Pacifico,poppins;height:70px;width:280px">
				<tr>
					<td>
						<table align="center" width="100%" cellspacing="0px" cellpadding="5px" style="font-size:20px;">
							<tr>
								<td style="border-right:4px solid #FFA347;border-radius: 15px 0px 0px 15px;" class="celda1" width="100px" align="center">
									<a class="letra" href="biblioteca.php">Anterior</a> 
								</td>
								<td style="border-right:4px solid #FFA347;" class="celda1" width="50px" align="center">
									<a class="letra" href="biblioteca.php">1</a>
								</td>
								<td align="center" width="50px" class="celda1" style="border-radius:0px 15px 15px 0px; ">
									<a class="letra" href="biblioteca2.php">2</a>
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