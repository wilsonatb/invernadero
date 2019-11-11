<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invernadero</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script|Playfair+Display|Source+Sans+Pro">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/main.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/media.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css">
</head>
<body>

    <div id="main">
        <div id="main-container">
            <div id="main-section">
                <div class="logo">
                    <a href="#"><img src="<?php echo constant('URL'); ?>public/img/logo-unexpo.png" alt=""></a>
                </div>
                    <div id="menu">
                        <ul>
                            <li>
                                <a href="<?php echo constant('URL'); ?>informacion">
                                    <div>
                                        <h1>Información</h1>
                                        <h2>Conoce que hace nuestra Web</h2>
                                        <p>
                                            <a href="<?php echo constant('URL'); ?>informacion" class="btn btn-verde">VER</a>
                                        </p>
                                    </div>
                                </a>                                
                            </li>
                            <li>
                                <a href="<?php echo constant('URL'); ?>login/inicio">
                                    <div>
                                        <h1>Ingresar</h1>
                                        <h2>Es hora de trabajar!!</h2>
                                        <p>
                                            <a href="<?php echo constant('URL'); ?>login" class="btn btn-verde">VER</a>
                                        </p>
                                    </div>
                                </a>                                
                            </li>
                            <li>
                                <a href="<?php echo constant('URL'); ?>contacto">
                                    <div>
                                        <h1>Contacto</h1>
                                        <h2>Resuelve tus dudas</h2>
                                        <p>
                                            <a href="<?php echo constant('URL'); ?>contacto" class="btn btn-verde">VER</a>
                                        </p>
                                    </div>
                                </a>                                
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    
    <footer class="footer">
    
        © Wilson Tovar & Leonardo Galindez 2019

    </footer>  

</body>
</html>