<?php

                                //VALIDACION---DATOS DEL ENCARGADO//

$nombreEncargado_error='';
$apellidoEncargado_error ='';
$dniencargado_error='';
$telefonoEncargado_error='';
$direccionEncargado_error='';
$emailEncargado_error='';
$tamagnioGrupoSanguineo_error='';
$polizaEncargado_error='';

if(isset ($_POST["agregarEncargado"]))
{
            //NOMBRE ENCARGADO//

    if(empty($_POST["nombreEncargado"]))
    {
    $nombreEncargado_error = "<p>Ingrese un nombre</p>";
    }  
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/", $_POST["nombreEncargado"]))
        {
        $nombreEncargado_error= "<p>Ingrese un nombre correcto</p>";
        }
    }   
            //APELLIDO ENCARGADO//

    if(empty($_POST["apellidoEncargado"]))
    {
    $apellidoEncargado_error = "<p>Ingrese un apellido</p>";
    }  
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/", $_POST["apellidoEncargado"]))
        {
        $apellidoEncargado_error= "<p>Ingrese un apellido correcto</p>";
        }
    }   
            //DNI ENCARGADO//
    
    if(empty($_POST["dniencargado"]))
    {
    $dniencargado_error = "<p>Ingrese un DNI </p>";
    }     
    else
    {
        if(is_numeric($_POST["dniencargado"]))  
        {
        $dniencargado_error= "";
        }
        else
        {
        $dniencargado_error="<p>ingrese un DNI correcto </p>";
        }
    }      
           //TELEFONO ENCARGADO//

    if(empty($_POST["telefonoEncargado"]))
    {
    $telefonoEncargado_error = "<p>Ingrese un telefono </p>";
    }     
    else
    {
        if(is_numeric($_POST["telefonoEncargado"]))  
        {
        $telefonoEncargado_error= "";
        }
        else
        {
        $telefonoEncargado_error="<p>ingrese un telefono correcto </p>";
        }
    }    
            //DIRECCION ENCARGADO//

    if(empty($_POST["direccionEncargado"]))
    {
    $direccionEncargado_error = "<p>Ingrese una direccion</p>";
    }
    else
    {
    $direccionEncargado_error = "";
    }
            //EMAIL ENCARGADO//

    if(empty($_POST["emailEncargado"]))
    {
    $emailEncargado_error = "<p>Ingrese un email</p>";
    }
    else
    {
        if(!filter_var($_POST["emailEncargado"], FILTER_VALIDATE_EMAIL))
        {
        $emailEncargado_error= "<p>Ingrese un mail correcto</p>";
        }
    }
            //GRUPO SANGUINEO ENCARGADO//
    
    if(empty($_POST["tamagnioGrupoSanguineo"]))
    {
    $tamagnioGrupoSanguineo_error = "<p>Seleccione un grupo sanguineo</p>";
    }  
    else
    {
    $tamagnioGrupoSanguineo_error = "";
    }
            //POLIZA ENCARGADO//

    if(empty($_POST["polizaEncargado"]))
    {
    $polizaEncargado_error = "<p>Ingrese una poliza </p>";
    }
    else
    {
        if(is_numeric($_POST["polizaEncargado"]))  
        {
        $polizaEncargado_error= "";
        }
        else
        {
        $polizaEncargado_error="<p>Ingrese una poliza correcta </p>";
        }
    }
            //CARGA DE DATOS DE ENCARGADO//

    if ($nombreEncargado_error=="" && $apellidoEncargado_error=="" && $dniencargado_error=="" && 
    $telefonoEncargado_error=="" && $direccionEncargado_error=="" && $emailEncargado_error=="" && $grupoSanguineoEncargado_error==""
    && $polizaEncargado_error=="")
    {
    
    }   
}
                                //VALIDACION---ALUMNO O GRADUADO//

$nombrePasajeroAlumno_error='';
$apellidoPasajeroAlumno_error ='';
$dniPasajeroAlumno_error='';
$telefonoPasajeroAlumno_error='';
$direccionPasajeroAlumno_error='';
$tamanioGrupoSanguineoAlumno_error='';
$polizaPasajeroAlumno_error='';
$codigoMatriculaPasajeroAlumno_error='';
$numeroMatriculaPasajeroAlumno_error='';

