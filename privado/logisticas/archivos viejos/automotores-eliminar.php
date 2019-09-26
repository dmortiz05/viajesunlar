<?php 
$link = mysqli_connect("localhost","root","","secretariageneral");
$dominio=$_GET["dominio"];
$query = "DELETE FROM automotor where dominio='$dominio'";
mysqli_query($link, $query);
header("Location: automotores-listado.php")
?>