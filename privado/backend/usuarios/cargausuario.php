<?php
		$link = mysqli_connect("localhost","php_parque","AutoParque.1920","php_parque");
		$nickname=$_POST["nickname"];
		$contrasenia=$_POST["contrasenia"];
		$observaciones=$_POST["observaciones"];

		$query = "INSERT INTO `usuario`(
		`nickname`,`contrasenia`, `observaciones`) 

		VALUES ('$nickname', '$contrasenia', '$observaciones');
		";
		mysqli_query($link, $query);
		header("Location: ../../frontend/ingresarUsuario.php");
?>