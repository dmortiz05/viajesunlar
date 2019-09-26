<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Alta de viajes</title>
		
	</head>
	<body>

		<?php require_once 'dbconexion.php';?>
		<form class="form-horizontal" method="post" action="choferes-p.php">
			
				<center><legend><h2>Cargar Chofer</h2></legend></center><br>

				<div class="form-group">
					<label class="col-md-4 control-label">Orden:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="idchofer" placeholder="Orden">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Apellido:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="apellido" placeholder="Apellido">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Nombre:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="nombre" placeholder="Nombre">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">DNI:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="dnichofer" placeholder="DNI">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Teléfono:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="telefono" placeholder="Teléfono">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Dirección:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="direccion" placeholder="Dirección">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Grupo Sanguíneo:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="gruposanguineo" placeholder="Grupo Sanguíneo">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Seguro:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="seguro" placeholder="Seguro">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="radioapto">Apto:</label>
					<div class="col-md-4">
						<label class="radio-inline" for="radios-0">
							<input type="radio" name="radioapto" id="radios-0" value="Sí">Sí
						</label>
						<label class="radio-inline" for="radios-1">
							<input type="radio" name="radioapto" id="radios-1" value="No">No
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="selectestado">Estado:</label>
					<div class="col-md-4">
						<select id="selectestado" name="selectestado" class="form-control">
							<option value="Habilitado">Habilitado</option>
							<option value="Descanso">Descanso</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Comentarios:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="comentarioschofer" placeholder="Comentarios">
					</div>
				</div>

				<!-- Botones -->
				<div class="form-group">
					<label class="col-md-4 control-label"></label>
					<div class="col-md-4">
						<input class="btn btn-primary" value="Guardar" type="submit">
						<span></span>
						<a href="choferes-listado.php" class="btn btn-default" role="button">Cancelar</a>
					</div>
				</div>
			
		</form>
	</body>
</html>
