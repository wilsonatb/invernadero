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

    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/media.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/contacto.css">
</head>
<body>

    <header class="header">
      <a href="<?php echo constant('URL'); ?>main" class="btn btn-verde">VOLVER</a>
    </header>

    <div class="logo">
        <a href="<?php echo constant('URL'); ?>main"><img src="<?php echo constant('URL'); ?>public/img/logo-unexpo.png" alt=""></a>
    </div>
    <div class="container">  
    <form id="contact" action="<?php echo constant('URL'); ?>contacto/email" method="post">
        <h3>¡Contactanos!</h3>
        <h3>
            <?php
                if(isset($this->mensaje)){
                    echo $this->mensaje;
                }
            ?>
        </h3>
        
        <fieldset>
        <input name="name" placeholder="Tu nombre" type="text" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
        <input name="email" placeholder="Tu Email" type="email" tabindex="2" required>
        </fieldset>
        <fieldset>
        <input placeholder="Número telf (opcional)" type="tel" tabindex="3">
        </fieldset>
        <fieldset>
        <input placeholder="Tu pagina Web (opcional)" type="url" tabindex="4">
        </fieldset>
        <fieldset>
        <textarea name="comment" placeholder="Escribie tu mensaje aqui..." tabindex="5" required></textarea>
        </fieldset>
        <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando">Enviar</button>
        </fieldset>
        
    </form>
    </div>

    <footer class="footer">
    
        © Wilson Tovar & Leonardo Galindez 2019

    </footer>  
</body>
</html>