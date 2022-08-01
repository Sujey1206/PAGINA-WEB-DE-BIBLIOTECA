<html>
<head>
	<meta charset="UTF-8">
	<title>Sistema de biblioteca</title>
	<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
	<style>
	.titulo2{font-family: Agency FB; font-size: 28px;border-radius: 25px;text-decoration: none;color: black;}
	.efecto:focus-within{border-bottom: none;background-color: #F3E5AB;}
	.efecto:hover{background-color: #f5eed1;}
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
	</style>
</head>
<body background="../../Imagenes/fondo.jpg">
	<header><img src="../Imagenes/portada3.png" alt="portada" width="100%" height="480"/></header>
	<div>
		<table bgcolor="#2C3539" width="100%" border="0" align="center" cellspacing="2" cellpadding="0">
			<tr>
				<td align="center" height="40">
					<table width="85%" border="0" align="center">
						<tr>
							<td align="center" height="90">
								<font size="4" color="#FFFFFF">El Repositorio de Tesis de Investigación de la UNFV es
									la plataforma donde se publican
									las tesis realizadas por la comunida de la Universidad Nacional Federico
									Villarreal. Las tesis son publicadas con un filtro de cada escuela profesional.</font>
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
				<select  name="filtro" id="filtro">
					<option value="Seleccionar" selected="selected">------- Catálogo de biblioteca -------</option>
					<option value="titulo">Título</option>
					<option value="autor">Autor</option>
					<option value="desc">Descripción</option>
					<option value="esc">Escuela</option>
				</select>ㅤ
				</td>
				<td valign="middle" align="center" width="70%" height="40px">
					<input type="text" id="formulario" placeholder="Escribir aqui.." size="80" name="text"/>

				</td>
				<td valign="middle"  >
					<input  class="boton1" type="submit" value="Buscar" name="Buscar" style="margin-top: 5px;margin-bottom: 2px;margin-left: 0px;margin-right: 80px;"/>
				</td>
			</tr>
			</form>
		</table>
	</nav>
	<hr align="center" size="2" width="100%"/>
	<hr align="center" size="2" width="100%"/>
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
						$sql="select * from tesis where autort like '%$texto%'";
						$cont = "select count(*) from tesis where autort like '%$texto%'";
						$num=mysqli_query($con,$cont);
						$cant = mysqli_fetch_array($num);
					}else if ($fil == "desc") {
						$sql="select * from tesis where desct like '%$texto%'";
						$cont = "select count(*) from tesis where desct like '%$texto%'";
						$num=mysqli_query($con,$cont);
						$cant = mysqli_fetch_array($num);
					}else if ($fil == "esc") {
						$sql="select * from tesis where escuela like '%$texto%'";
						$cont = "select count(*) from tesis where escuela like '%$texto%'";
						$num=mysqli_query($con,$cont);
						$cant = mysqli_fetch_array($num);
					}else {
						$sql="select * from tesis where titulot like '%$texto%'";
						$cont = "select count(*) from tesis where titulot like '%$texto%'";
						$num=mysqli_query($con,$cont);
						$cant = mysqli_fetch_array($num);
					}
					$datos=mysqli_query($con,$sql);
					while ($row=mysqli_fetch_array($datos,MYSQLI_ASSOC)) {
					$n++;
					$id=$row['idt'];
					$tit=$row['titulot'];
					$ref=$row['refimgt'];
					$aut=$row['autort'];
					$desct=$row['desct'];
					$refent=$row['refent'];
					$esc=$row['escuela'];
					if($cant[0] == 0){
					}else{
						echo "<p style=font-size:18px;margin-left:55px;><b>Se encontraron $cant[0] resultados para su búsqueda</b></p>";
						$cant[0] = 0;
					}
					echo "<table bordercolor=black width=90% border=3 align=center cellspacing=5 cellpadding=4 class=celda>
							<tr valign=middle align=center>
								<td bgcolor=#FFE5B4 align=center height=70 width=26% style=border: none;>
									<p><img width=100% height=330 src=../Imagenes/$ref alt=tesis_sist1 /></p>
								</td>
								<td bgcolor=#EBF4FA align=justify rowspan=2>
									<p><b><span class=titulo>$tit</span></b><br>
										<span class=autor>AUTOR: $aut</span><br>
										<span class=autor>ESCUELA: $esc</span><br>
										<br><img src=../Imagenes/book.png alt=libro /><span class=desc>Descripcion:</span>
									<blockquote class=desc>
										$desct
									</blockquote>
									</p>
									</div>
								</td>
							</tr>
							<tr>
								<td style=border:none;>
									<div class=inputBx>
									<a href=$refent target=_self><input type=button value=Ver Tesis></a>
									</div>
								</td>
							</tr>
						</table><br>";
					}
					if ($n==0) {
					echo "<br><table bordercolor=black width=95% border=3 align=center cellspacing=5 cellpadding=4 class=celda>
						<tr>
							<td class='mensaje'>No se ha encontrado ningún resultado para \"$texto\".</td>
						</tr>
						</table><br>";
					}
					mysqli_close($con);
				}else{
				echo "<br><table bordercolor=black width=95% border=3 align=center cellspacing=5 cellpadding=4 class=celda>
					<tr><td>Escribe un dato en el recuadro y haz click en Buscar</td></tr></table><br>";
				}
				unset($_POST['Buscar']);
			}
		?>
	</div>
	<section>
		<article>
			<img src="../../Imagenes/seccion.png" alt="seccion"/><font size="6" face="Agency FB"><b>&nbsp;&nbsp;TESIS POR ESCUELA</b></font><br><br>
			<table bordercolor="black" width="95%" border="3" align="center" cellspacing="0" cellpadding="10">			
				<tr valign="middle" align="center">
					<td bgcolor="#E5E4E2"align="center" height="50" width="25%" class="efecto"><a class="titulo2" href="facultad/fac-1.html" target="marco"><b>Ingenieria de Sistemas</b></a></td>
					<td bgcolor="#E5E4E2"align="center" height="50" width="25%" class="efecto"><a class="titulo2" href="facultad/fac-2.html" target="marco"><b>Ingenieria Industrial</b></a></td>
					<td bgcolor="#E5E4E2"align="center" height="50" width="25%" class="efecto"><a class="titulo2" href="facultad/fac-3.html" target="marco"><b>Ingenieria Agroindustrial</b></a></td>
					<td bgcolor="#E5E4E2"align="center" height="50" width="25%" class="efecto"><a class="titulo2" href="facultad/fac-4.html" target="marco"><b>Ingenieria de transportes</b></a></td>
				</tr>
				<tr valign="middle" align="center">
					<td colspan="4" height="2810" bgcolor="#F3E5AB" cellpadding="0" valign="top" style="border-top: none;"> 
						<iframe src="facultad/fac-1.html" name="marco" width="100%" height="100%" frameborder="none" margin="0" scrolling="no"> 
						</iframe>
					</td>
				</tr>
			</table>
		</article><br><br>
	</section>
	<footer style="background-image:url(../../Imagenes/fondonegro.jpg);">
	
		<table width="100%" border="0" align="center" cellspacing="0" cellpadding="0">
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>
					<table width="90%" border="0" align="center" cellspacing="0" cellpadding="5">
						<tr align="center">
	
							<td valign="top" colspan="2" align="left" height="70"><img width="80%" src="../../Imagenes/logo.png"
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
							<td valign="middle" align="right" width="1%"><img src="../../Imagenes/direccion.png"
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
							<td align="center"><img src="../../Imagenes/redes.png" usemap="#redes" />
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