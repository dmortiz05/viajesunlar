<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>UNLaR viajes</title>
	</head>
	<body>
		<?php
		$link = mysqli_connect("localhost","root","","secretariageneral");
		$idchofer=$_POST["idchofer"];
		$apellido=$_POST["apellido"];
		$nombre=$_POST["nombre"];
		$dnichofer=$_POST["dnichofer"];
		$telefono=$_POST["telefono"];
		$direccion=$_POST["direccion"];
		$gruposanguineo=$_POST["gruposanguineo"];
		$seguro=$_POST["seguro"];
		$apto=$_POST["apto"];
		$estado=$_POST["estado"];
		$comentarioschofer=$_POST["comentarioschofer"];

		$query = "UPDATE `chofer` SET  `apellido` = '$apellido', `nombre` = '$nombre', `dnichofer` = '$dnichofer', `telefono` = '$telefono', `direccion` = '$direccion', `gruposanguineo` = '$gruposanguineo', `seguro` = '$seguro', `apto` = '$_POST[radioapto]', `estado` = '$_POST[selectestado]', `comentarioschofer` = '$comentarioschofer' WHERE `chofer`.`idchofer` = $idchofer;";
		mysqli_query($link, $query);
		header("Location: choferes-listado.php");
		?>
	</body>
</html>