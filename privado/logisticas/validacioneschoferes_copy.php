<?php
   function validarDNI($valor, $opciones=null){
      if(filter_var($valor, FILTER_VALIDATE_INT, $opciones) === FALSE){
         return false;
      }else{
         return true;
      }
   }
   function validarApellido($valor){
      if(trim($valor) == ''){
         return false;
      }else{
         return true;
      }
   }
   function validarNombre($valor){
      if(trim($valor) == ''){
         return false;
      }else{
         return true;
      }
   }
   function validarDireccion($valor){
      if(trim($valor) == ''){
         return false;
      }else{
         return true;
      }
   }
   function validarTelefono($valor, $opciones=null){
      if(filter_var($valor, FILTER_VALIDATE_INT, $opciones) === FALSE){
         return false;
      }else{
         return true;
      }
   }
   function validarPolizaSeguro($valor){
      if(trim($valor) == ''){
         return false;
      }else{
         return true;
      }
   }
   function validarLicencia($valor, $opciones=null){
      if(filter_var($valor, FILTER_VALIDATE_INT, $opciones) === FALSE){
         return false;
      }else{
         return true;
      }
   }
   function validarVencimientoCarnet($valor){
      if(trim($valor) == ''){
         return false;
      }else{
         return true;
      }
   }
?>