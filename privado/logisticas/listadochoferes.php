<?php
	while ($reg = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>
    <tr scope="col">
        <td><?php echo $reg['dni']; ?></td>
        <td><?php echo $reg['apellido']; ?></td>
    	<td><?php echo $reg['nombre']; ?></td>
    	<td><?php echo $reg['direccion']; ?></td>
    	<td><?php echo $reg['telefono']; ?></td>
    	<td><?php echo $reg['gruposanguineo']; ?></td>
    	<td><?php echo $reg['polizaseguro']; ?></td>
    	<td><?php echo $reg['licencia']; ?></td>
        <td><?php echo $reg['vencimientocarnet']; ?></td>
        <td><?php echo $reg['observaciones']; ?></td>
    </tr>
<?php } ?>