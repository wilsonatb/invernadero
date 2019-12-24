
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <title>Ingresar</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/media.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>public/css/login.css">
</head>
<body>
    
    <header class="header">
      <a href="<?php echo constant('URL'); ?>main" class="btn btn-verde">VOLVER</a>
    </header>

    <div id="main-container">
        <div id="main-section-login">
            <div id="main">
                <div class="logo">
                    <a href="<?php echo constant('URL'); ?>main"><img src="<?php echo constant('URL'); ?>public/img/logo-unexpo.png" alt=""></a>
                </div>
                
                <form action="<?php echo constant('URL'); ?>login/inicio" method="POST">
                    <?php
                        if(isset($this->mensaje)){
                            echo $this->mensaje;
                        }
                    ?>
                    <fieldset>
                        <legend>Login</legend>
                        <input type="text" name="username" placeholder="Username" autocomplete="on" required="on">
                        <input type="password" name="password" placeholder="Password">
                        <input type="submit" name="" value="Ingresar">
                    </fieldset>
                </form>
                
            </div>
        </div>
    </div>
    
    <footer class="footer">
    
        © Wilson Tovar & Leonardo Galindez 2019

    </footer>  
    
</body>
</html>

 