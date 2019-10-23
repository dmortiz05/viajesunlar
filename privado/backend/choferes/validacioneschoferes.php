<?php
$nombre = "";
$apellido = "";
$dni ="";
$direccion = "";
$telefono ="";
$gruposanguineo ="";
$polizaseguro="";
$licencia ="";
$vencimientocarnet = "";
$nombre_error='';
$apellido_error='';
$dni_error='';
$direccion_error='';
$telefono_error='';
$gruposanguineo_error='';
$polizaseguro_error = '';
$licencia_error = '';
$vencimientocarnet_error = '';


   if(isset($_POST["submit"]))
   {
      if(empty($_POST["nombre"]))
      {
         $nombre_error = "<p>Ingrese nombre </p>";
      }
      
      else
      {
         if(!preg_match("/^[a-zA-Z ]*$/", $_POST["nombre"]))
         {
            $nombre_error= "<p>Formato Invalido</p>";
         }
      }

      if(empty($_POST["apellido"]))
      {
         $apellido_error = "<p>Ingrese apellido </p>";
      }
      
      else
      {
         if(!preg_match("/^[a-zA-Z ]*$/", $_POST["apellido"]))
         {
            $apellido_error= "<p>Formato Invalido</p>";
         }
      }
      
      if(empty($_POST["direccion"]))
      {
         $direccion_error = "<p>Ingrese dirección </p>";
      }
      
      else
      {
         if(!preg_match("/^[a-zA-Z0-9° ]*$/", $_POST["direccion"]))
         {
            $direccion_error= "<p>Formato Invalido</p>";
         }
      }

      if(empty($_POST["dni"]))
      {
         $dni_error = "<p>Ingrese DNI </p>";
      }
      
      else
      {
         if(strlen($_POST["dni"])!=8) 
         {
            $dni_error= "<p>Ingrese un dni correcto</p>";
         }
      }

      else 
      {
         if(is_numeric($_POST["dni"])) 
         
         {
            $dni_error= "";
         }
         else
         {
            $dni_error="<p>Ingrese un dni correcto </p>";
         }
      }

      if(empty($_POST["telefono"]))
      {
         $telefono_error = "<p>Ingrese un número de telefono </p>";
      }
      
      else
      {
         if(is_numeric($_POST["telefono"])) 
         
         {
            $telefono_error= "";
         }
         else
         {
            $telefono_error="<p>Ingrese un número de telefono correcto </p>";
         }
         

      }

      if(empty($_POST["gruposanguineo"]))
      {
         $gruposanguineo_error = "<p>Seleccione un grupo sanguineo</p>";
      }
      
      else
      {
         $gruposanguineo_error = "";
      }

      if(empty($_POST["polizaseguro"]))
      {
         $polizaseguro_error = "<p>Ingrese una póliza de seguro </p>";
      }
      
      else
      {
         if(!preg_match("/^[a-zA-Z ]*$/", $_POST["polizaseguro"]))
         {
            $polizaseguro_error= "<p>Formato Invalido</p>";
         }
      }

      if(empty($_POST["licencia"]))
      {
         $licencia_error = "<p>Ingrese un número de licencia </p>";
      }
      
      else
      {
         if(is_numeric($_POST["licencia"])) 
         
         {
            $licencia_error= "";
         }
         else
         {
            $licencia_error="<p>Ingrese un número de licencia correcto </p>";
         }
         
      }

      if ($nombre_error=="" && $apellido_error=="" && $dni_error=="" && $direccion_error=="" && $telefono_error=="" && $gruposanguineo_error=="" && $polizaseguro_error =="" && $licencia_error =="" && $vencimientocarnet_error =="")
      {
         
      }

   }

?>