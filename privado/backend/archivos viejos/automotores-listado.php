<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
    <title>Listado Automotores - Secretaría General</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="listados-estilo.css">

	</head>
	<body>
		<?php require_once 'dbconexion.php';?>
		<?php $query = "SELECT * from automotor ORDER BY orden ASC";
		$result = mysqli_query($link, $query);?>

		<div class="container">
			<div class="table-responsive">
  				<table class="table table-bordered table-striped">
   					<thead>
    					<tr>
                <br>
        				<th>Orden</th>
        				<th>Dominio</th>
        				<th>Marca</th>
        				<th>Modelo</th>
        				<th>Tipo</th>
        				<th>Estado de Service</th>
        				<th>Próximo Service</th>
        				<th>Sede</th>
        				<th>Observaciones</th>
                <th>Editar</th>
                <th>Eliminar</th>
      				</tr>
    				</thead>
    				<tbody>
    					<?php
						while ($reg = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						?>
      					<tr>
        				<td><?php echo $reg['orden']; ?></td>
        				<td><?php echo $reg['dominio']; ?></td>
        				<td><?php echo $reg['marca']; ?></td>
        				<td><?php echo $reg['modelo']; ?></td>
        				<td><?php echo $reg['tipo']; ?></td>
        				<td><?php echo $reg['estadoservice']; ?></td>
        				<td><?php echo $reg['proximoservice']; ?></td>
        				<td><?php echo $reg['sede']; ?></td>
        				<td><?php echo $reg['observaciones']; ?></td>
                <td><center><a href="automotores-modificar.php?dominio=<?php echo $reg["dominio"]; ?>"><img src="lapiz.png"></a></center></td>
                <td><center><a href="automotores-eliminar.php?dominio=<?php echo $reg["dominio"]; ?>"><img src="borrar.png"></a></center></td>
      					</tr>
					<?php } ?>
    				</tbody>
  				</table>
  			</div>
		</div>
	</body>
</html>