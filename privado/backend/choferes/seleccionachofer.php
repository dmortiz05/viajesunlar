<?php
    $dni = $_GET["dni"];
    $query = "SELECT * FROM chofer WHERE dni='$dni'";
    $result = mysqli_query($link, $query);
?>