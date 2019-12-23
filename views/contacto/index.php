<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invernadero</title>

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
    <form id="contact" action="" method="post">
        <h3>Contactanos!!</h3>
        
        <fieldset>
        <input placeholder="Tu nombre" type="text" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
        <input placeholder="Tu Email" type="email" tabindex="2" required>
        </fieldset>
        <fieldset>
        <input placeholder="Número telf (opcional)" type="tel" tabindex="3" required>
        </fieldset>
        <fieldset>
        <input placeholder="Tu pagina Web (opcional)" type="url" tabindex="4" required>
        </fieldset>
        <fieldset>
        <textarea placeholder="Escribie tu mensaje aqui..." tabindex="5" required></textarea>
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