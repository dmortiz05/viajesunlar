<?php
		$link = mysqli_connect("localhost","php_parque","AutoParque.1920","php_parque");
		$motivoviaje=$_POST["motivoviaje"];
		$sedeorigen=$_POST["sedeorigen"];
		$destinoprovincia=$_POST["destinoprovincia"];
		$destinolocalidad=$_POST["destinolocalidad"];
		$fechasalida=$_POST["fechasalida"];
		$fecharegreso=$_POST["fecharegreso"];
		$representanteviaje=$_POST["representanteviaje"];
		$carrera=$_POST["carrera"];
		$cantidadpasajero=$_POST["cantidadpasajero"];
		$observaciones=$_POST["observaciones"];

		$query = "INSERT INTO `solicitud`(
			`motivoviaje`,`sedeorigen`, `destinoprovincia` , `destinolocalidad`, 
			`fechasalida`, `fecharegreso`, `representanteviaje`, 
			`carrera`, `cantidadpasajero`, `observaciones`) 
	
			VALUES ('$motivoviaje', '$_POST[sedeorigen]', '$destinoprovincia','$destinolocalidad', 
			'$fechasalida','$fecharegreso', '$representanteviaje',
			'$carrera', '$cantidadpasajero', '$observaciones'
			);
			";
		
		mysqli_query($link, $query);
		header("Location: /privado/carga/solicitarViaje.php");
?>