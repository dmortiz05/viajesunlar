<?php
	while ($reg = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>
    <tr scope="col">
        <td><?php echo $reg['patente']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
    	<td><?php echo $reg['modelo']; ?></td>
    	<td><?php echo $reg['tipo']; ?></td>
    	<td><?php echo $reg['proximoservice']; ?></td>
    	<td><?php echo $reg['sede']; ?></td>
        <td><?php echo $reg['observaciones']; ?></td>
        <td><a href="../frontend/editarChofer.php?dni=<?php echo $reg["dni"]; ?>" id="opacidad"><i id="opacidad" class="far fa-edit"></i></a></td>
		<td><a href="../backend/choferes/eliminachofer.php?dni=<?php echo $reg["dni"]; ?>" id="opacidad"><i class="far fa-trash-alt"></i></a></td>
    </tr>
<?php } ?>