<?php 
$link = mysqli_connect("localhost","php_parque","AutoParque.1920","php_parque");
$patente=$_GET["patente"];
$query = "DELETE FROM automotor where patente='$patente'";
mysqli_query($link, $query);
header("Location: ../../frontend/listarAutomotores.php")
?>