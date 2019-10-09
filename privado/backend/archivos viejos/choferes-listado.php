<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
    <title>Listado Automotores - Secretaría General</title>
		
	</head>
	<body>

		<?php require_once 'dbconexion.php'; ?>
		<?php 
		$query = "SELECT * from chofer ORDER BY idchofer ASC";
		$result = mysqli_query($link, $query);?>
    
		<div class="container">
      <div class="table-responsive-sm">
  				<table class="table table-bordered table-striped">
   					<thead>
    					<tr>
                <br>
        				<th scope="col">Orden</th>
        				<th scope="col">Apellido</th>
        				<th scope="col">Nombre</th>
        				<th scope="col">DNI</th>
        				<th scope="col">Teléfono</th>
        				<th scope="col">Dirección</th>
        				<th scope="col">Grupo Sanguíneo</th>
        				<th scope="col">Seguro</th>
        				<th scope="col">Apto</th>
                <th scope="col">Estado</th>
                <th scope="col">Comentarios</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
      				</tr>
    				</thead>
    				<tbody>
    					<?php
						while ($reg = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						?>
      					<tr scope="col">
        				<td><?php echo $reg['idchofer']; ?></td>
        				<td><?php echo $reg['apellido']; ?></td>
        				<td><?php echo $reg['nombre']; ?></td>
        				<td><?php echo $reg['dnichofer']; ?></td>
        				<td><?php echo $reg['telefono']; ?></td>
        				<td><?php echo $reg['direccion']; ?></td>
        				<td><?php echo $reg['gruposanguineo']; ?></td>
        				<td><?php echo $reg['seguro']; ?></td>
        				<td><?php echo $reg['apto']; ?></td>
                <td><?php echo $reg['estado']; ?></td>
                <td><?php echo $reg['comentarioschofer']; ?></td>
                <td><center><a href="choferes-modificar.php?dnichofer=<?php echo $reg["dnichofer"]; ?>"><img src="lapiz.png"></a></center></td>
                <td><center><a href="choferes-eliminar.php?dnichofer=<?php echo $reg["dnichofer"]; ?>"><img src="borrar.png"></a></center></td>
      					</tr>
					<?php } ?>
    				</tbody>
  				</table>
  			</div>
		</div>
	</body>
</html>