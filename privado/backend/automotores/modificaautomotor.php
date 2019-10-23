<?php
	$link = mysqli_connect("localhost","php_parque","AutoParque.1920","php_parque");
	$patente=$_POST["patente"];
	$marca=$_POST["marca"];
	$modelo=$_POST["modelo"];
	$tipo=$_POST["tipo"];
	$proximoservice=$_POST["proximoservice"];
	$sede=$_POST["sede"];
	$observaciones=$_POST["observaciones"];

    header("Location: ../../frontend/ingresarAutomotores.php");
    
    $query = "UPDATE `automotor` SET  `patente` = '$patente', `marca` = '$marca', `modelo` = '$modelo', 
    `tipo` = '$_POST[tipo]', `proximoservice` = '$proximoservice', `sede` = '$_POST[sede]',
	`observaciones` = '$observaciones' WHERE `automotor`.`idautomotor` = $idautomotor;";
	
	mysqli_query($link, $query);
	header("Location: ../../frontend/listarAutomotores.php");
?>