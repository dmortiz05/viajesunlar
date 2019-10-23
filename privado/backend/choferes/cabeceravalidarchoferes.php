<?php
    $error = "";

    if (empty($_POST['nombre'])) $error .= "<p class=\"error\">No has introducido tu nombre</p>";
    /*if (empty($_POST['correo'])) $error .= "<p class=\"error\">No has introducido tu dirección de correo</p>";
    if (empty($_POST['comentario'])) $error .= "<p class=\"error\">No has escrito nada en el cuerpo del mensaje</p>";
    $text_len = strlen($_POST['comentario']);
    if($text_len > 800) { $error .= "<p class=\"error\">El comentario debe ser de menor a 800, se ingresaron $text_len </p>"; }
    if(isset($_POST['correo']))
      {
        if (!comprobar_email($_POST['correo']))
        { $error .= "<p class=\"error\">La dirección de correo es incorrecta</p>"; }
      }// end of email check*/
    if($error) {
        echo $error;}
?>