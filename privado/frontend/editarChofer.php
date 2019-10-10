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
            <?php 
            require "../../templates/dashboard.php";
            require_once "../backend/dbconexion.php";
            ?>

        </div>

        <?php 
        $dni = $_GET["dni"];
        $query = "SELECT * FROM chofer WHERE dni='$dni'";
        $result = mysqli_query($link, $query);
        
        while ($reg = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>

        <form method="post" action="../backend/choferes/modificachofer.php?id=<?php echo $reg['dni']; ?>" role="form" class="data-container">
            <fieldset class="data-container-background">DATOS PERSONALES
                <div class="container-grid-form">        
                    <input class="item-input input is-info" value="<?php echo $reg["dni"] ?>" type="text" name="dni" placeholder="DNI" >
                    <input class="item-input input is-info" value="<?php echo $reg["apellido"] ?>" type="text" name="apellido" placeholder="Apellido">
                    <input class="item-input input is-info" value="<?php echo $reg["nombre"] ?>" type="text" name="nombre" placeholder="Nombre">
                      
                    <input class="item-input input is-info jsrequired" value="<?php echo $reg["direccion"] ?>" type="text" name="direccion" placeholder="Dirección">
                    <input class="item-input input is-info" value="<?php echo $reg["telefono"] ?>" type="text" name="telefono" placeholder="Teléfono">
                    <div class="item-input field">
                        <div class="control">
                            <div id="gruposanguineoChoferes" class="select is-info">
                                <select id="gruposanguineo" value="<?php echo $reg["gruposanguineo"] ?>" name="gruposanguineo" class="form-control select-notfirst">
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
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <br>
            <fieldset class="data-container-background">OTROS DATOS 
                <div class="container-grid-form"><input class="item-input input is-info" value="<?php echo $reg["polizaseguro"] ?>" type="text" name="polizaseguro" placeholder="Póliza de seguro">
                    <input class="item-input input is-info" value="<?php echo $reg["licencia"] ?>" type="text" name="licencia" placeholder="Licencia">
                    <label for="">Fecha Vencimiento Licencia
                        <input class="item-input input is-info" value="<?php echo $reg["vencimientocarnet"] ?>" type="date" name="vencimientocarnet" placeholder="Vencimiento">
                    </label> 
                </div>  
            </fieldset>
            <br>
            <div class="field obs data-container-background">
                <div class="control">
                    <textarea class="textarea is-info" value="<?php echo $reg["observaciones"] ?>" type="text" name="observaciones" placeholder="Observaciones"></textarea>
                </div>
            </div>

            <div id="botonesLogistica" style="text-align:center">
                <input class="button is-info is-rounded" name="Guardar" type="submit" id="submit" name="submit" value="Guardar"/>
                <input class="button is-danger is-rounded" name="btncancelar" id="btncancelar" onClick="history.back()" value="Cancelar"/>
            </div>

        </form>
        <?php }?>
    </div>

    <script src="../../publico/js/nav.js"></script>
    <script src="../../publico/js/jsvalidate.js"></script>

</body>
</html>