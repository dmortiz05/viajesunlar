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
		<link rel="stylesheet" type="text/css" href="../../publico/css/validacion.css">
		<link rel="stylesheet" type="text/css" href="../../publico/css/solicitudViaje.css">
		<link rel="stylesheet" type="text/css" href="../../publico/css/styleNavBar.css">
		<link rel="stylesheet" type="text/css" href="../../publico/css/footer.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		<script src="../../publico/js/validacion.js"></script>
	<script>
		$(document).ready(function() {
			$('#editarOtros').on('click', function() {
				$('#popup6').fadeIn('slow');
				$('.popup-overlay6').fadeIn('slow');
				$('.popup-overlay6').height($(window).height());
				return false;
			});

			$('#close6').on('click', function() {
				$('#popup6').fadeOut('slow');
				$('.popup-overlay6').fadeOut('slow');
				return false;
			});
		});

		$(document).ready(function() {
			$('#editarAlumnos').on('click', function() {
				$('#popup4').fadeIn('slow');
				$('.popup-overlay4').fadeIn('slow');
				$('.popup-overlay4').height($(window).height());
				return false;
			});

			$('#close4').on('click', function() {
				$('#popup4').fadeOut('slow');
				$('.popup-overlay4').fadeOut('slow');
				return false;
			});
		});

		$(document).ready(function() {
			$('#editarDocentes').on('click', function() {
				$('#popup5').fadeIn('slow');
				$('.popup-overlay5').fadeIn('slow');
				$('.popup-overlay5').height($(window).height());
				return false;
			});

			$('#close5').on('click', function() {
				$('#popup5').fadeOut('slow');
				$('.popup-overlay5').fadeOut('slow');
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

					<input  id="motivoViaje" class="item-input input is-info"  name="motivoViaje" placeholder="Motivo del Viaje" type="text" readonly="readonly" title="Campo Obligatorio">

						
					<input id="sedeViaje" class="item-input input is-info is-hovered" name="sedeUni" placeholder="Sede Universitaria" readonly="readonly" title="Campo Obligatorio">
				

					<input id="destinoViaje" class="item-input input is-info"  name="destProvincia"  readonly="readonly" placeholder="Provincia de destino" type="text" title="Campo Obligatorio">

					<input id="destinoViaje" class="item-input input is-info"  name="destLocalidad" readonly="readonly" placeholder="Localidad de destino" type="text" title="Campo Obligatorio">

					<p id="textosFechas">Fecha de Salida:</p>
					<input id="fechaViaje" class="item-input input is-info"  name="fechaSalida" type="text" readonly="readonly" title="Campo Obligatorio" required>

					<p id="textosFechas">Fecha de Regreso:</p>
					<input id="fechaViaje" class="item-input input is-info"  name="fechaRegreso" type="text"  readonly="readonly" title="Campo Obligatorio" required>

                    <input id="responsableViaje" class="item-input input is-info"  name="reprViaje" readonly="readonly" placeholder="Representante del Viaje" type="text" maxlength="70" title="Campo Obligatorio" required>

                    <input id="carreraViaje" class="item-input input is-info"  name="carrViaje" readonly="readonly" placeholder="Carrera/Carreras" type="text" maxlength="70" title="Campo Obligatorio" required>

                    <p id="textoCantidad">Cantidad de Pasajeros:</p>
                    <input id="cantidadPasajerosViaje" class="item-input input is-info"  readonly="readonly"  name="cantiPasaViaje"  type="number" maxlength="3" title="Campo Obligatorio" required>

					<textarea id="observacionViaje"  class="item-input textarea is-info" readonly="readonly" name="observionesViaje" placeholder="Observaciones"></textarea>

				</form>		
		</div>

		<div>
			<h2 id="titulo"> Datos del Encargado</h2>
			<div class ="formularios">
		
					<p id="textoBuscarDNI">Buscar por DNI:</p>
					<div class="control has-icons-left has-icons-right">
						<input id="busquedaEncargado" class="item-input input is-info" type="text" placeholder="Buscar por DNI" onblur="revisaLongitudMax(this,8),revisaNumero(this),revisaEspacio(this)" onkeyup="revisaLongitudMax(this,8),revisaNumero(this),revisaEspacio(this)">
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
							<td>Laila Maria Esmeralda Fulanita</td>
							<td>Benejam Mercado</td>
							<td>3822126</td>
							<td>lkjo23456</td>
							<td><a id="opacidad"><i id="opacidad" class="far fa-edit"></i></a></td>
							<td><a id="opacidad"><i class="far fa-trash-alt"></i></a></td>
						</tr>

						<tr>
							<td>jfahfhsakdfhdjkah fhdajfhjdhajklfhdahfjsajhf jkdshfhdsklflashlahlkah</td>
							<td>fjdshajfhjldshafl hsldjhfjsdhfhsdjfdhjhfjk dshfshdhfuewrewi urewyrwu</td>
							<td>38221926</td>
							<td>jfkdsahfdsahfdsjahsahhakfhlsdas</td>
							<td><a id="opacidad"><i id="opacidad" class="far fa-edit"></i></a></td>
							<td><a id="opacidad"><i class="far fa-trash-alt"></i></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

			<div>
				<h2 id="titulo">Datos Pasajero</h2>
				<div id="botonesAgregarPasajeros">
					<script src="../../publico/jQuery/ventanasPop.js"></script>
					<button id="open" class="button is-rounded estilo">Agregar Alumno o Graduado</button>
					<button id="editarAlumnos" class="button is-rounded estilo">Editar Alumno o Graduado</button>
					<button id="open2" class="button is-rounded estilo">Agregar Docente o No Docente </button>
					<button id="editarDocentes" class="button is-rounded estilo">Editar Docente o No Docente </button>
					<button id="open3" class="button is-rounded estilo">Agregar Otros </button>
					<button id="editarOtros" class="button is-rounded estilo">Editar Otros </button>
	</div>
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

				<div id="popup4" style="display: none;">
					<div class="content-popup">
						<div class="close4"><a href="#" id="close4"><i class="far fa-times-circle"></i></a></div>
						<div>
						<div id="popupBody">
						<h2 id="subtitulo"> Editar Alumno o Graduado</h2>

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
									<button id="guardarPasajeroAlumno"class="button is-rounded estilo center-button">Guardar</button>
								</div>
							</div>
					</div>

						</div>
					</div>
				</div>
				<div class="popup-overlay4"></div>

				<div id="popup5" style="display: none;">
					<div class="content-popup">
						<div class="close5"><a href="#" id="close5"><i class="far fa-times-circle"></i></a></div>
						<div>
						<div id="popupBody">
						<h2 id="subtitulo"> Editar Docente o No Docente</h2>

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
									<button id="agregarPasajeroDocente"class="button is-rounded estilo center-button">Guardar</button>
								</div>
							</div>
					</div>


						</div>
					</div>
				</div>
				<div class="popup-overlay5"></div>

				<div id="popup6" style="display: none;">
					<div class="content-popup">
						<div class="close6"><a href="#" id="close6"><i class="far fa-times-circle"></i></a></div>
						<div>
						<div id="popupBody">
						<h2 id="subtitulo"> Editar Otros</h2>

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
									<button id="guardarPasajeroOtro"class="button is-rounded estilo center-button">Guardar</button>
									
								</div>
							</div>
					</div>


						</div>
					</div>
				</div>
				<div class="popup-overlay6"></div>

			</div>

		</div>

		<div>
			<h2 id="subtitulo"> Pasajeros Cargados </h2>
			<div class="table-container">
				<table id="tamanioTablaPasajeros" class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
					<thead>
						<tr>
							<th id="tamanioNombreApellidoPasajero">Nombre</th>
							<th id="tamanioNombreApellidoPasajero">Apellido</th>
							<th id="tamanioTipoPasajero">Tipo</th>
							<th id="tamanioDniPolizaPasajero">DNI</th>
							<th id="tamanioDniPolizaPasajero">Poliza</th>
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
							<td></td>
							<td><a id="opacidad"><i id="opacidad" class="far fa-edit"></i></a></td>
							<td><a id="opacidad"><i class="far fa-trash-alt"></i></a></td>
						</tr>

						<tr>
							<td></td>
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


		    <div id="botton2"> <a id="agregar2" class="button is-rounded">Guardar datos del Viaje</a> </div>

		     <?php require_once "../../templates/footer.php" ?>
		
	</body>
</html>

