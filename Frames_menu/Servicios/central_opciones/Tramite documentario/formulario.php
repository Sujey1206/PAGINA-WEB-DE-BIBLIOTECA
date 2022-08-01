<html>
<head>
	<meta charset="UTF-8">
	<title>Repositorio de revistas</title>
    <link rel="stylesheet" type="text/css" href="../../estilo.css" media="screen" />
	<style>
		.linea{width: 100%;margin-bottom: 10px;display: flex;justify-content: flex-start;}
      	.dato{width: 35%;margin-right: 10px;}
    	.input{width: 70%;margin-right: 1px;}
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
</head>
<body background="../../Imagenes/fondo.jpg">
	<header><img src="../../Imagenes/tramite.png" alt="portada" width="100%" height="480" /></header>
	<nav>
		<table bgcolor="#2C3539" width="100%" border="0" align="center" cellspacing="2" cellpadding="0">
			<tr>
				<td align="center" height="40">
					<table width="85%" border="0" align="center">
					<tr><td align="center" height="90">
					<font size="4" color="#FFFFFF">Bienvenido a la seccion de Trámite documentario, aquí se debe llenar un formulario para que el
                        personal administrativo evalúe entregarle su trámite respectivo.
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
		<table width="98%" cellpadding="5px" >
            <tr>
                <td valign="top">
                    <form action="comprobar.php" method="post" name="form" enctype="multipart/form-data">
                        <table class="tabla" width="572px">
                            <tr>
                                <td>
                                    <table class="tablaint">
										 <tr>
											 <td>
													<fieldset title="Tramite Documentario">
													<legend style="font-weight:bold;"><b>Ingrese los Datos</b></legend>
													<p class="linea"><span class="dato">Trámite a realizar:</span>
													
														<select  class="input" name="Tramite">
														<option value="Seleccionar" selected="selected">SELECCIONAR</option>
														<option value="Acceso a la informacion">Acceso a la información</option>
														<option value="Boleta de Notas">Boleta de Notas</option>
														<option value="Carne universitario">Carné universitario</option>
														<option value="Certificado de estudios">Certificado de estudios</option>
														<option value="Certificado de ingreso">Certificado de ingreso</option>
														<option value="Constancia de matricula">Constancia de matricula</option>
														<option value="Constancia de orden de merito">Constancia de orden de mérito</option>
														<option value="Constancia de tercio superior">Constancia de tercio superior</option>
														<option value="Constancia de titulo profesional">Constancia de titulo profesional</option>
														<option value="Constancia de perdida de recibo de pago">Constancia de perdida de recibo de pago</option>
														<option value="Copia de expediente de contratacion">Copia de expediente de contratación</option>
														<option value="Obtencion de titulo profesional - Modalidad tesis">Obtención de titulo
															profesional - Modalidad tesis</option>
														</select>
													</p>
													<p class="linea"><span class="dato">Dependencia de Ref.:</span>

														<select class="input" name="Dependencia">
															<option value="Seleccionar" selected="selected">SELECCIONAR</option>
															<option value="(CEPREVI) CENTRO PREUNIVERSITARIO VILLARREAL">(CEPREVI) CENTRO PRE.
																VILLARREAL</option>
															<option value="(CI) CENTRO DE IDIOMAS">(CI) CENTRO DE IDIOMAS</option>
															<option value="(CURES) CENTRO UNIV. DE RESP. SOCIAL">(CURES) CENTRO UNIV. DE RESP. SOCIAL</option>
															<option value="(DIGA) DIRECCION GENERAL DE ADMINISTRACION">(DIGA) DIRECCION GENERAL DE
																ADMI.#2C3539</option>
															<option value="(EUPG) ESCUELA UNIVERSITARIA DE POSTGRADO">(EUPG) ESC. UNIVERSITARIA DE
																POSTGRADO</option>
															<option value="(FAPS) PSICOLOGIA">(FAPS) PSICOLOGIA</option>
															<option value="(FIEI) ING. ELECTRONICA E INFORMATICA">(FIEI) ING. ELECTRONICA E
																INFORMATICA</option>
															<option value="(FIGAE) ING. GEOGRAFICA, AMBIENTAL Y ECOTURISMO">(FIGAE) ING. GEOGRAFICA,
																AMBIENTAL Y ECO.</option>
															<option value="(FIIS) ING. INDUSTRIAL Y DE SISTEMAS">(FIIS) ING. INDUSTRIAL Y DE
																SISTEMAS</option>
															<option value="(FMHU) MEDICINA HIPOLITO UNANUE">(FMHU) MEDICINA "HIPOLITO UNANUE"</option>
															<option value="(FO) ODONTOLOGIA">(FO) ODONTOLOGIA</option>
															<option value="(OCA) OFC. CENTRAL DE ADMISION">(OCA) O.C. DE ADMISION</option>
															<option value="(OCAA) OFC. CENTRAL DE ASUNTOS ACADEMICOS">(OCAA) O.C. DE ASUNTOS
																ACADEMICOS</option>
															<option value="(OCBU) OFC. CENTRAL DE BIENESTAR UNIV.">(OCBU) O.C. DE
																BIENESTAR UNIV.</option>
															<option value="(OCRAC) OFC. CENTRAL DE REGISTRO ACADEMICO">(OCRAC) O.C. DE
																REGISTRO ACADEMICO</option>
															<option value="(R) RECTORADO">(R) RECTORADO</option>
															<option value="(SG) SECRETARIA GENERAL">(SG) SECRETARIA GENERAL</option>
															<option value="(VRAC) VICE- RECTORADO ACADEMICO">(VRAC) VICE- RECTORADO ACADEMICO</option>
														</select>
													</p>
													<p>Tipo de solicitante:</p><p>

														           <input type="radio" name="Solicitante" value="Estudiante" checked="checked" />Estudiante            
														<input type="radio" name="Solicitante" value="Docente" />Docente             
														<input type="radio" name="Solicitante" value="Administrativo" />Administrativo
														&nbsp;&nbsp;&nbsp;&nbsp;
														<br><br>                 <input type="radio" name="Solicitante" value="Empresa o Entidad Pública" />Empresa o Entidad
														Pública &nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="Solicitante" value="Persona Natural" />Persona Natural
														&nbsp;&nbsp;&nbsp;&nbsp;
													</p>
													<p class="linea"><span style="margin-top: 8px;" class="dato">Tipo de Documento:</span>

														<select style="margin-top: 8px;" class="input" name="Documento">
															<option value="Seleccionar" selected="selected">SELECCIONAR</option>
															<option value="DNI">DNI</option>
															<option value="PASAPORTE">PASAPORTE</option>
															<option value="CARNÉ DE EXTRANJERIA">CARNÉ DE EXTRANJERIA</option>
															<option value="RUC">RUC</option>
														</select>
													</p>
													<p class="linea">
														<span class="dato">Número de documento:</span><input class="input" type="text" name="Numero" maxlength="8" size="40"/>
													</p>
													<p class="linea">
														<span class="dato">Apellido Paterno:</span><input class="input" type="text" name="Paterno" size="40" />
													</p>
													<p class="linea">
														<span class="dato">Apellido Materno:</span><input class="input" type="text" name="Materno" size="40" />
													</p>
													<p class="linea">
														<span class="dato">Nombres:</span><input class="input" type="text" name="Nombres" size="40" />
													</p>
													<p class="linea">
														<span class="dato">Facultad del solicitante:</span>

														<select name="Facultad" class="input">
															<option value="Seleccionar" selected="selected">SELECCIONAR</option>
															<option value="(CEPREVI) CENTRO PREUNIVERSITARIO VILLARREAL">(CEPREVI) CENTRO PRE. VILLARREAL</option>
															<option value="(CI) CENTRO DE IDIOMAS">(CI) CENTRO DE IDIOMAS</option>
															<option value="(EUDED) ESCUELA UNIVER. DE EDUCACION A DISTANCIA">(EUDED) ESC. UNIV. DE
																EDUCACION A DIST.</option>
															<option value="(EUPG) ESCUELA UNIVERSITARIA DE POSTGRADO">(EUPG) ESC. UNIV. DE
																POSTGRADO</option>
															<option value="(FA) DE ADMINISTRACION">(FA) DE ADMINISTRACION</option>
															<option value="(FAPS) PSICOLOGIA">(FAPS) PSICOLOGIA</option>
															<option value="(FAU) ARQUITECTURA Y URBANISMO">(FAU) ARQUITECTURA Y URBANISMO</option>
															<option value="(FCCSS) CIENCIAS SOCIALES">(FCCSS) CIENCIAS SOCIALES</option>
															<option value="(FCE) CIENCIAS ECONOMICAS">(FCE) CIENCIAS ECONOMICAS</option>
															<option value="(FCFC) CIENCIAS FINANCIERAS Y CONTABLES">(FCFC) CIENCIAS FIN. Y CONTABLES
															</option>
															<option value="(FCNM) CIENCIAS NATURALES Y MATEMATICA">(FCNM) CIENCIAS NAT. Y MATEMATICA
															</option>
															<option value="(FDCP) DERECHO Y CIENCIA POLITICA">(FDCP) DERECHO Y CIENCIA POLITICA</option>
															<option value="(FE) EDUCACION">(FE) EDUCACION</option>
															<option value="(FH) HUMANIDADES">(FH) HUMANIDADES</option>
															<option value="(FIC) INGENIERIA CIVIL">(FIC) INGENIERIA CIVIL</option>
															<option value="(FIEI) INGENIERIA ELECTRONICA E INFORMATICA">(FIEI) ING.ELECTRONICA E
																INFORMATICA</option>
															<option value="(FIGAE) ING. GEOGRAFICA, AMBIENTAL Y ECOTURISMO">(FIGAE) ING. GEO.,
																AMBIENTAL Y ECO.</option>
															<option value="(FIIS) INGENIERIA INDUSTRIAL Y DE SISTEMAS">(FIIS) ING. INDUSTRIAL Y DE
																SISTEMAS</option>
															<option value="(FMHU) MEDICINA HIPOLITO UNANUE">(FMHU) MEDICINA "HIPOLITO UNANUE"</option>
															<option value="(FO) ODONTOLOGIA">(FO) ODONTOLOGIA</option>
															<option value="(FOPCA) OCEANOGRAFIA, PESQUERIA Y CC.AA.">(FOPCA) OCE., PESQUERIA Y
																CC.AA.</option>
															<option value="(FTM) TECNOLOGIA MEDICA">(FTM) TECNOLOGIA MEDICA</option>
														</select>
													</p>
													<p class="linea">
														<span class="dato">Esc. del solicitante:</span>

														<select class="input" name="Escuela">
															<option value="Seleccionar" selected="selected">SELECCIONAR</option>
															<option value="ESCUELA PROFESIONAL DE INFORMÁTICA">ESC. PROF. DE INFORMÁTICA</option>
															<option value="ESCUELA PROFESIONAL DE INGENIERÍA DE TELECOMUNICACIONES">ESC. PROF. DE
																INGENIERÍA DE TELEC.</option>
															<option value="ESCUELA PROFESIONAL DE INGENIERÍA ELECTRÓNICA">ESC. PROF. DE INGENIERÍA
																ELECTRÓNICA</option>
															<option value="ESCUELA PROFESIONAL DE MECATRÓNICA">ESC. PROF. DE MECATRÓNICA</option>
															<option value="ESCUELA PROFESIONAL DE INGENIERÍA AMBIENTAL">ESC. PROF. DE INGENIERÍA
																AMBIENTAL</option>
															<option value="ESCUELA PROFESIONAL DE INGENIERÍA EN ECOTURISMO">ESC. PROF. DE
																INGENIERÍA EN ECOTURISMO</option>
															<option value="ESCUELA PROFESIONAL DE INGENIERÍA GEOGRÁFICA">ESC. PROF. DE INGENIERÍA
																GEOGRÁFICA</option>
															<option value="ESCUELA PROFESIONAL DE INGENIERÍA AGROINDUSTRIAL">ESC. PROF. DE
																INGENIERÍA AGROINDUSTRIAL</option>
															<option value="ESCUELA PROFESIONAL DE INGENIERÍA DE SISTEMAS">ESC. PROF. DE INGENIERÍA
																DE SISTEMAS</option>
															<option value="ESCUELA PROFESIONAL DE INGENIERÍA DE TRANSPORTES">ESC. PROF. DE
																INGENIERÍA DE TRANSPORTES</option>
															<option value="ESCUELA PROFESIONAL DE INGENIERÍA INDUSTRIAL">ESC. PROF. DE INGENIERÍA
																INDUSTRIAL</option>
															<option value="ESCUELA PROFESIONAL DE ENFERMERÍA">ESC. PROF. DE ENFERMERÍA</option>
															<option value="ESCUELA PROFESIONAL DE MEDICINA">ESC. PROF. DE MEDICINA</option>
															<option value="ESCUELA PROFESIONAL DE NUTRICIÓN">ESC. PROF. DE NUTRICIÓN</option>
															<option value="ESCUELA PROFESIONAL DE OBSTETRICIA">ESC. PROF. DE OBSTETRICIA</option>
															<option value="ESCUELA PROFESIONAL DE INGENIERÍA ALIMENTARIA">ESC. PROF. DE INGENIERÍA
																ALIMENTARIA</option>
															<option value="ESCUELA PROFESIONAL DE INGENIERÍA EN ACUICULTURA">ESC. PROF. DE
																INGENIERÍA EN ACUICULTURA</option>
															<option value="ESCUELA PROFESIONAL DE INGENIERÍA PESQUERA">ESC. PROF. DE INGENIERÍA
																PESQUERA</option>
															<option value="ESCUELA PROFESIONAL DE CIENCIA POLÍTICA">ESC. PROF. DE CIENCIA POLÍTICA
															</option>
															<option value="ESCUELA PROFESIONAL DE DERECHO">ESC. PROF. DE DERECHO</option>
														</select>
													</p>
													<p class="linea">
														<span class="dato">Código del solicitante:</span><input class="input" type="text" name="Codigo" size="40"/>	
													</p>
													<p class="linea">
														<span class="dato">Departamento:</span>

														<select class="input" name="Departamento">
															<option value="Seleccionar" selected="selected">SELECCIONAR</option>
															<option value="AMAZONAS">AMAZONAS</option>
															<option value="ANCASH">ANCASH</option>
															<option value="APURIMAC">APURIMAC</option>
															<option value="AREQUIPA">AREQUIPA</option>
															<option value="AYACUCHO">AYACUCHO</option>
															<option value="CAJAMARCA">CAJAMARCA</option>
															<option value="CALLAO">CALLAO</option>
															<option value="CUSCO">CUSCO</option>
															<option value="HUANCAVELICA">HUANCAVELICA</option>
															<option value="HUANUCO">HUANUCO</option>
															<option value="ICA">ICA</option>
															<option value="JUNIN">JUNIN</option>
															<option value="LA LIBERTAD">LA LIBERTAD</option>
															<option value="LAMBAYEQUE">LAMBAYEQUE</option>
															<option value="LIMA">LIMA</option>
															<option value="LORETO">LORETO</option>
															<option value="MADRE DE DIOS">MADRE DE DIOS</option>
															<option value="MOQUEGUA">MOQUEGUA</option>
															<option value="PASCO">PASCO</option>
															<option value="PIURA">PIURA</option>
															<option value="PUNO">PUNO</option>
															<option value="SAN MARTIN">SAN MARTIN</option>
															<option value="TACNA">TACNA</option>
															<option value="TUMBES">TUMBES</option>
															<option value="UCAYALI">UCAYALI</option>
														</select>
													</p>
													<p class="linea"><span class="dato">Provincia:</span><input class="input" type="text" name="Provincia" size="50" /></p>
													<p class="linea"><span class="dato">Distrito:</span><input class="input" type="text" name="Distrito" size="50" /></p>
													<p class="linea"><span class="dato">Dirección:</span><input class="input" type="text" name="Direccion" size="50"/></p>
													<p class="linea"><span class="dato">Número o Piso:</span><input class="input" type="text" name="Piso" size="50" /></p>
													<p class="linea"><span class="dato">Teléfono fijo:</span><input class="input" type="text" name="Telefono" maxlength="7" size="50" /></p>
													<p class="linea"><span class="dato">Celular:</span><input class="input" type="text" name="Celular" maxlength="9" size="50" /></p>
													<p class="linea"><span class="dato">E-mail:</span><input class="input" type="text" name="Email" 
														placeholder="Por ejemplo, unfv@gmail.com"/></a></p>
													Fundamento de la solicitud: <br><br><textarea name="Fundamento" rows="5"
														cols="64" placeholder="Escribir aqui.."></textarea><br><br>
													Documentos que se adjuntan: <br><br><textarea name="Adjuntar" rows="5"
														cols="64"  placeholder="Escribir aqui.."></textarea><br><br>
													Subir archivos: (formato pdf)<br><br><input type="file" name="archivo"/><br><br>
												</fieldset>
												<br>   
											 </td>
										 </tr>
									 </table>
                                </td>
                            </tr>
                        </table>
                       <br>
                    <center><input type="submit" value="Comprobar Trámite" class="boton"/>          
                            <input type="reset" value="Borrar todo"  class="boton"/></center>
                        <br>
                    </form>
                </td>
                <td >
                    <table>
                        <tr>
                            <td align="center">
                                <iframe align="right" width="380" height="430" src="Imagenes/FUT.pdf" loop="true" style="padding-bottom: 10px;"  frameborder="none"></iframe>
								<iframe align="right" width="380" height="430" src="Imagenes/Guia.pdf" loop="true" style="padding-bottom: 10px;"  frameborder="none"></iframe>			
								<iframe align="right" width="380" height="430" src="Imagenes/Instructivo.pdf" loop="true" style="padding-bottom: 10px;" frameborder="none"></iframe>
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