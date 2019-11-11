<?php

$patente_error='';
$marca_error ='';
$modelo_error='';
$tipo_error='';
$sede_error='';
$proximoservice_error='';


if(isset ($_POST["submit"]))
{

            //PATENTE//

    if(empty($_POST["patente"]))
    {
    $patente_error = "<p>Ingrese patente </p>";
    }
    else
    {
        if(!preg_match("/^[a-zA-Z0-9 ]*$/", $_POST["patente"]))
        {
        $patente_error= "<p>Ingrese patente correcta</p>";
        }
    }
            //MARCA//

    if(empty($_POST["marca"]))
    {
    $marca_error = "<p>Ingrese una marca</p>";
    }  
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/", $_POST["marca"]))
        {
        $marca_error= "<p>Ingrese una marca correcta</p>";
        }
    }
            //MODELO//

    if(empty($_POST["modelo"]))
    {
    $modelo_error = "<p>Ingrese un modelo </p>";
    }     
    else
    {
        if(is_numeric($_POST["modelo"]))  
        {
        $modelo_error= "";
        }
        else
        {
        $modelo_error="<p>Ingrese un modelo correcto </p>";
        }
    }

    if(strlen($_POST["modelo"]) !=4) 
         {
            $modelo_error= "<p>Ingrese un modelo correcto </p>";
         }
    else
    {
    $modelo_error= "";
    }
            //TIPO//

    if(empty($_POST["tipo"]))
    {
    $tipo_error = "<p>Seleccione un tipo de auto</p>";
    }  
    else
    {
    $tipo_error = "";
    }
            //SEDE//

    if(empty($_POST["sede"]))
    {
    $sede_error = "<p>Seleccione una sede</p>";
    }  
    else
    {
    $sede_error = "";
    }
            //PROXIMOSERVICE//

    if(empty($_POST["proximoservice"]))
    {
    $proximoservice_error = "<p>Seleccione una fecha</p>";
    }  
    else
    {
    $proximoservice_error = "";
    }

            //CARGA//
    
    if ($patente_error=="" && $marca_error=="" && $modelo_error=="" && $tipo_error=="" && $sede_error=="" && $proximoservice_error=="")
    {
    require "cargaautomotores.php";
    }

}

?>