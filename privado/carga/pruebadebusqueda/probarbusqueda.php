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

		<link rel="stylesheet" type="text/css" href="../../../publico/css/bulma.min.css">
		<link rel="stylesheet" type="text/css" href="../../../publico/css/indexcarga.css">
		<link rel="stylesheet" type="text/css" href="../../../publico/css/solicitudViaje.css">
		<link rel="stylesheet" type="text/css" href="../../../publico/css/styleNavBar.css">
		<link rel="stylesheet" type="text/css" href="../../../publico/css/footer.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>

		<link rel="stylesheet" type="text/css" href="style.css" />
    	<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="jquery.autocomplete.js"></script>
		
		<script> 
        	jQuery(function(){ 
        		$("#busquedaEncargado").autocomplete("buscar.php");
        	});
    	</script>


	</head>

	<body>

		<?php 
			require_once "../../../templates/navbarPublico.php"; 
			require "../../backend/dbconexion.php";
		?>


		<div>
			<h2 id="titulo">Datos del Encargado</h2>
			<div class ="formularios">

				<form role="form" method="POST">
		
					<p id="textoBuscarDNI">Buscar por DNI:</p>
					<div class="control has-icons-left has-icons-right">
						<input id="busquedaEncargado" class="item-input input is-info" type="text" name="q" placeholder="DNI" name="buscar">
						<span class="icon is-left">
							<i class="fas fa-search"></i>
						</span>
						<button id="botonBuscar" class="button is-rounded estilo"><i class="fas fa-search"></i></button>
						
					</div>
				</form>

				<form name="datosDelEncargado">

				<p id="textoBuscarDNI">Datos:</p>
				
					<input id="nombreEncargado" class="item-input input is-info" name="nombreEncargado" type="text" placeholder="Nombre" maxlength="30" required title="Campo Obligatorio" required>
			
					<input id="apellidoEncargado" class="item-input input is-info" name="apellidoEncargado" type="text" placeholder="Apellidos" maxlength="30" title="Campo Obligatorio" required>

					<input id="dniEncargado" class="item-input input is-info" name="dniencargado" type="text" placeholder="DNI" maxlength="30" required pattern="[0-9]{8}" minlength="1" maxlength="8">
					
					<input id="telefonoEncargado" class="item-input input is-info" type="tel" name="telefonoEncargado" placeholder="Teléfono" maxlength="30" title="Campo Obligatorio" attern="[0-9]{10}" minlength="1" maxlength="10" required>

					<input id="direccionEncargado" class="item-input input is-info" type="text" name="direccionEncargado" placeholder="Dirección" maxlength="100"title="Campo Obligatorio" required>

					<input id="emailEncargado" class="item-input input is-info" type="email" name="emailEncargado" placeholder="Email" maxlength="30" title="Campo Obligatorio" required>

					<div id="grupoSanguineoEncargado" class="item-input select is-info" maxlength="3" title="Campo Obligatorio" required>
						<select  id="tamagnioGrupoSanguineo"class="is-hovered" name="grupoSanguineoEncargado" id="grup">
								<option>Grupo Sanguíneo</option>
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

					<input id="polizaEncargado" class="item-input input is-info" type="text" name="polizaEncargado" placeholder="Número de Póliza" maxlength="10" title="Campo Obligatorio" required>

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
							<th id="tamanioDniPoliza">Póliza</th>
							<th id="tamanioIconos"></th>
							<th id="tamanioIconos"></th>
						</tr>
					</thead>

					<?php
						$query = "SELECT * from encargadodeviaje WHERE idviaje ORDER BY idencargadodeviaje ASC";
						$result = mysqli_query($link, $query);
					?>

					<tbody>
						<?php 
							while ($reg = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						?>
						<tr>
							<td><?php echo $reg['nombre'];?></td>
							<td><?php echo $reg['apellido'];?></td>
							<td><?php echo $reg['dni'];?></td>
							<td><?php echo $reg['polizaseguro'];?></td>
							<td><a id="opacidad"><i id="opacidad" class="far fa-edit"></i></a></td>
							<td><a id="opacidad"><i class="far fa-trash-alt"></i></a></td>
						</tr>

						<?php }?>
					</tbody>
				</table>
			</div>
		</div>

		
		    <div id="botton2"> <a id="agregar2" class="button is-rounded">Guardar datos del viaje</a> </div>

		     <?php require_once "../../../templates/footer.php" ?>
		
	</body>
</html>

