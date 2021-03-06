<?php
include "../backend/choferes/validacioneschoferes.php"
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="../../publico/css/bulma.min.css">
    <link rel="stylesheet" href="../../publico/css/styleNavBar.css">
    <link rel="stylesheet" href="../../publico/css/styleGrid.css">
    <link rel="stylesheet" href="../../publico/css/normalize.css">
    <link rel="stylesheet" href="../../publico/css/styleElements.css">
    <link rel="stylesheet" href="../../publico/css/styleNavDash.css">
    <link rel="stylesheet" href="../../publico/css/logistica.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="https://graduados.unlar.edu.ar/wp-content/uploads/2018/04/cropped-escudo_unlar.png">
    <script src="https://kit.fontawesome.com/9c18248300.js"></script>
    <script src="../../publico/js/jsvalidate.js"></script>
    <script type="text/javascript" language="javascript" src="../../publico/js/scriptaculous/lib/prototype.js"></script>
    <script type="text/javascript" language="javascript" src="../../publico/js/scriptaculous/src/scriptaculous.js"></script>
    <title>Logistica</title>
</head>
<body>

<nav class="navbar nav-bar" role="navigation" aria-label="main navigation">
        <?php require_once "../../templates/navbarPrivado.php";?>
        <div id="navbarBasicExample" class="navbar-menu">
            <aside class="menu menu-container-min">
                <?php require_once "../../templates/dashboard.php";?>
            </aside>
            <div class="navbar-end" style="background: rgba(44, 11, 28, 0.151);">
                <div class="navbar-item" style=" width:100%;">
                    <a class="button-sesion" style=" display:block; margin: 0 auto;width: 100%; text-align: center;">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-grid">
        <div class="menu menu-container-max">
            <?php require "../../templates/dashboard.php";?>
            <?php require_once "../backend/dbconexion.php";?>
        </div>
        <form role="form" method="POST" class="data-container">
        <!--<form method="post" action="../backend/choferes/cargachoferes.php" role="form" class="data-container">-->
                    <fieldset class="data-container-background">DATOS PERSONALES
                        <div class="container-grid-form">
                            <!--<input class="item-input input is-info" type="text" name="dni" placeholder="DNI" required pattern="[0-9]{8}" minlength="1" maxlength="8" >
                            <input class="item-input input is-info" type="text" name="apellido" placeholder="Apellido" required>
                            <input class="item-input input is-info" type="text" name="nombre" placeholder="Nombre" required>
                      
                            <input class="item-input input is-info" type="text" name="direccion" placeholder="Dirección" required>
                            <input class="item-input input is-info" type="text" name="telefono" placeholder="Teléfono" pattern="[0-9]{10}" minlength="1" maxlength="10" required>-->
                            <input class="item-input input is-info" type="text" name="dni" placeholder="DNI" >
                                <span class = "text-danger"> <?php echo $dni_error ?></span>
                            <input class="item-input input is-info" type="text" name="apellido" placeholder="Apellido">
                                <span class = "text-danger"> <?php echo $apellido_error ?></span>
                            <input class="item-input input is-info" type="text" name="nombre" placeholder="Nombre">
                                <span class = "text-danger"> <?php echo $nombre_error ?></span>
                            <input class="item-input input is-info jsrequired" type="text" name="direccion" placeholder="Dirección">
                                <span class = "text-danger"> <?php echo $direccion_error ?></span>
                            <input class="item-input input is-info" type="text" name="telefono" placeholder="Teléfono">
                                <span class = "text-danger"> <?php echo $telefono_error ?></span>
                            <div class="item-input field">
                                <div class="control">
                                    <div id="gruposanguineoChoferes" class="select is-info">
                                    <!--<select id="gruposanguineo" name="gruposanguineo" class="form-control" required>-->
                                        <select id="gruposanguineo" name="gruposanguineo" class="form-control select-notfirst">
                                            <option value="" disabled selected hidden>Grupo Sanguíneo</option>
                                            <option value="0-">0-</option>
                                            <option value="0+">0+</option>
                                            <option value="A-">A-</option>
                                            <option value="A+">A+</option>
                                            <option value="B-">B-</option>
                                            <option value="B+">B+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="AB+">AB+</option>                                         
                                        </select>
                                        <span class = "text-danger"> <?php echo $gruposanguineo_error ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset class="data-container-background">OTROS DATOS 
                        <div class="container-grid-form">
                            <!--<input class="item-input input is-info" type="text" name="polizaseguro" placeholder="Póliza de seguro" required>
                            <input class="item-input input is-info" type="text" name="licencia" placeholder="Licencia" required>-->
                            <input class="item-input input is-info" type="text" name="polizaseguro" placeholder="Póliza de seguro">
                                <span class = "text-danger"> <?php echo $polizaseguro_error ?></span>
                            <input class="item-input input is-info" type="text" name="licencia" placeholder="Licencia">
                                <span class = "text-danger"> <?php echo $licencia_error ?></span>
                            <label for="">Fecha Vencimiento Licencia
                                <!--<input class="item-input input is-info" type="date" name="vencimientocarnet" placeholder="Vencimiento" required>-->
                                <input class="item-input input is-info" type="date" name="vencimientocarnet" placeholder="Vencimiento">
                                    <span class = "text-danger"> <?php echo $vencimientocarnet_error ?></span>
                            </label> 
                        </div>  
                    </fieldset>
                    <br>
                    <div class="field obs data-container-background">
                        <div class="control">
                            <textarea class="textarea is-info" name="observaciones" placeholder="Observaciones"></textarea>
                        </div>
                    </div>

                    <button class="button is-info is-rounded center-button" name="submit" id="submit">Registrar</button>
            </form>
    </div>
    <script src="../../publico/js/nav.js">
    <script src="../../publico/js/jsvalidate.js"></script>
    </script>
</body>
</html>