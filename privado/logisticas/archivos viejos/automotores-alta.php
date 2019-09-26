<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Alta de viajes</title>
		
	</head>
	<body>

		<?php require_once 'dbconexion.php';?>

		<form class="form-horizontal" method="post" action="automotores-p.php">
			
				<center><legend><h2>Cargar Automotor</h2></legend></center><br>
				<div class="form-group">
					<label class="col-md-4 control-label">Orden:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="orden" placeholder="Orden">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Dominio:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="dominio" placeholder="Dominio">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Marca:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="marca" placeholder="Marca">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Modelo:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="modelo" placeholder="Modelo">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Tipo:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="tipo" placeholder="Tipo">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="radioestado">Estado Service:</label>
					<div class="col-md-4">
						<label class="radio-inline" for="radios-0">
							<input type="radio" name="radioestado" id="radios-0" value="Sí">Sí
						</label>
						<label class="radio-inline" for="radios-1">
							<input type="radio" name="radioestado" id="radios-1" value="No">No
						</label>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Próximo Service:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="proximoservice" placeholder="aaaa-mm-dd">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label" for="selectsede">Sede:</label>
					<div class="col-md-4">
						<select id="selectsede" name="selectsede" class="form-control">
							<option value="Capital">Capital</option>
						  	<option value="Aimogasta">Aimogasta</option>
						  	<option value="Catuna">Catuna</option>
						  	<option value="Chepes">Chepes</option>
						  	<option value="Villa Unión">Villa Unión</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Observaciones:</label>
					<div class="col-md-4">
						<input class="form-control" type="text" name="observaciones" placeholder="Observaciones">
					</div>
				</div>

				<!-- Botones -->
				<div class="form-group">
					<label class="col-md-4 control-label"></label>
					<div class="col-md-4">
						<input class="btn btn-primary" value="Guardar" type="submit">
						<span></span>
						<a href="automotores-listado.php" class="btn btn-default" role="button">Cancelar</a>
					</div>
				</div>
			
		</form>
	</body>
</html>
