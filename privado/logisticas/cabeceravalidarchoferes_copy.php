<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'validacioneschoferes.php';
//Guarda los valores de los campos en variables, siempre y cuando se haya enviado el formulario, si no se guardará null.
//$dni = isset($_POST['dni']) ? $_POST['dni'] : null;
//$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : null;
//$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
//$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : null;
//$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
//$polizaseguro = isset($_POST['polizaseguro']) ? $_POST['polizaseguro'] : null;
//$licencia = isset($_POST['licencia']) ? $_POST['licencia'] : null;
//$email = isset($_POST['email']) ? $_POST['email'] : null;

//Este array guardará los errores de validación que surjan.
$errores = array();

//Pregunta si está llegando una petición por POST, lo que significa que el usuario envió el formulario.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Valida el DNI con un rango de 1000000 a 999999999.
    /*$opciones_dni = array(
        'options' => array(
        //Definimos el rango de DNI entre 1000000 a 999999999.
        'min_range' => 1000000,
        'max_range' => 999999999
        )
    );*/
    if (!validarDNI($dni)) {
        $errores[] = 'El campo DNI es incorrecto.';
    }
    //Valida que el campo apellido no esté vacío.
    if (!validarApellido($apellido)) {
        $errores[] = 'El campo Apellido es incorrecto.';
    }
    //Valida que el campo apellido no esté vacío.
    if (!validarNombre($nombre)) {
        $errores[] = 'El campo Nombre es incorrecto.';
    }
    //Valida que el campo apellido no esté vacío.
    if (!validarDireccion($direccion)) {
        $errores[] = 'El campo Dirección es incorrecto.';
    }
    //Valida el teléfono con un rango de 1000000 a 999999999.
    /*$opciones_telefono = array(
        'options' => array(
        //Definimos el rango de DNI entre 1000000 a 999999999.
        'min_range' => 1000000,
        'max_range' => 999999999
        )
    );*/
    if (!validarTelefono($telefono)) {
        $errores[] = 'El campo Teléfono es incorrecto.';
    }
    //Valida que el campo apellido no esté vacío.
    if (!validarPolizaSeguro($apellido)) {
        $errores[] = 'El campo Póliza de Seguro es incorrecto.';
    }
    //Valida el licencia con un rango de 1000000 a 999999999.
    /*$opciones_licencia = array(
        'options' => array(
        //Definimos el rango de DNI entre 1000000 a 999999999.
        'min_range' => 1000000,
        'max_range' => 999999999
        )
    );*/
    if (!validarLicencia($licencia)) {
        $errores[] = 'El campo Licencia es incorrecto.';
    }





    
    
    //Verifica si ha encontrado errores y de no haber redirige a la página con el mensaje de que pasó la validación.
    if(!$errores){
        header('Location: ../logistica/ingresarChoferes.php');
        exit;
    }
}

?>