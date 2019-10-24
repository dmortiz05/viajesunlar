<?php 
$link = mysqli_connect("localhost","php_parque","AutoParque.1920","php_parque");
$idautomotor=$_GET["idautomotor"];
$query = "DELETE FROM automotor where idautomotor='$idautomotor'";
mysqli_query($link, $query);
header("Location: ../../frontend/listarAutomotores.php")
?>