<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script|Playfair+Display|Source+Sans+Pro"> -->
    
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/etapa.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/media.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/normalize.css">
</head>
<body>
    <div class="logo-home">
        <a href="#"><img src="<?php echo constant('URL'); ?>public/img/logo-unexpo.png" alt=""></a>
    </div>
    
    <div id="menu">       
         <ul>
            <li><a href="<?php echo constant('URL'); ?>login/inicio">Inicio</a></li>
            <li><a href="<?php echo constant('URL'); ?>consulta">Ayuda</a></li>
            <li><a href="<?php echo constant('URL'); ?>logout">Cerrar sesión</a></li>
        </ul>
    </div>

    <section>
        <h1> Selecciona una etapa</h1>
    </section>

    
    
    <form action="<?php echo constant('URL'); ?>login/inicio" method="post">
        <div class="grid-etapas">
            <div id="container1" class=grid-item>
                            
                    <h1><input type="radio" name="opciones" value="Germinación"> Germinación</h1>
                    <ul>
                        <li>Temperatura: 26ºC</li>
                        <li>Humedad Relativa: 60%</li>
                        <li>Humedad Suelo: 60%</li>
                    </ul>            
            </div>

            <div id="container2" class=grid-item>
                    
                    <h1><input type="radio" name="opciones" value="Crecimiento vegetativo"> Crecimiento vegetativo</h1>
                    <ul>
                        <li>Temperatura: 26ºC</li>
                        <li>Humedad Relativa: 60%</li>
                        <li>Humedad Suelo: 60%</li>
                    </ul>
                    
            </div>

            <div id="container3" class=grid-item>
                    
                    <h1><input type="radio" name="opciones" value="Floración y Fructificación"> Floración y Fructificación</h1>
                    <ul>
                        <li>Temperatura: 26ºC</li>
                        <li>Humedad Relativa: 60%</li>
                        <li>Humedad Suelo: 60%</li>
                    </ul>
                    
            </div>
        </div>

    <div class="boton__etapas">
        <input type="submit" value="Seleccionar" class="boton__submit">
    </div>
    
  </form>
    
    
    

    <footer class="footer">
    
        © Wilson Tovar & Leonardo Galindez 2019

    </footer> 

</body>
</html>