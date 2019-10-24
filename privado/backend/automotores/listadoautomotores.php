<?php
	while ($reg = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>
    <tr scope="col">
        <td><?php echo $reg['idautomotor']; ?></td>
        <td><?php echo $reg['patente']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
    	<td><?php echo $reg['modelo']; ?></td>
    	<td><?php echo $reg['tipo']; ?></td>
    	<td><?php echo $reg['proximoservice']; ?></td>
    	<td><?php echo $reg['sede']; ?></td>
        <td><?php echo $reg['observaciones']; ?></td>
        <td><!--<a href="../frontend/editarAutomotor.php?idautomotor=<?php //echo $reg["idautomotor"]; ?>" id="opacidad">--><i id="opacidad" class="far fa-edit"></i></a></td>
		<td><!--<a href="../backend/automotores/eliminaautomotor.php?idautomotor=<?php //echo $reg["idautomotor"]; ?>" id="opacidad">--><i class="far fa-trash-alt"></i></a></td>
    </tr>
<?php } ?>