<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script|Playfair+Display|Source+Sans+Pro">

    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/home.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/media.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/normalize.css">
    <link type="text/css" href="<?php echo constant('URL'); ?>public\css\ui-darkness\jquery-ui-1.8.23.custom.css" rel="Stylesheet" />



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
        <h1>Bienvenido <?php echo $this->usuarioActual; ?>, la etapa selecionada es <?php echo $this->configActual; ?> </h1>
    </section>

    <div class="grid-submenu">


        <a href="<?php echo constant('URL'); ?>login/etapa" class="boton__submit" class=grid-item id="btn-etapa">Seleciona una Etapa</a>


        <form action="<?php echo constant('URL'); ?>login/inicio" class=grid-item method="POST">
            <span>Visualizar </span>
            <select name="visualizar" class="box-opcion">
                <option value="1">Tiempo Real</option>
                <option value="2">Diario</option>
                <option value="3">Mensual</option>
            </select>
            <input type="submit" value="Seleccionar" class="boton__submit">
        </form>
    </div>

    <script src="<?php echo constant('URL'); ?>public/js/highcharts.js"></script>
    <script src="<?php echo constant('URL'); ?>public/js/exporting.js"></script>
    <script src="<?php echo constant('URL'); ?>public/js/dark-unica.js"></script>

    <div class="grid-chart">

        <div id="container1" class=grid-item></div>
        <div id="container2" class=grid-item></div>
        <div id="container3" class=grid-item></div>

    </div>

    <?php
    include 'libs/' . $this->graficas . '.php';
    ?>

    <script src="<?php echo constant('URL'); ?>public\js\jquery-1.8.0.min.js"></script>
    <script src="<?php echo constant('URL'); ?>public/js/jquery-ui-1.8.23.custom.min.js"></script>
    <script src="<?php echo constant('URL'); ?>public/js/jquery.ui.datepicker-es.js"></script>




    <footer class="footer">

        © Wilson Tovar & Leonardo Galindez 2019

    </footer>

</body>

</html>