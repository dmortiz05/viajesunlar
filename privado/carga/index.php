<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <meta http-equiv="Expires" content="0">
	    <meta http-equiv="Last-Modified" content="0">
	    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	    <meta http-equiv="Pragma" content="no-cache">

		<link rel="stylesheet" type="text/css" href="../../publico/css/bulma.min.css">
		<link rel="stylesheet" type="text/css" href="../../publico/css/indexcarga.css">
		<link rel="stylesheet" type="text/css" href="../../publico/css/styleNavBar.css">
		<link rel="stylesheet" type="text/css" href="../../publico/css/footer.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		<script>
			$(document).ready(function(){
				$('#open').on('click', function(){
					$('#popup').fadeIn('slow');
					$('.popup-overlay').fadeIn('slow');
					$('.popup-overlay').height($(window).height());
					return false;
				});
			
				$('#close').on('click', function(){
					$('#popup').fadeOut('slow');
					$('.popup-overlay').fadeOut('slow');
					return false;
				});
			});
		</script>
		<script>
			$(document).ready(function(){
				$('#open2').on('click', function(){
					$('#popup2').fadeIn('slow');
					$('.popup-overlay2').fadeIn('slow');
					$('.popup-overlay2').height($(window).height());
					return false;
				});
			
				$('#close2').on('click', function(){
					$('#popup2').fadeOut('slow');
					$('.popup-overlay2').fadeOut('slow');
					return false;
				});
			});
		</script>
		<script>
			$(document).ready(function(){
				$('#open3').on('click', function(){
					$('#popup3').fadeIn('slow');
					$('.popup-overlay3').fadeIn('slow');
					$('.popup-overlay3').height($(window).height());
					return false;
				});
			
				$('#close3').on('click', function(){
					$('#popup3').fadeOut('slow');
					$('.popup-overlay3').fadeOut('slow');
					return false;
				});
			});
		</script>
	</head>

	<body>

		<?php require_once "../../templates/navbarPublico.php" ?>

		<div>
			<h2 id="titulo">Datos del Viaje</h2>

				<form class="formularios">

					<input  id="motivoViaje" class="item-input input is-info"  name="motivoViaje" placeholder="Motivo del Viaje" type="text" maxlength="" title="Campo Obligatorio" required>

						<div id="sedeViaje" class="select is-info">
							<select id="tamagnioSede" class="is-hovered" name="sedeUni" placeholder="Sede Universitaria" title="Campo Obligatorio" required>
									<option value="Aimogasta">Sede Aimogasta</option>
									<option value="Capital">Sede Capital</option>
									<option value="Catuna">Sede Catuna</option>
									<option value="Chamical">Sede Chamical</option>
									<option value="Chepes">Sede Chepes</option>
									<option value="Villa Union">Sede Villa Unión</option>
							</select>
						</div>

					<input id="destinoViaje" class="item-input input is-info"  name="destProvincia" placeholder="Provincia de destino" type="text" maxlength="70" title="Campo Obligatorio" required>

					<input id="destinoViaje" class="item-input input is-info"  name="destLocalidad" placeholder="Localidad de destino" type="text" maxlength="70" title="Campo Obligatorio" required>

					<p id="textosFechas">Fecha de Salida:</p>
					<input id="fechaViaje" class="item-input input is-info"  name="fechaSalida" type="date" title="Campo Obligatorio" required>

					<p id="textosFechas">Fecha de Regreso:</p>
					<input id="fechaViaje" class="item-input input is-info"  name="fechaRegreso" type="date" title="Campo Obligatorio" required>

					<textarea id="observacionViaje"  class="item-input textarea is-info" name="observionesViaje" placeholder="Observaciones"></textarea>

				</form>		
		</div>

		<div>
			<h2 id="titulo"> Datos del Encargado</h2>
			<div class ="formularios">
		
					<p id="textoBuscarDNI">Buscar por DNI:</p>
					<div class="control has-icons-left has-icons-right">
						<input id="busquedaEncargado" class="item-input input is-info" type="text" placeholder="Buscar por DNI" >
						<span class="icon is-left">
							<i class="fas fa-search"></i>
						</span>
					</div>
			

			
				<form name="datosDelEncargado">
				
				<p id="textoBuscarDNI">Datos:</p>
				
					<input id="nombreEncargado" class="item-input input is-info" name="nombreEncargado" type="text" placeholder="Nombre" maxlength="30" required title="Campo Obligatorio" required>
			
					<input id="apellidoEncargado" class="item-input input is-info" name="apellidoEncargado" type="text" placeholder="Apellido" maxlength="30" title="Campo Obligatorio" required>

					<input id="dniEncargado" class="item-input input is-info" name="dniencargado" type="text" placeholder="DNI" maxlength="30" required pattern="[0-9]{8}" minlength="1" maxlength="8">
					
					<input id="telefonoEncargado" class="item-input input is-info" type="tel" name="telefonoEncargado" placeholder="Teléfono" maxlength="30" title="Campo Obligatorio" attern="[0-9]{10}" minlength="1" maxlength="10" required>

					<input id="direccionEncargado" class="item-input input is-info" type="text" name="direccionEncargado" placeholder="Dirección" maxlength="100"title="Campo Obligatorio" required>

					<input id="emailEncargado" class="item-input input is-info" type="email" name="emailEncargado" placeholder="Email" maxlength="30" title="Campo Obligatorio" required>

					<div id="grupoSanguineoEncargado" class="item-input select is-info" maxlength="3" title="Campo Obligatorio" required>
						<select  id="tamagnioGrupoSanguineo"class="is-hovered" name="grupoSanguineoEncargado" id="grup">
								<option>Grupo Sanguineo</option>
								<option value="0-">0-</option>
								<option value="0+">0+</option>
								<option value="A-">A-</option>
								<option value="A+">A+</option>
								<option value="B-">B-</option>
								<option value="B+">B+</option>
								<option value="AB-">AB-</option>
								<option value="AB+">AB+</option>
						</select>
					</div>

					<input id="polizaEncargado" class="item-input input is-info" type="text" name="polizaEncargado" placeholder="Número de Poliza" maxlength="10" title="Campo Obligatorio" required>

					<input id="observacionEncargado" class="item-input input is-info" type="text" name="observionesEncargado" placeholder="Observaciones">
				</form>

					<div id="botton">
						<button id="agregarEncargado" class="button is-rounded estilo"><i class="fas fa-user-plus"></i></button>
					</div>
			</div>
		</div>

		<div>
			<h2 id="subtitulo"> Encargados Cargados </h2>
			<div class="table-container">
				<table id="tamanioTabla" class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
					<thead>
						<tr>
							<th id="tamanioNombreApellido">Nombre</th>
							<th id="tamanioNombreApellido">Apellido</th>
							<th id="tamanioDniPoliza">DNI</th>
							<th id="tamanioDniPoliza">Poliza</th>
							<th id="tamanioIconos"></th>
							<th id="tamanioIconos"></th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><a id="opacidad"><i id="opacidad" class="far fa-edit"></i></a></td>
							<td><a id="opacidad"><i class="far fa-trash-alt"></i></a></td>
						</tr>

						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><a id="opacidad"><i id="opacidad" class="far fa-edit"></i></a></td>
							<td><a id="opacidad"><i class="far fa-trash-alt"></i></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

			<div>

				<h2 id="titulo">Datos Pasajero</h2>
				<div><button id="open">Agregar Alumno o Graduado</button></div>
				<div><button id="open2">Agregar Docente o No Docente </button></div>
				<div><button id="open3">Agregar Otros </button></div>

				<div id="popup" style="display: none;">
					<div class="content-popup">
						<div class="close"><a href="#" id="close"><i class="far fa-times-circle"></i></a></div>
						<div>
						<div id="popupBody">
						<h2 id="subtitulo"> Alumno o Graduado</h2>

							<div>
								<div>
									<p id="textoBuscarMatricula">Buscar por Matricula:</p>
									<input id="busquedaAlumno" class="item-input input is-info" type="text" placeholder="Código Matricula" >	
									<input id="busquedaAlumno2" class="item-input input is-info" type="text" placeholder="Número Matricula" >
								</div>

								<input id="nombrePasajeroAlumno" class="item-input input is-info" name="nombrePasajero" type="text" placeholder="Nombre" maxlength="30" title="Campo Obligatorio" required>
					
								<input id="apellidoPasajeroAlumno" class="item-input input is-info" name="apellidoPasajero" type="text" placeholder="Apellido" maxlength="30" title="Campo Obligatorio" required>

								<input id="dniPasajeroAlumno" class="item-input input is-info" name="dniPasajero" type="text" placeholder="DNI" maxlength="30" title="Campo Obligatorio" required>

								<input id="telefonoPasajeroAlumno"  class="item-input input is-info" type="tel" name="telefonoPasajero" placeholder="Teléfono" pattern="[0-9]{10}" minlength="1" maxlength="10" title="Campo Obligatorio" required>
								
								<input id="direccionPasajeroAlumno"  class="item-input input is-info" name="direccionPasajero" type="text" placeholder="Dirección" maxlength="100" pattern="[0-9]{8}" minlength="1" maxlength="8" title="Campo Obligatorio" required> 
								
								<div  id="grupoSanguineoAlumno" class="item-input select is-info" required>
									<select id="tamanioGrupoSanguineoAlumno"class="is-hovered" name="grupoSanguineoPasajero">
											<option>Grupo Sanguineo</option>
											<option value="0-">0-</option>
											<option value="0+">0+</option>
											<option value="A-">A-</option>
											<option value="A+">A+</option>
											<option value="B-">B-</option>
											<option value="B+">B+</option>
											<option value="AB-">AB-</option>
											<option value="AB+">AB+</option>
									</select>
								</div>

								<input id="polizaPasajeroAlumno" class="item-input input is-info" type="text" name="polizaPasajero" placeholder="Número de Poliza" maxlength="10" title="Campo Obligatorio" required>

								<input id="codigoMatriculaPasajeroAlumno" class="item-input input is-info" type="text" name="codMatriculaPasajero" placeholder="Código Matrícula" maxlength="10" title="Campo Obligatorio" required>

								<input id= "numeroMatriculaPasajeroAlumno" class="item-input input is-info" name="numMatriculaPasajero" type="text" placeholder="Número Matrícula" maxlength="10" title="Campo Obligatorio" required>

								<input id="observacionPasajeroAlumno" class="item-input input is-info" type="text" name="observionesPasajero" placeholder="Observaciones">
								
								<div id="botton">
									<button id="agregarPasajeroAlumno"class="button is-rounded estilo center-button">Agregar</button>
								</div>
							</div>
					</div>

						</div>
					</div>
				</div>
				<div class="popup-overlay"></div>

				<div id="popup2" style="display: none;">
					<div class="content-popup">
						<div class="close2"><a href="#" id="close2"><i class="far fa-times-circle"></i></a></div>
						<div>
						<div id="popupBody">
						<h2 id="subtitulo"> Docente o No Docente</h2>

							<div>
								<div>
									<p id="textoBuscarLegajo">Buscar por Legajo:</p>
									<input id="busquedaDocente" class="item-input input is-info" type="text" placeholder="Legajo" >
								</div>

								<input id="nombrePasajeroDocente" class="item-input input is-info" name="nombrePasajero" type="text" placeholder="Nombre" maxlength="30" title="Campo Obligatorio" required>
					
								<input id="apellidoPasajeroDocente" class="item-input input is-info" name="apellidoPasajero" type="text" placeholder="Apellido" maxlength="30" title="Campo Obligatorio" required>

								<input id="dniPasajeroDocente" class="item-input input is-info" name="dniPasajero" type="text" placeholder="DNI" maxlength="30" title="Campo Obligatorio" required>

								<input id="telefonoPasajeroDocente"  class="item-input input is-info" type="tel" name="telefonoPasajero" placeholder="Teléfono" pattern="[0-9]{10}" minlength="1" maxlength="10" title="Campo Obligatorio" required>
								
								<input id="direccionPasajeroDocente"  class="item-input input is-info" name="direccionPasajero" type="text" placeholder="Dirección" maxlength="100" pattern="[0-9]{8}" minlength="1" maxlength="8" title="Campo Obligatorio" required> 
								
								<div  id="grupoSanguineoDocente" class="item-input select is-info" required>
									<select id="tamanioGrupoSanguineoDocente"class="is-hovered" name="grupoSanguineoPasajero">
											<option>Grupo Sanguineo</option>
											<option value="0-">0-</option>
											<option value="0+">0+</option>
											<option value="A-">A-</option>
											<option value="A+">A+</option>
											<option value="B-">B-</option>
											<option value="B+">B+</option>
											<option value="AB-">AB-</option>
											<option value="AB+">AB+</option>
									</select>
								</div>

								<input id="polizaPasajeroDocente" class="item-input input is-info" type="text" name="polizaPasajero" placeholder="Número de Poliza" maxlength="10" title="Campo Obligatorio" required>

								<input id="legajoPasajeroDocente" class="item-input input is-info" type="text" name="legajoPasajero" placeholder="Legajo" maxlength="10" title="Campo Obligatorio" required>

								<input id="observacionPasajeroDocente" class="item-input input is-info" type="text" name="observionesPasajero" placeholder="Observaciones">
								
								<div id="botton">
									<button id="agregarPasajeroDocente"class="button is-rounded estilo center-button">Agregar</button>
								</div>
							</div>
					</div>


						</div>
					</div>
				</div>
				<div class="popup-overlay2"></div>

				<div id="popup3" style="display: none;">
					<div class="content-popup">
						<div class="close3"><a href="#" id="close3"><i class="far fa-times-circle"></i></a></div>
						<div>
						<div id="popupBody">
						<h2 id="subtitulo"> Otros</h2>

							<div>
								
								<input id="nombrePasajeroOtro" class="item-input input is-info" name="nombrePasajero" type="text" placeholder="Nombre" maxlength="30" title="Campo Obligatorio" required>
					
								<input id="apellidoPasajeroOtro" class="item-input input is-info" name="apellidoPasajero" type="text" placeholder="Apellido" maxlength="30" title="Campo Obligatorio" required>

								<input id="dniPasajeroOtro" class="item-input input is-info" name="dniPasajero" type="text" placeholder="DNI" maxlength="30" title="Campo Obligatorio" required>
								
								<div>
									<p id="textoOtros">Fecha de Nacimiento:</p>
									<input id="fechaNacimientoPasajeOtro"  class="item-input input is-info" name="fechaNaciminetoPasajero" placeholder="Fecha de Nacimiento"type="date" maxlength="100" pattern="[0-9]{8}" minlength="1" maxlength="8" title="Campo Obligatorio" required>
									<div  id="grupoSanguineoOtro" class="item-input select is-info" required>
									<select id="tamanioGrupoSanguineoOtro"class="is-hovered" name="grupoSanguineoPasajero">
											<option>Grupo Sanguineo</option>
											<option value="0-">0-</option>
											<option value="0+">0+</option>
											<option value="A-">A-</option>
											<option value="A+">A+</option>
											<option value="B-">B-</option>
											<option value="B+">B+</option>
											<option value="AB-">AB-</option>
											<option value="AB+">AB+</option>
									</select>
								</div>
								</div>

								<input id="telefonoPasajeroOtro"  class="item-input input is-info" type="tel" name="telefonoPasajero" placeholder="Teléfono" pattern="[0-9]{10}" minlength="1" maxlength="10" title="Campo Obligatorio" required>
								
								<input id="direccionPasajeroOtro"  class="item-input input is-info" name="direccionPasajero" type="text" placeholder="Dirección" maxlength="100" pattern="[0-9]{8}" minlength="1" maxlength="8" title="Campo Obligatorio" required>

								

								<input id="aseguradoraPasajeroOtro" class="item-input input is-info" type="text" name="aseguradoraPasajero" placeholder="Aseguradora" maxlength="10" title="Campo Obligatorio" required>

								<input id="polizaPasajeroOtro" class="item-input input is-info" type="text" name="polizaPasajero" placeholder="Número de Poliza" maxlength="10" title="Campo Obligatorio" required>

								<input id="razonViajePasajeroOtro" class="item-input input is-info" type="text" name="razonViajePasajero" placeholder="Razón de Viaje">
								
								<input id="observacionPasajeroOtro" class="item-input input is-info" type="text" name="observionesPasajero" placeholder="Observaciones">
								
								<div id="botton">
									<button id="agregarPasajeroOtro"class="button is-rounded estilo center-button">Agregar</button>
								</div>
							</div>
					</div>


						</div>
					</div>
				</div>
				<div class="popup-overlay3"></div>


			</div>

		</div>

		    <div id="botton2"> <a id="agregar2" class="button is-rounded">Enviar Solicitud del Viaje</a> </div>

		     <?php require_once "../../templates/footer.php" ?>
		
	</body>
</html>

