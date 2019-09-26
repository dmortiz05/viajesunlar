<?php
		$link = mysqli_connect("localhost","php_parque","AutoParque.1920","php_parque");
		//$idchofer=$_POST["idchofer"];
		$dni=$_POST["dni"];
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$direccion=$_POST["direccion"];
		$telefono=$_POST["telefono"];
		$gruposanguineo=$_POST["gruposanguineo"];
		$polizaseguro=$_POST["polizaseguro"];
		$licencia=$_POST["licencia"];
		$vencimientocarnet=$_POST["vencimientocarnet"];
		$observaciones=$_POST["observaciones"];

		$query = "INSERT INTO `chofer`(
		`dni`,`nombre`, `apellido` , `direccion`, 
		`telefono`, `gruposanguineo`, 
		`polizaseguro`, `licencia`, `vencimientocarnet`, `observaciones`) 

		VALUES ('$dni', '$nombre','$apellido', '$direccion', 
		'$telefono', '$_POST[gruposanguineo]', '$polizaseguro', 
		'$licencia', '$vencimientocarnet', '$observaciones'
		);
		";
		mysqli_query($link, $query);
		header("Location: ../logistica/ingresarChoferes.php");
?>