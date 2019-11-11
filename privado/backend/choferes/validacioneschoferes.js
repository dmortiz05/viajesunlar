
function validacion()
{

var nombre=document.getElementById('nombre').value;
var apellido=document.getElementById('apellido').value;
var dni=document.getElementById('dni').value;
var direccion=document.getElementById('direccion').value;
var telefono=document.getElementById('telefono').value;
var gruposanguineo=document.getElementById('gruposanguineo').value;
var polizaseguro=document.getElementById('polizaseguro').value;
var licencia=document.getElementById('licencia').value;
var vencimientocarnet=document.getElementById('vencimientocarnet').value;

if (nombre.value == "" || nombre.value == null || nombre.value.length == 0)                                  
    { 
        alert("Ingrese un nombre.");  
        return false; 
    }

/*else if (apellido.value == "")                                  
    { 
        alert("Ingrese un apellido."); 
        apellido.focus(); 
        return false; 
    }

else if (dni.value == "" || isNaN(dni) && document.choferes.dni.value.length > 7)                                  
    { 
        alert("Ingrese un DNI correcto."); 
        dni.focus(); 
        return false;
    } 

else if (direccion.value == "")                                  
    { 
        alert("Ingrese una dirección."); 
        direccion.focus(); 
        return false;
    }      

else if (telefono.value == "" || isNaN(telefono))                                  
    { 
        alert("Ingrese un numero de teléfono correcto."); 
        telefono.focus(); 
        return false;
    } 

else if (gruposanguineo.value == "")                                  
    { 
        alert("Selecciones un grupo sanguineo."); 
        gruposanguineo.focus(); 
        return false; 
    }

else if (gruposanguineo.value == "")                                  
    { 
        alert("Selecciones un grupo sanguineo."); 
        gruposanguineo.focus(); 
        return false;
    } 

else if (polizaseguro.value == "")                                  
    { 
        alert("Ingrese una póliza de seguro."); 
        polizaseguro.focus(); 
        return false;
    }

else if (licencia.value == "" || isNaN(licencia))                                  
    { 
        alert("Ingrese un numero de licencia."); 
        licencia.focus(); 
        return false;
    }
 */ 
else 
    {
    return true;
    }

}
