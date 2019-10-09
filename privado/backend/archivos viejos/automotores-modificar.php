<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Modificar viaje</title>
		
	</head>
	<body>

		<?php
		require_once 'dbconexion.php';

		$dominio = $_GET["dominio"];
		$query = "SELECT * FROM automotor WHERE dominio='$dominio'";
		$result = mysqli_query($link, $query);

		while ($reg = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
			{?>
				<form class="form-horizontal" method="post" action="automotores-m.php">
					
						<center><legend><h2>Modificar Automotor</h2></legend></center><br>
						<div class="form-group">
							<label class="col-md-4 control-label">Orden:</label>
							<div class="col-md-4">
								<input class="form-control" value="<?php echo $reg["orden"] ?>" type="text" name="orden">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Dominio:</label>
							<div class="col-md-4">
								<input class="form-control" value="<?php echo $reg["dominio"] ?>" type="text" name="dominio">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Marca:</label>
							<div class="col-md-4">
								<input class="form-control" value="<?php echo $reg["marca"] ?>" type="text" name="marca">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Modelo:</label>
							<div class="col-md-4">
								<input class="form-control" value="<?php echo $reg["modelo"] ?>" type="text" name="modelo">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Tipo:</label>
							<div class="col-md-4">
								<input class="form-control" value="<?php echo $reg["tipo"] ?>" type="text" name="tipo">
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
								<input class="form-control" value="<?php echo $reg["proximoservice"] ?>" type="text" name="proximoservice">
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
								<input class="form-control" value="<?php echo $reg["observaciones"] ?>" type="text" name="observaciones">
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
			<?php }?>
	</body>
</html>