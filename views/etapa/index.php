<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invernadero Unexpo | Invernadero automatizado</title>
    <meta name="description" content="Invernadero Unexpo es un sitio Web destinado al control y monitorización de un invernadero de
    pimenton">
    <meta name="author" content="Wilson Abelardo Tovar">
    <meta name="keywords" content="unexpo,electrónica,ingeniería,invernadero online,Barquisimeto,pimenton,unexpo barquisimeto,control,monitorizacion">
    <meta name="robots" content="index,follow">

    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/etapa.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/media.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/normalize.css">
</head>

<body>
    <div class="logo-home">
        <a href="<?php echo constant('URL'); ?>main"><img src="<?php echo constant('URL'); ?>public/img/logo-unexpo.png" alt=""></a>
    </div>

    <div id="menu">
        <ul>
            <li><a href="<?php echo constant('URL'); ?>login/inicio">Inicio</a></li>
            <li><a href="<?php echo constant('URL'); ?>admin">Administrador</a></li>
            <li><a href="<?php echo constant('URL'); ?>logout">Cerrar sesión</a></li>
        </ul>
    </div>

    <section>
        <h1 style="text-align: center"><strong>Selecciona una etapa</strong></h1>
    </section>



    <form action="<?php echo constant('URL'); ?>login/inicio" method="post">
        <div class="grid-etapas">
            <div id="container1" class=grid-item style="text-align: center;">

                <h1><input type="radio" name="opciones" value="Germinación" id="Germinación">
                    <label for="Germinación">Germinación</label>
                </h1>
                <ul>
                    <li>Temperatura: 20ºC-26ºC</li>
                    <li>Humedad Relativa: 40%-65%</li>
                    <li>Humedad Suelo: 30%-50%</li>
                </ul>
                <img class="img" src="<?php echo constant('URL'); ?>public\img\semilla.jpg" alt="germinacion">
            </div>

            <div id="container2" class=grid-item style="text-align: center;">

                <h1><input type="radio" name="opciones" value="Crecimiento vegetativo" id="Crecimiento vegetativo">
                    <label for="Crecimiento vegetativo">Crecimiento vegetativo</label>
                </h1>
                <ul>
                    <li>Temperatura: 23ºC-26ºC</li>
                    <li>Humedad Relativa: 50%-70%</li>
                    <li>Humedad Suelo: 30%-70%</li>
                </ul>
                <img class="img"src="<?php echo constant('URL'); ?>public\img\crecimiento.jpg" alt="crecimiento">
            </div>

            <div id="container3" class=grid-item style="text-align: center;">

                <h1><input type="radio" name="opciones" value="Floración y Fructificación" id="Floración y Fructificación"> 
                    <label for="Floración y Fructificación">Floración y Fructificación</label>
                </h1>
                <ul>
                    <li>Temperatura: 25ºC-28ºC</li>
                    <li>Humedad Relativa: 50%-70%</li>
                    <li>Humedad Suelo: 50-70%</li>
                </ul>
                <img class="img" src="<?php echo constant('URL'); ?>public\img\floracion.jpg" alt="floracion">
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