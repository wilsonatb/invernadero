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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script|Playfair+Display|Source+Sans+Pro">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/informacion.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/media.css">
</head>

<body>
    <header class="header">
        <a href="<?php echo constant('URL'); ?>main" class="btn btn-verde">VOLVER</a>
    </header>
    <div id="main-container">
        <div id="points-container">
            <a href="#" class="point p0">
                <div>+</div>
            </a>
            <a href="#" class="point p1">
                <div>+</div>
            </a>
            <a href="#" class="point p2">
                <div>+</div>
            </a>
            <a href="#" class="point p3">
                <div>+</div>
            </a>
            <a href="#" class="point p4">
                <div>+</div>
            </a>
        </div>

        <div id="points-info">
            <div>
                <h1><strong>El pimentón</strong></h1>
                <p style='text-align: justify;'>El Capsicum Annum también conocido como pimentón o pimiento, según la ubicación geografía principalmente en Latinoamérica, es una planta perteneciente a la familia Solanaceae y al género Capsicum. Entre todas las plantas pertenecientes al género Capsicum este es el de mayor importancia económica debido al número de usos que posee, principal para la alimentación humana como hortaliza de acompañamiento o condimento-colorante.</p>
                <img src="public\img\pimentones.png" alt="pimentones" style="width: 30%">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                
                <p><a href="#" class="btn btn-verde close-btn">Cerrar</a></p>
            </div>
            <div>
                <h1>1Lorem ipsum dolor sit amet</h1>
                <p style='text-align: justify;'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel recusandae provident pariatur explicabo nostrum sed vero quidem placeat beatae expedita, nemo sint voluptate distinctio animi maxime ut nihil ad sunt.</p>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                <p><a href="#" class="btn btn-verde close-btn">Cerrar</a></p>
            </div>
            <div>
                <h1><strong>Invernadero</strong></h1>
                <p style='text-align: justify;'>Un invernadero es un lugar cerrado, estático y accesible a pie que se destina al cultivo de plantas, tanto decorativas como huertícolas, para brindarles protección de diversos factores como distintas temperaturas en diversas épocas del año u otros factores del intemperie. Habitualmente está dotado de una cubierta exterior translúcida de vidrio o de plástico, que permite el control de la temperatura, la humedad y otros factores ambientales, creando así un microclima favorable para el desarrollo de dichas plantas.
                Las ventajas de hacer uso de un invernadero son:</p>
                <ul style="width: 47%;text-align: start;margin: 0 auto;">
                    <li>Precocidad en los frutos.</li>
                    <li>Aumento de calidad y rendimiento.</li>
                    <li>Producción fuera de época.</li>
                    <li>Ahorro de agua y fertilizantes.</li>
                    <li>Mejora del control de insectos y enfermedades.</li>
                    <li>Posibilidad de obtener más de un ciclo de cultivo al año.</li>
                </ul>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                <p><a href="#" class="btn btn-verde close-btn">Cerrar</a></p>
            </div>
            <div>
            <h1><strong>El pimentón</strong></h1>
                <p style='text-align: justify;'>El Capsicum Annum también conocido como pimentón o pimiento, según la ubicación geografía principalmente en Latinoamérica, es una planta perteneciente a la familia Solanaceae y al género Capsicum. Entre todas las plantas pertenecientes al género Capsicum este es el de mayor importancia económica debido al número de usos que posee, principal para la alimentación humana como hortaliza de acompañamiento o condimento-colorante.</p>
                <img src="public\img\pimentones.png" alt="pimentones" style="width: 24%">

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                <p><a href="#" class="btn btn-verde close-btn">Cerrar</a></p>
            </div>
            <div>
                <h1>4Lorem ipsum dolor sit amet</h1>
                <p style='text-align: justify;'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel recusandae provident pariatur explicabo nostrum sed vero quidem placeat beatae expedita, nemo sint voluptate distinctio animi maxime ut nihil ad sunt.</p>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                <p><a href="#" class="btn btn-verde close-btn">Cerrar</a></p>
            </div>
        </div>

        <div id="historia-section" class="bg-pueblo">
            <div class="logo">
                <a href="<?php echo constant('URL'); ?>main"><img src="<?php echo constant('URL'); ?>public/img/logo-unexpo.png" alt=""></a>
            </div>
            <div id="menu">
                <h1>Descubre</h1>
                <h2>Todo tu potencial!!</h2>
            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script>
        $(function() {
            $(".point").on("click", function() {
                var i = $(this).index();

                $("#points-info div").hide();
                $("#points-info").fadeIn();
                $("#points-info div").eq(i).show();
            });

            $(".close-btn").on("click", function() {
                $("#points-info").fadeOut();
            });
        });
    </script>
    <footer class="footer">

        © Wilson Tovar & Leonardo Galindez 2019

    </footer>
</body>

</html>