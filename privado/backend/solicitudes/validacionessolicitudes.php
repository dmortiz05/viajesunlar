<?php

$motivoviaje_error='';
$sedeorigen_error ='';
$destinoprovincia_error='';
$destinolocalidad_error='';
$fechasalida_error='';
$fecharegreso_error='';
$representanteviaje_error='';
$carrera_error='';
$cantidadpasajero_error='';


if(isset ($_POST["submit"]))
{

            //MOTIVO DE VIAJE//

    if(empty($_POST["motivoviaje"]))
    {
    $motivoviaje_error = "<p>Ingrese un motivo de viaje </p>";
    }
    else
    {
    $motivoviaje_error = "";
    }
            //SEDE//

    if(empty($_POST["sedeorigen"]))
    {
    $sedeorigen_error = "<p>seleccione una sede</p>";
    }  
    else
    {
    $sedeorigen_error = "";
    }
            //PROVINCIA DE DESTINO//

    if(empty($_POST["destinoprovincia"]))
    {
    $destinoprovincia_error = "<p>Ingrese una provincia</p>";
    }  
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/", $_POST["destinoprovincia"]))
        {
        $destinoprovincia_error= "<p>Ingrese una provincia</p>";
        }
    }   

            //LOCALIDAD DE DESTINO//

    if(empty($_POST["destinolocalidad"]))
    {
    $destinolocalidad_error = "<p>Ingrese una localidad</p>";
    }  
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/", $_POST["destinolocalidad"]))
        {
        $destinolocalidad_error= "<p>Ingrese una localidad</p>";
        }
    }
            //FECHA DE SALIDA//

    if(empty($_POST["fechasalida"]))
    {
    $fechasalida_error = "<p>Seleccione una fecha</p>";
    }  
    else
    {
    $fechasalida_error = "";
    }  
            //FECHA DE REGRESO//

    if(empty($_POST["fecharegreso"]))
    {
    $fecharegreso_error = "<p>Seleccione una fecha</p>";
    }  
    else
    {
    $fecharegreso_error = "";
    }  
            //REPRESENTANTE DE VIAJE//

    if(empty($_POST["representanteviaje"]))
    {
    $representanteviaje_error = "<p>Ingrese una provincia</p>";
    }  
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/", $_POST["representanteviaje"]))
        {
        $representanteviaje_error= "<p>Ingrese un nombre de representante</p>";
        }
    } 
            //CARRERA//

    if(empty($_POST["carrera"]))
    {
    $carrera_error = "<p>Ingrese carrera/s</p>";
    }  
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/", $_POST["carrera"]))
        {
        $carrera_error= "<p>Ingrese carrera/s</p>";
        }
    }
            //CANTIDAD DE PASAJEROS//

    if(empty($_POST["cantidadpasajero"]))
    {
    $cantidadpasajero_error = "<p>Ingrese cantidad de pasajeros </p>";
    }     
    else
    {
        if(is_numeric($_POST["cantidadpasajero"]))  
        {
        $cantidadpasajero_error= "";
        }
        else
        {
        $cantidadpasajero_error="<p>ingrese una cantidad corrcta </p>";
        }
    }            
            //CARGA//
    
    if ($motivoviaje_error=="" && $sedeorigen_error=="" && $destinoprovincia_error=="" && 
    $destinolocalidad_error=="" && $fechasalida_error=="" && $fecharegreso_error=="" && $representanteviaje_error==""
    && $carrera_error=="" && $cantidadpasajero_error=="")
    {
    require "cargasolicitud.php";
    }

}

?>