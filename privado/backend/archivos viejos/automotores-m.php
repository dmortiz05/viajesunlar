<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>UNLaR viajes</title>
	</head>
	<body>
		<?php
		$link = mysqli_connect("localhost","root","","secretariageneral");
		$orden=$_POST["orden"];
		$dominio=$_POST["dominio"];
		$marca=$_POST["marca"];
		$modelo=$_POST["modelo"];
		$tipo=$_POST["tipo"];
		$estadoservice=$_POST["estadoservice"];
		$proximoservice=$_POST["proximoservice"];
		$sede=$_POST["sede"];
		$observaciones=$_POST["observaciones"];

		$query = "UPDATE `automotor` SET  `dominio` = '$dominio', `marca` = '$marca', `modelo` = '$modelo', `tipo` = '$tipo', `estadoservice` = '$_POST[radioestado]', `proximoservice` = '$proximoservice', `sede` = '$_POST[selectsede]', `observaciones` = '$observaciones' WHERE `automotor`.`orden` = $orden;";
		mysqli_query($link, $query);
		header("Location: automotores-listado.php");
		?>
	</body>
</html>