<html>
<head>
	<meta charset="UTF-8">
	<title>Repositorio de revistas</title>
    <link rel="stylesheet" type="text/css" href="../../estilo.css" media="screen" />
</head>
<style>
	.tabla{
        border:5px solid #F09252;
        width:60%;
        align:center;
        padding:10px; 
        border-radius:40px;
        background:white;
    }
    .tablaint{
        border:3px dashed #F09252;
        width:100%;
        padding:5px; 
        border-radius:20px;
		padding:5px; 
    }
</style>
<body background="../../Imagenes/fondo.jpg">
	<header><img src="../../Imagenes/portadasolicitud.png" alt="portada" width="100%" height="480" /></header>
	<nav>
		<table bgcolor="#2C3539" width="100%" border="0" align="center" cellspacing="2" cellpadding="0">
			<tr>
				<td align="center" height="40">
					<table width="85%" border="0" align="center">
					<tr><td align="center" height="90">
					<font size="4" color="#FFFFFF">Bienvenido a la seccion de Solicitar cuenta, aquí se debe llenar un formulario para que el
                        personal administrativo evalúe entregarle una cuenta de usuario y de esa manera usted pueda acceder a nuestros libros, articulos, tesis entre mucha informacion más.
                    </font>
					</td></tr>
					</table>
				</td>
			</tr>
		</table>
	</nav>
	<hr align="center" size="2" width="100%"/>
	<hr align="center" size="2" width="100%"/>
	<section>
		<table width="98%" cellpadding="5px">
            <tr>
                <td>
                    <form action="comprobar.php" method="post" name="form" enctype="multipart/form-data">
                        <table class="tabla" width="540px" >
                            <tr>
                                <td>
                                    <table class="tablaint">
										<tr>
											<td>
												<fieldset title="Datos de la Persona">
													<legend style="font-weight:bold;"><b>Ingrese sus Datos Personales</b></legend>
													<p>Nombres:   <input type="text" name="Nombre" size="30" /></p>
													<p>Apellidos: <input type="text" name="Apellidos" size="30" /></p>
													<p>DNI: <input type="text" name="dni" size="30" /></p>
													<p>Edad:         <input type="text" name="Edad" maxlength="2" size="6" /></p>
													<p>Fecha de nacimiento:  <input type="date" name="Nacimiento"/></p>
													<table cellpadding="0">
														<tr>
															<td align="left" width="50">Sexo:</td>
															<td align="left" width="120">   <input type="radio" name="Sexo"
																	value="Femenino" checked="checked"/>
																Femenino</td>
															<td align="left" width="120">   <input type="radio" name="Sexo"
																	value="Masculino">Masculino
															</td>
														</tr>
													</table>
													<p>N&uacute;mero de telefono: <input type="text" name="Telefono" size="21"
															maxlength="9" placeholder="965 485 384 o 01 3456712" /></p>
													<p>Direcci&oacute;n: <input type="text" name="Direccion" size="31"
															placeholder="Av. Los Sauces Mz. S17 Lte 27" /></p>
													<p>Provincia en la reside:  
														<select name="Provincia">
															<option checked="checked">Seleccione una opcion</option>
															<option value="Arequipa">Arequipa</option>
															<option value="Huanuco">Huanuco</option>
															<option value="Lima">Lima</option>
															<option value="Huancavelica">Huancavelica</option>
															<option value="Loreto">Loreto</option>
															<option value="Ayacucho">Ayacucho</option>
															<option value="Ucayali">Ucayali</option>
															<option value="Madre de Dios">Madre de Dios</option>
															<option value="Tumbes">Tumbes</option>
															<option value="Piura">Piura</option>
															<option value="Amazonas">Amazonas</option>
															<option value="Otras provincias">Otras provincias</option>
															<option value="Extranjero">Extranjero</option>
														</select>
													</p>
													<p>E-mail: <input type="text" name="Email" size="34"
															placeholder="Por ejemplo, unfv@gmail.com" /></p>
													<p>¿Quien nos visita?</p>
													<p><input type="radio" name="Tipo" value="Estudiante universitario" checked="checked"/>Estudiante universitario </p>
													<p><input type="radio" name="Tipo" value="Estudiante de instituto técnico" />Estudiante de instituto técnico </p>
													<p>  Otro, especificar:   <input type="text" name="Tipo2" size="22"/></p>
													<p>Ingresar su Institucion Educativa:  <input type="text" name="Institucion"/></p>
													
												</fieldset>
												<br>
												<fieldset>
													<legend style="font-weight:bold;"><b>Justificacion</b></legend>
													<p>¿Porque quisieras una cuenta de usuario?</p>
													<textarea name="Comentario" rows="5" cols="65"
														placeholder="Escribe tu comentario:"></textarea>
												</fieldset>
											</td>
										</tr>
									</table>
                                </td>
                            </tr>
                        </table>
                       <br>
                    <center><input type="submit" value="Comprobar la Solicitud" class="boton"/>          
                            <input type="reset" value="Borrar todo"  class="boton"/></center>
                        <br>
                    </form>
                </td>
                <td valign="top">
                    <table>
                        <tr><td align="right" ><img src="../../Imagenes/portada2.png" width="414" style="border-radius: 15px;"/></td></tr>
                        <tr>
                            <td>
                                <div class="contenedor">
                                    <div id="slider"></div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
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
							<td valign="middle" align="right" width="1%"><img src="../../Imagenes/telefono.png" alt="telefono" />
							</td>
							<td valign="middle" align="left">
								<p>
									<font color="#FFFFFF" size="4" face="Agency FB"><b>CENTRAL TELEFÓNICA: (+51) 748
											0888<br></b></font>
								</p>
							</td>
						</tr>
						<tr>
							<td valign="middle" align="right" width="1%"><img src="../../Imagenes/correo.png" alt="correo" /></td>
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