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
            <?php require "../../templates/dashboard.php"?>
        </div>
        <form action="" class="data-container">
            <div class="data-container-background">
                    <fieldset class="" > DATOS VIAJE
                        <div class="container-grid-form">
                            <input class="item-input input is-info" type="text" placeholder="Codigo expediente" required pattern="[0-9]{8}" minlength="1" maxlength="8" >
                            <input class="item-input input is-info" type="text" placeholder="Numero orden" required>
                            <input class="item-input input is-info" type="text" placeholder="Destino provincia" required>
                            <input class="item-input input is-info" type="text" placeholder="Destino localidad" required>
                            <input class="item-input input is-info" type="text" placeholder="Sede origen" required>
                            <input class="item-input input is-info" type="text" placeholder="Distancia estimada" required>
                            <label for="">Año expediente
                                <input class="item-input input is-info" type="date" placeholder="Vencimiento" required>
                            </label> 
                            <label for="">Fecha salida
                                <input class="item-input input is-info" type="date" placeholder="Vencimiento" required>
                            </label> 
                            <label for="">Fecha regreso
                                <input class="item-input input is-info" type="date" placeholder="Vencimiento" required>
                            </label> 
                        </div>
                    </fieldset> 
                    <div class="field obs">
                        <div class="control">
                            <textarea class="textarea is-info" placeholder="Motivo del viaje"></textarea>
                        </div>
                    </div>
                    <div class="field obs">
                        <div class="control">
                            <textarea class="textarea is-info" placeholder="Observaciones"></textarea>
                        </div>
                    </div>
            </div>
            <br>
            <div class="data-container-background">
                    <fieldset class="" >PRESUPUESTO
                        <div class="container-grid-form">
                            <input class="item-input input is-info" type="number" placeholder="Total" required pattern="[0-9]{8}" minlength="1" maxlength="8" >
                            <input class="item-input input is-info" type="number" placeholder="Combustible" required>
                            <input class="item-input input is-info" type="number" placeholder="Imprevistos" required>
                            <input class="item-input input is-info" type="number" placeholder="Lavado" required>
                            <input class="item-input input is-info" type="number" placeholder="Peaje" required>
                            <input class="item-input input is-info" type="number" placeholder="Estacionamiento" required>
                            <input class="item-input input is-info" type="number" placeholder="Viaticos" required>
                        </div>
                    </fieldset> 
                    <div class="field obs">
                        <div class="control">
                            <textarea class="textarea is-info" placeholder="Observaciones"></textarea>
                        </div>
                    </div>
            </div>
            <br>
            <div class="data-container-background">
                    <fieldset class="" >EVENTO
                        <div class="container-grid-form">
                            <input class="item-input input is-info" type="text" placeholder="Titulo" required>
                            <input class="item-input input is-info" type="text" placeholder="Finalidad del evento" required>
                            <label for="">Fecha inicio
                                <input class="item-input input is-info" type="date" placeholder="Vencimiento" required>
                            </label> 
                            <label for="">Fecha fin
                                <input class="item-input input is-info" type="date" placeholder="Vencimiento" required>
                            </label> 
                        </div>
                    </fieldset>
                    <div class="field obs">
                        <div class="control">
                            <textarea class="textarea is-info" placeholder="Descripcion del evento"></textarea>
                        </div>
                    </div> 
                    <div class="field obs">
                        <div class="control">
                            <textarea class="textarea is-info" placeholder="Observaciones"></textarea>
                        </div>
                    </div>
            </div>
                    <button class="button is-info is-rounded center-button">Registrar</button>
            </form>
    </div>
    </div>
    <script src="../../publico/js/nav.js">
    </script>
</body>
</html>