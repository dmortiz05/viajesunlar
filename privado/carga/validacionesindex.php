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
    $dniPasajeroAlumno_error = "<p>Ingrese un DNI </p>";
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
        } 
    }
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

                                //VALIDACION---OTROS//

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

            //NOMBRE OTROS//

    if(empty($_POST["nombrePasajeroOtro"]))
    {
    $nombrePasajeroOtro_error = "<p>Ingrese un nombre</p>";
    }  
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/", $_POST["nombrePasajeroOtro"]))
        {
        $nombrePasajeroOtro_error= "<p>Ingrese un nombre correcto</p>";
        }
    }   
            //APELLIDO OTROS//

    if(empty($_POST["apellidoPasajeroOtro"]))
    {
    $apellidoPasajeroOtro_error = "<p>Ingrese un apellido</p>";
    }  
    else
    {
        if(!preg_match("/^[a-zA-Z ]*$/", $_POST["apellidoPasajeroOtro"]))
        {
        $apellidoPasajeroOtro_error= "<p>Ingrese un apellido correcto</p>";
        }
    }   
            //DNI OTROS//
    
    if(empty($_POST["dniPasajeroOtro"]))
    {
    $dniPasajeroOtro_error = "<p>Ingrese un DNI </p>";
    }     
    else
    {
        if(is_numeric($_POST["dniPasajeroOtro"]))  
        {
        $dniPasajeroOtro_error= "";
        }
        else
        {
        $dniPasajeroOtro_error="<p>ingrese un DNI correcto </p>";
        }
    }     
           //FECHA NACIMIENTO OTROS//

    if(empty($_POST["fechaNacimientoPasajeOtro"]))
    {
    $fechaNacimientoPasajeOtro_error = "<p>Seleccione una fecha de nacimiento</p>";
    }
            //GRUPO SANGUINEO OTROS//
    
    if(empty($_POST["tamanioGrupoSanguineoOtro"]))
    {
    $tamanioGrupoSanguineoOtro_error = "<p>Seleccione un grupo sanguineo</p>";
    }  
    else
    {
    $tamanioGrupoSanguineoOtro_error = "";
    }
           //TELEFONO OTROS//

    if(empty($_POST["telefonoPasajeroOtro"]))
    {
    $telefonoPasajeroOtro_error = "<p>Ingrese un telefono </p>";
    }     
    else
    {
        if(is_numeric($_POST["telefonoPasajeroOtro"]))  
        {
        $telefonoPasajeroOtro_error= "";
        }
        else
        {
        $telefonoPasajeroOtro_error="<p>ingrese un telefono correcto </p>";
        }
    }    
            //DIRECCION OTROS//

    if(empty($_POST["direccionPasajeroOtro"]))
    {
    $direccionPasajeroOtro_error = "<p>Ingrese una direccion</p>";
    }
    else
    {
    $direccionPasajeroOtro_error = "";
    }
            //SEGURADORA OTRAS//

    if(empty($_POST["aseguradoraPasajeroOtro"]))
    {
    $aseguradoraPasajeroOtro_error = "<p>Ingrese una aseguradora</p>";
    }
    else
    {
    $aseguradoraPasajeroOtro_error = "";
    }
            //POLIZA OTROS//

    if(empty($_POST["polizaPasajeroOtro"]))
    {
    $polizaPasajeroDocente_error = "<p>Ingrese una poliza </p>";
    }
    else
    {
        if(is_numeric($_POST["polizaPasajeroOtro"]))  
        {
        $polizaPasajeroOtro_error= "";
        }
        else
        {
        $polizaPasajeroOtro_error="<p>Ingrese una poliza correcta </p>";
        }
    }
            // RAZON VIAJE OTROS//

    if(empty($_POST["razonViajePasajeroOtro"]))
    {
    $razonViajePasajeroOtro_error = "<p>Ingrese una razon de viaje</p>";
    }
    else
    {
    $razonViajePasajeroOtro_error = "";
    }
            //CARGA DE DATOS DOCENTE O NO DOCENTE//
    
    if ($nombrePasajeroOtro_error=="" && $apellidoPasajeroOtro_error=="" && $dniPasajeroOtro_error=="" && 
    $fechaNacimientoPasajeOtro_error=="" && $tamanioGrupoSanguineoOtro_error=="" && $telefonoPasajeroOtro_error=="" && $direccionPasajeroOtro_error==""
    && $aseguradoraPasajeroOtro_error=="" && $polizaPasajeroOtro_error=="" && $razonViajePasajeroOtro_error=="")
    {

    }

}

?>