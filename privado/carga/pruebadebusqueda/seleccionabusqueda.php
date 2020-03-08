<?php
    $dni = $_GET["q"];
    $query = "SELECT * FROM encargadodeviaje WHERE dni='$dni'";
    $result = mysqli_query($link, $query);
?>