<?php
		$link = mysqli_connect("localhost","php_parque","AutoParque.1920","php_parque");
		$patente=$_POST["patente"];
		$marca=$_POST["marca"];
		$modelo=$_POST["modelo"];
		$tipo=$_POST["tipo"];
		$proximoservice=$_POST["proximoservice"];
		$sede=$_POST["sede"];
		$observaciones=$_POST["observaciones"];

		$query = "INSERT INTO `automotor`(
		`patente`,`marca`, `modelo` , `tipo`, 
		`proximoservice`, `sede`, `observaciones`) 

		VALUES ('$patente', '$marca','$modelo', '$_POST[tipo]', 
		'$proximoservice', '$_POST[sede]', '$observaciones'
		);
		";
		mysqli_query($link, $query);
		header("Location: ../../frontend/ingresarAutomotores.php");
?>