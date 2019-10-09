<?php 
$link = mysqli_connect("localhost","php_parque","AutoParque.1920","php_parque");
$dni=$_GET["dni"];
$query = "DELETE FROM chofer where dni='$dni'";
mysqli_query($link, $query);
header("Location: ../../frontend/listarChoferes.php")
?>