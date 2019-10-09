<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Modificar viaje</title>
		
	</head>
	<body>

		<?php
		require_once 'dbconexion.php';

		$dnichofer = $_GET["dnichofer"];
		$query = "SELECT * FROM chofer WHERE dnichofer='$dnichofer'";
		$result = mysqli_query($link, $query);

		while ($reg = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
			{?>
				<form class="form-horizontal" method="post" action="choferes-m.php">
					
						<center><legend><h2>Modificar Chofer</h2></legend></center><br>
						<div class="form-group">
							<label class="col-md-4 control-label">Orden:</label>
							<div class="col-md-4">
								<input class="form-control" value="<?php echo $reg["idchofer"] ?>" type="text" name="idchofer">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Apellido:</label>
							<div class="col-md-4">
								<input class="form-control" value="<?php echo $reg["apellido"] ?>" type="text" name="apellido">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Nombre:</label>
							<div class="col-md-4">
								<input class="form-control" value="<?php echo $reg["nombre"] ?>" type="text" name="nombre">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">DNI:</label>
							<div class="col-md-4">
								<input class="form-control" value="<?php echo $reg["dnichofer"] ?>" type="text" name="dnichofer">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Teléfono:</label>
							<div class="col-md-4">
								<input class="form-control" value="<?php echo $reg["telefono"] ?>" type="text" name="telefono">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Dirección:</label>
							<div class="col-md-4">
								<input class="form-control" value="<?php echo $reg["direccion"] ?>" type="text" name="direccion">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Grupo Sanguíneo:</label>
							<div class="col-md-4">
								<input class="form-control" value="<?php echo $reg["gruposanguineo"] ?>" type="text" name="gruposanguineo">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Seguro:</label>
							<div class="col-md-4">
								<input class="form-control" value="<?php echo $reg["seguro"] ?>" type="text" name="seguro">
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
								<input class="form-control" value="<?php echo $reg["comentarioschofer"] ?>" type="text" name="comentarioschofer">
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
			<?php }?>
	</body>
</html>