<?php
	$link = mysqli_connect("localhost","php_parque","AutoParque.1920","php_parque");
	$idchofer=$_POST["idchofer"];
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

    $query = "UPDATE chofer SET  dni = '$dni', nombre = '$nombre', apellido = '$apellido', 
    direccion = '$direccion', telefono = '$telefono', gruposanguineo = '$gruposanguineo', 
    polizaseguro = '$polizaseguro', licencia = '$licencia', vencimientocarnet = '$vencimientocarnet',
	observaciones = '$observaciones' WHERE idchofer = $idchofer";
	
	mysqli_query($link, $query);
	header("Location: ../../frontend/listarChoferes.php");
?>