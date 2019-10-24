<?php 
$link = mysqli_connect("localhost","php_parque","AutoParque.1920","php_parque");
$idchofer=$_GET["idchofer"];
$query = "DELETE FROM chofer where idchofer='$idchofer'";
mysqli_query($link, $query);
header("Location: ../../frontend/listarChoferes.php")
?>