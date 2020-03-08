<?php
include "../backend/solicitudes/validacionessolicitudes.php"
?>
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
		<link rel="stylesheet" type="text/css" href="../../publico/css/solicitudViaje.css">
		<link rel="stylesheet" type="text/css" href="../../publico/css/validacion.css">
		<link rel="stylesheet" type="text/css" href="../../publico/css/styleNavBar.css">
		<link rel="stylesheet" type="text/css" href="../../publico/css/footer.css">
		<script src="../../publico/js/validacion.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	</head>

	<body>

		<?php 
			require_once "../../templates/navbarPublico.php";
		?>

		<div>
			<?php require "../backend/dbconexion.php"; ?>
			<span class = "text-danger"> <?php echo $motivoviaje_error ?></span>
			<span class = "text-danger"> <?php echo $sedeorigen_error ?></span>
			<span class = "text-danger"> <?php echo $destinoprovincia_error ?></span>
			<span class = "text-danger"> <?php echo $destinolocalidad_error ?></span>
			<span class = "text-danger"> <?php echo $fechasalida_error ?></span>
			<span class = "text-danger"> <?php echo $fecharegreso_error ?></span>
			<span class = "text-danger"> <?php echo $representanteviaje_error ?></span>
			<span class = "text-danger"> <?php echo $carrera_error ?></span>
			<span class = "text-danger"> <?php echo $cantidadpasajero_error ?></span>
			<h2 id="titulo">Solicitud del Viaje</h2>

				<form method="POST" role="form" class="formularios">

					<input  id="motivoViaje" class="item-input input is-info"  name="motivoviaje" placeholder="Motivo del Viaje" type="text" onblur="revisar(this),revisaLongitudMax(this,255),revisaEspacio(this)" onkeyup="revisar(this),revisaLongitudMax(this,255),revisaEspacio(this)" title="Campo Obligatorio">

						<div id="sedeViaje" class="select">
							<select id="tamagnioSede" class="is-hovered" name="sedeorigen" title="Seleccione Sede de la Solicitud" onblur="revisarSelect(this)" onkeyup="revisarSelect(this)">
									<option value="0">Sede Origen</option>
									<option value="Aimogasta">Sede Aimogasta</option>
									<option value="Capital">Sede Capital</option>
									<option value="Catuna">Sede Catuna</option>
									<option value="Chamical">Sede Chamical</option>
									<option value="Chepes">Sede Chepes</option>
									<option value="Villa Union">Sede Villa Unión</option>
							</select>
						</div>

						<div id="destinoViaje" class="select">
							<select id="tamagnioProvincia" class="is-hovered" name="destinoprovincia" title="Seleccione la Provincia de destino" onblur="revisarSelect(this)" onkeyup="revisarSelect(this)" require>
									<option value="0" disabled selected hidden>Provincia de Destino</option>
									<option value="1">Buenos Aires</option>
									<option value="3">Catamarca</option>
									<option value="4">Chaco</option>
									<option value="5"> Chubut</option>
									<option value="2">Ciudad Autónoma de Buenos Aires</option>
									<option value="6">Córdoba</option>
									<option value="7">Corrientes</option>
									<option value="8">Entre Ríos</option>
									<option value="9">Formosa</option>
									<option value="10">Jujuy</option>
									<option value="11">La Pampa</option>
									<option value="12">La Rioja</option>
									<option value="13">Mendoza</option>
									<option value="14">Misiones</option>
									<option value="15">Neuquén</option>
									<option value="16">Río Negro</option>
									<option value="17">Salta</option>
									<option value="18">San Juan</option>
									<option value="19">San Luis</option>
									<option value="20">Santa Cruz</option>
									<option value="21">Santa Fe</option>
									<option value="22">Santiago del Estero</option>
									<option value="23">Tierra del Fuego</option>
									<option value="24">Tucumán</option>
							</select>
						</div>

						<div id="destinoViaje" class="select">
							<select id="tamagnioLocalidad" class="is-hovered" name="destinolocalidad" title="Seleccione la Localidad de destino" onblur="revisarSelect(this)" onkeyup="revisarSelect(this)" require>
							<option value="0" disabled selected hidden>Localidad de Destino</option>
							</select>
						</div>

					

					<p id="textosFechas">Fecha de Salida:</p>
					<input id="fechaViaje" class="item-input input is-info"  name="fechasalida" type="date" onblur="revisar(this)" onkeyup="revisar(this)"title="Campo Obligatorio">

					<p id="textosFechas">Fecha de Regreso:</p>
					<input id="fechaViaje" class="item-input input is-info"  name="fecharegreso" type="date" onblur="revisar(this)" onkeyup="revisar(this)" title="Campo Obligatorio">
					
					<div id="responsableViaje">
                    	<input class="item-input input is-info" name="representanteviaje" placeholder="Representante del Viaje" type="text" onblur="revisar(this),revisaLongitudMax(this,100),revisaEspacio(this),revisaLetras(this)" onkeyup="revisar(this),revisaLongitudMax(this,100),revisaEspacio(this),revisaLetras(this)" title="Campo Obligatorio">
					</div>

                    <input id="carreraViaje" class="item-input input is-info"  name="carrera" placeholder="Carrera/Carreras" type="text" maxlength="70" onblur="revisar(this),revisaLongitudMax(this,255),revisaEspacio(this),revisaLetras(this)" onkeyup="revisar(this),revisaLongitudMax(this,255),revisaEspacio(this),revisaLetras(this)" title="Campo Obligatorio">

                    <p id="textoCantidad">Cantidad de Pasajeros:</p>
                    <input id="cantidadPasajerosViaje" class="item-input input is-info"  name="cantidadpasajero"  type="text" maxlength="3" onblur="revisar(this),revisaNumero(this),revisaEspacio(this)" onkeyup="revisar(this),revisaNumero(this),revisaEspacio(this)" title="Campo Obligatorio" >

					<textarea id="observacionViaje"  class="item-input textarea is-info" name="observaciones" placeholder="Observaciones" maxlength="255"></textarea>
					<div id="botton2">
						<button id="agregar2" class="button is-info is-rounded center-button" name="submit">Enviar</button>
					</div>

				</form>	

		</div>

		     <?php require_once "../../templates/footer.php" ?>
		
	</body>
</html>

