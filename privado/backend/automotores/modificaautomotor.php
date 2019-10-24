<?php
	$link = mysqli_connect("localhost","php_parque","AutoParque.1920","php_parque");
	$idautomotor=$_POST["idautomotor"];
	$patente=$_POST["patente"];
	$marca=$_POST["marca"];
	$modelo=$_POST["modelo"];
	$tipo=$_POST["tipo"];
	$proximoservice=$_POST["proximoservice"];
	$sede=$_POST["sede"];
	$observaciones=$_POST["observaciones"];

    $query = "UPDATE automotor SET  patente = '$patente', marca = '$marca', modelo = '$modelo', 
    tipo = '$tipo', proximoservice = '$proximoservice', sede = '$sede',
	observaciones = '$observaciones' WHERE idautomotor = $idautomotor";
	
	mysqli_query($link, $query);
	header("Location: ../../frontend/listarAutomotores.php");
?>