if(isset ($_POST["agregarPasajeroAlumno"]))
{

            //NOMBRE ALUMNO O GRADUADO//

    if(empty($_POST["nombrePasajeroAlumno"]))
    {
    $nombrePasajeroAlumno_error = "<p>Ingrese un nombre</p>";
    }  
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/", $_POST["nombrePasajeroAlumno"]))
        {
        $nombrePasajeroAlumno_error= "<p>Ingrese un nombre correcto</p>";
        }
    }   
            //APELLIDO ALUMNO O GRADUADO//

    if(empty($_POST["apellidoPasajeroAlumno"]))
    {
    $apellidoPasajeroAlumno_error = "<p>Ingrese un apellido</p>";
    }  
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/", $_POST["apellidoPasajeroAlumno"]))
        {
        $apellidoPasajeroAlumno_error= "<p>Ingrese un apellido correcto</p>";
        }
    }   
            //DNI ALUMNO O GRADUADO//
    
    if(empty($_POST["dniPasajeroAlumno"]))
    {
    $dniPasajero_error = "<p>Ingrese un DNI </p>";
    }     
    else
    {
        if(is_numeric($_POST["dniPasajeroAlumno"]))  
        {
        $dniPasajeroAlumno_error= "";
        }
        else
        {
        $dniPasajeroAlumno_error="<p>ingrese un DNI correcto </p>";
        }
    }      
           //TELEFONO ALUMNO O GRADUADO//

    if(empty($_POST["telefonoPasajeroAlumno"]))
    {
    $telefonoPasajeroAlumno_error = "<p>Ingrese un telefono </p>";
    }     
    else
    {
        if(is_numeric($_POST["telefonoPasajeroAlumno"]))  
        {
        $telefonoPasajeroAlumno_error= "";
        }
        else
        {
        $telefonoPasajeroAlumno_error="<p>ingrese un telefono correcto </p>";
        }
    }    
            //DIRECCION ALUMNO O GRADUADO//

    if(empty($_POST["direccionPasajeroAlumno"]))
    {
    $direccionPasajeroAlumno_error = "<p>Ingrese una direccion</p>";
    }
    else
    {
    $direccionPasajeroAlumno_error = "";
    }
            //GRUPO SANGUINEO ALUMNO O GRADUADO//
    
    if(empty($_POST["tamanioGrupoSanguineoAlumno"]))
    {
    $tamanioGrupoSanguineoAlumno_error = "<p>Seleccione un grupo sanguineo</p>";
    }  
    else
    {
    $tamanioGrupoSanguineoAlumno_error = "";
    }
            //POLIZA ALUMNO O GRADUADO//

    if(empty($_POST["polizaPasajeroAlumno"]))
    {
    $polizaPasajeroAlumno_error = "<p>Ingrese una poliza </p>";
    }
    else
    {
        if(is_numeric($_POST["polizaPasajeroAlumno"]))  
        {
        $polizaPasajeroAlumno_error= "";
        }
        else
        {
        $polizaPasajeroAlumno_error="<p>Ingrese una poliza correcta </p>";
        }
    }
            //CODIGO MATRICULA ALUMNO

    if(empty($_POST["codigoMatriculaPasajeroAlumno"]))
    {
    $codigoMatriculaPasajeroAlumno_error = "<p>Ingrese un codigo</p>";
    }  
    else
    {
        if(!preg_match("/^[a-zA-Z]*$/", $_POST["codigoMatriculaPasajeroAlumno"]))
        {
        $codigoMatriculaPasajeroAlumno_error= "<p>Ingrese un codigo correcto</p>";
        {
            //NUMERO DE MATRICULA ALUMNO//
    
    if(empty($_POST["numeroMatriculaPasajeroAlumno"]))
    {
    $numeroMatriculaPasajeroAlumno_error = "<p>Ingrese una numero de matricula </p>";
    }
    else
    {
        if(is_numeric($_POST["numeroMatriculaPasajeroAlumno"]))  
        {
        $numeroMatriculaPasajeroAlumno_error= "";
        }
        else
        {
        $numeroMatriculaPasajeroAlumno_error="<p>Ingrese una numero de matricula correcto </p>";
        }
    }
            //CARGA DE DATOS ALUMNOS O GRADUADOS//
    
    if ($nombrePasajeroAlumno_error=="" && $apellidoPasajeroAlumno_error=="" && $dniPasajeroAlumno_error=="" && 
    $telefonoPasajeroAlumno_error=="" && $direccionPasajeroAlumno_error=="" && $tamanioGrupoSanguineoAlumno_error=="" && $polizaPasajeroAlumno_error==""
    && $codigoMatriculaPasajeroAlumno_error=="" && $numeroMatriculaPasajeroAlumno_error=="")
    {

    }
    
}

                                //VALIDACION---DOCENTE O NO DOCENTE//

$nombrePasajeroDocente_error='';
$apellidoPasajeroDocente_error ='';
$dniPasajeroDocente_error='';
$telefonoPasajeroDocente_error='';
$direccionPasajeroDocente_error='';
$tamanioGrupoSanguineoDocente_error='';
$polizaPasajeroDocente_error='';
$legajoPasajeroDocente_error='';

if(isset ($_POST["agregarPasajeroDocente"]))
{

            //NOMBRE DOCENTE O NO DOCENTE//

    if(empty($_POST["nombrePasajeroDocente"]))
    {
    $nombrePasajeroDocente_error = "<p>Ingrese un nombre</p>";
    }  
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/", $_POST["nombrePasajeroDocente"]))
        {
        $nombrePasajeroDocente_error= "<p>Ingrese un nombre correcto</p>";
        }
    }   
            //APELLIDO DOCENTE O NO DOCENTE//

    if(empty($_POST["apellidoPasajeroDocente"]))
    {
    $apellidoPasajeroDocente_error = "<p>Ingrese un apellido</p>";
    }  
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/", $_POST["apellidoPasajeroDocente"]))
        {
        $apellidoPasajeroDocente_error= "<p>Ingrese un apellido correcto</p>";
        }
    }   
            //DNI DOCENTE O NO DOCENTE//
    
    if(empty($_POST["dniPasajeroDocente"]))
    {
    $dniPasajeroDocente_error = "<p>Ingrese un DNI </p>";
    }     
    else
    {
        if(is_numeric($_POST["dniPasajeroDocente"]))  
        {
        $dniPasajeroDocente_error= "";
        }
        else
        {
        $dniPasajeroDocente_error="<p>ingrese un DNI correcto </p>";
        }
    }      
           //TELEFONO DOCENTE O NO DOCENTE//

    if(empty($_POST["telefonoPasajeroDocente"]))
    {
    $telefonoPasajeroDocente_error = "<p>Ingrese un telefono </p>";
    }     
    else
    {
        if(is_numeric($_POST["telefonoPasajeroDocente"]))  
        {
        $telefonoPasajeroDocente_error= "";
        }
        else
        {
        $telefonoPasajeroDocente_error="<p>ingrese un telefono correcto </p>";
        }
    }    
            //DIRECCION DOCENTE O NO DOCENTE//

    if(empty($_POST["direccionPasajeroDocente"]))
    {
    $direccionPasajeroDocente_error = "<p>Ingrese una direccion</p>";
    }
    else
    {
    $direccionPasajeroDocente_error = "";
    }
            //GRUPO SANGUINEO DOCENTE O NO DOCENTE//
    
    if(empty($_POST["tamanioGrupoSanguineoDocente"]))
    {
    $tamanioGrupoSanguineoDocente_error = "<p>Seleccione un grupo sanguineo</p>";
    }  
    else
    {
    $tamanioGrupoSanguineoDocente_error = "";
    }
            //POLIZA DOCENTE O NO DOCENTE//

    if(empty($_POST["polizaPasajeroDocente"]))
    {
    $polizaPasajeroDocente_error = "<p>Ingrese una poliza </p>";
    }
    else
    {
        if(is_numeric($_POST["polizaPasajeroDocente"]))  
        {
        $polizaPasajeroDocente_error= "";
        }
        else
        {
        $polizaPasajeroDocente_error="<p>Ingrese una poliza correcta </p>";
        }
    }
            //LEGAJO DOCENTE O NO DOCENTE//
    
    if(empty($_POST["legajoPasajeroDocente"]))
    {
    $legajoPasajeroDocente_error = "<p>Ingrese una numero de legajo </p>";
    }
    else
    {
        if(is_numeric($_POST["legajoPasajeroDocente"]))  
        {
        $legajoPasajeroDocente_error= "";
        }
        else
        {
        $legajoPasajeroDocente_error="<p>Ingrese una numero de legajo correcto </p>";
        }
    }
            //CARGA DE DATOS DOCENTE O NO DOCENTE//
    
    if ($nombrePasajeroDocente_error=="" && $apellidoPasajeroDocente_error=="" && $dniPasajeroDocente_error=="" && 
    $telefonoPasajeroDocente_error=="" && $direccionPasajeroDocente_error=="" && $tamanioGrupoSanguineoDocente_error=="" && $polizaPasajeroDocente_error==""
    && $legajoPasajeroDocente_error=="")
    {

    }
    
}

                                //VALIDACION---ALUMNO O GRADUADO//

$nombrePasajeroOtro_error='';
$apellidoPasajeroOtro_error ='';
$dniPasajeroOtro_error='';
$fechaNacimientoPasajeOtro_error='';
$tamanioGrupoSanguineoOtro_error='';
$telefonoPasajeroOtro_error='';
$direccionPasajeroOtro_error='';
$aseguradoraPasajeroOtro_error='';
$polizaPasajeroOtro_error='';
$razonViajePasajeroOtro_error='';

if(isset ($_POST["agregarPasajeroOtro"]))
{
        
}

/*if(isset ($_POST["submit"]))
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

}*/

?>