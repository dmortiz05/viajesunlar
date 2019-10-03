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
    <link rel="icon" href="https://graduados.unlar.edu.ar/wp-content/uploads/2018/04/cropped-escudo_unlar.png">
    <link rel="stylesheet" href="../../publico/css/bulma.min.css">
    <link rel="stylesheet" href="../../publico/css/styleNavBar.css">
    <link rel="stylesheet" href="../../publico/css/styleGrid.css">
    <link rel="stylesheet" href="../../publico/css/normalize.css">
    <link rel="stylesheet" href="../../publico/css/styleElements.css">
    <link rel="stylesheet" href="../../publico/css/styleNavDash.css">
    <link rel="stylesheet" href="../../publico/css/logistica.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9c18248300.js"></script>
    <title>Logistica</title>
</head>
<body>
    <nav class="navbar nav-bar" role="navigation" aria-label="main navigation">
        <?php require_once "../../templates/navbarPrivado.php"?>
        <div id="navbarBasicExample" class="navbar-menu">
            <aside class="menu menu-container-min">
                <?php require_once"../../templates/dashboard.php"?>
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
            <?php require_once "../logisticas/dbconexion.php";?>
        </div>
        <form method="post" action="../logisticas/cargausuario.php" role="form" class="data-container">
                    <fieldset class="data-container-background">DATOS DE LA CUENTA
                        <div class="container-grid-form">
                            <input class="item-input input is-info" type="text" name="nickname" placeholder="Usuario" required>
                            <input class="item-input input is-info" type="text" name="contrasenia" placeholder="Contraseña" required>
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
    </div>
    <script src="../../publico/js/nav.js">
    </script>
</body>
</html>