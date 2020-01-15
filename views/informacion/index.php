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
            <a href="#" class="point p0"><div>+</div></a>
            <a href="#" class="point p1"><div>+</div></a>
            <a href="#" class="point p2"><div>+</div></a>
            <a href="#" class="point p3"><div>+</div></a>
            <a href="#" class="point p4"><div>+</div></a>
        </div>

        <div id="points-info">
            <div>
                <h1>Lorem ipsum dolor sit amet</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel recusandae provident pariatur explicabo nostrum sed vero quidem placeat beatae expedita, nemo sint voluptate distinctio animi maxime ut nihil ad sunt.</p>

                <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

                <p><a href="#" class="btn btn-verde close-btn">Cerrar</a></p>
            </div>
            <div>
                <h1>Lorem ipsum dolor sit amet</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel recusandae provident pariatur explicabo nostrum sed vero quidem placeat beatae expedita, nemo sint voluptate distinctio animi maxime ut nihil ad sunt.</p>

                <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

                <p><a href="#" class="btn btn-verde close-btn">Cerrar</a></p>
            </div>
            <div>
                <h1>Lorem ipsum dolor sit amet</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel recusandae provident pariatur explicabo nostrum sed vero quidem placeat beatae expedita, nemo sint voluptate distinctio animi maxime ut nihil ad sunt.</p>

                <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

                <p><a href="#" class="btn btn-verde close-btn">Cerrar</a></p>
            </div>
            <div>
                <h1>Lorem ipsum dolor sit amet</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel recusandae provident pariatur explicabo nostrum sed vero quidem placeat beatae expedita, nemo sint voluptate distinctio animi maxime ut nihil ad sunt.</p>

                <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

                <p><a href="#" class="btn btn-verde close-btn">Cerrar</a></p>
            </div>
            <div>
                <h1>Lorem ipsum dolor sit amet</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel recusandae provident pariatur explicabo nostrum sed vero quidem placeat beatae expedita, nemo sint voluptate distinctio animi maxime ut nihil ad sunt.</p>

                <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

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
        $(function(){
        $(".point").on("click", function(){
            var i = $(this).index();

            $("#points-info div").hide();
            $("#points-info").fadeIn();
            $("#points-info div").eq(i).show();
        });

        $(".close-btn").on("click", function()
        {
            $("#points-info").fadeOut();
        });
    });
    </script>  
<footer class="footer">
    
    © Wilson Tovar & Leonardo Galindez 2019

</footer>  
</body>
</html>