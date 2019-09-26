/* let id = 0
document.getElementById("agreEncar").addEventListener("click", e => {
    let nombre = document.getElementById("nomEnc").value
    let apellido = document.getElementById("apEnc").value
    let dni = document.getElementById("dniEnc").value
    let direccion = document.getElementById("dirEnc").value
    let telefono = document.getElementById("telEnc").value
    let email = document.getElementById("emailEnc").value
    let grupo = document.getElementById("grup").value
    let poliza = document.getElementById("poliEnc").value
    let observacion = document.getElementById("obserEnc").value

    if (nombre.toString().length > 0) {
        let duplicado = document.getElementById("duplicado")
        let contenedor = document.createElement("div")
        contenedor.innerHTML = `<div class ="form1">
    <form>
        <div id="columna1">
            <input id="nomEnc" class="input" name="nombreEncargado" type="text" placeholder="Nombre" maxlength="30" value="${nombre}" required>
    
            <input id="apEnc" class="input" name="apellidoEncargado" type="text" placeholder="Apellido" value="${apellido}" maxlength="30">

            <input id="dniEnc" class="input" name="dniencargado" type="text" placeholder="DNI" value="${dni} "maxlength="30">
            
            <input id="dirEnc" class="input" type="text" name="direccionEncargado" placeholder="Dirección" value="${direccion}" maxlength="100">

            <input id="telEnc" class="input" type="tel" name="telefonoEncargado" placeholder="Teléfono" value="${telefono}" maxlength="30">

            <input id="emailEnc" class="input" type="email" name="emailEncargado" placeholder="Email" value="${email}" maxlength="30">

            <div id="grupSan" class="select">
                <select  class="is-hovered" name="grupoSanguineoEncargado"  >
                        <option>${grupo}</option>
                        <option value="0-">0-</option>
                        <option value="0+">0+</option>
                        <option value="A-">A-</option>
                        <option value="A+">A+</option>
                        <option value="B-">B-</option>
                        <option value="B+">B+</option>
                        <option value="AB-">AB-</option>
                        <option value="AB+">AB+</option>
                </select>
            </div>

            <input id="poli" class="input" type="text" name="polizaEncargado" value="${poliza}"placeholder="Número de Poliza" maxlength="10">

            <input id="obser" class="input" type="text" name="observionesEncargado" value="${observacion}"placeholder="Observaciones">
        </div>
      </form>

        <div id="botton"> 
           a
         </div>
  </div>
  `
        nomEnc.value = ""
        apEnc.value = ""
        dniEnc.value = ""
        dirEnc.value = ""
        telEnc.value = ""
        emailEnc.value = ""
        grupo.select = "Grupo Sanguineo"
        poliEnc.value = ""
        obserEnc.value = ""
        quitarEncar.style.display = 'inline';
        document.getElementById("agreEncar").disabled = true;
        const encargado = contenedor.cloneNode(true)
        duplicado.appendChild(encargado)
    } else {
        alert("Completar todos los datos")
    }
})*/

$(function() {
    $('#activator').click(function() {
        $('#overlay').fadeIn('fast', function() {
            $('#box').animate({ 'top': '160px' }, 500);
        });
    });
    $('#boxclose').click(function() {
        $('#box').animate({ 'top': '-200px' }, 500, function() {
            $('#overlay').fadeOut('fast');
        });
    });

});