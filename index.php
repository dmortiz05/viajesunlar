<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <title>Parque Automotor</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" type="text/css" href="semantic/semantic.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="semantic/semantic.min.js"></script>
        <link rel="icon" type="image/x-icon" href="/logo-audired.jpg">
    </head>

    <body>
        <div class="ui container">
            <div class="ui padded grid">
                <div class="centered row">
                    <div class="six wide computer sixteen wide movile column">
                        <div class="ui huge centered header">
                            <img class="ui big image" src="/logo-audired.jpg">
                            <div class="content">
                                Parque Automotor
                            </div>
                        </div>
                        <div class="ui placeholder segment">
                            <form class="ui form">
                                <!--Encabezado con logo y nombre de la empresa-->
                                <!--Campo usuario-->
                                <div class="field">
                                    <label>Usuario</label>
                                    <div class="ui left icon fluid input">
                                        <input type="text" placeholder="Usuario">
                                        <i class="user icon"></i>
                                    </div> 
                                </div>
                                <!--Campo contraseña-->
                                <div class="field">
                                    <label>Contraseña</label>
                                    <div class="ui left icon fluid input">
                                        <input type="password" placeholder="Contraseña">
                                        <i class="lock icon"></i>
                                    </div>
                                </div>
                                <!--Botones-->
                                <br>
                                <div class="ui blue submit button">Ingresar</div>
                                <br>
                                <div>
                                    <a href="">Recuperar contraseña</a>
                                </div>
                            </form>

                        </div>
                        
                        <!--Separa el login de los datos de contacto-->
                        <div class="ui fitted divider"></div>

                        <div class="ui basic segment"> <!--Labels datos de contacto-->
                            <div class="ui center aligned blue header"> Contacto </div>
                            <div class="ui center aligned grid">
                                <div class="eight wide computer sixteen wide movile column">
                                    <a href="tel:0810-345-2834">
                                        <i class="big square phone icon"></i>
                                    </a><br>
                                    <!--<strong>0810-345-AUDI (2834)</strong>-->
                                </div>
                                <div class="eight wide computer sixteen wide movile column">
                                    <i class="big square green whatsapp icon"></i>
                                    <br>
                                    <!--<strong>+54 11 4446 9327</strong>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    <script type="text/javascript">
        $(function(){
            
        });
    </script>
</html>
