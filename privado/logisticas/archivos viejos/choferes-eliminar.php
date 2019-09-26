<?php 
$link = mysqli_connect("localhost","root","","secretariageneral");
$dnichofer=$_GET["dnichofer"];
$query = "DELETE FROM chofer where dnichofer='$dnichofer'";
mysqli_query($link, $query);
header("Location: choferes-listado.php")
?>