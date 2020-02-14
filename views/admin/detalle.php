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
        <h1> Bienvenido administrador <?= $this->usuarioActual; ?></h1>
    </section>

    <h1 class="center">Detalles de <?php echo $this->usuario->nombre; ?> </h1>
        <!-- este form envia los datos a el controlador nuevo.php y llama al metodo registrarusuario -->
        <div id="respuesta" class="center"><?php echo $this->mensaje; ?></div>
        <form class="formulario" action="<?php echo constant('URL'); ?>admin/actualizarUsuario" method="post" autocomplete="off">

            <p>
                <label for="id">Id</label><br>
                <input type="text" disabled name="id" value="<?php echo $this->usuario->id; ?>" required>
            </p>
            <p>
                <label for="rol">Rol</label><br>
                <select name="rol" class="rol" required>
                    <option value="admin">Admin</option> 
                    <option value="user" >User</option>
                </select>
            </p>
            <p>
                <label for="nombre">Nombre y Apellido</label><br>
                <input type="text" name="nombre" value="<?php echo $this->usuario->nombre; ?>" onKeyUp="this.value=this.value.toUpperCase();" required>
            </p>
            <p>
                <label for="username">Username</label><br>
                <input type="text" name="username" value="<?php echo $this->usuario->username; ?>" required>
            </p>
            <p>
                <label for="password">Contraseña</label><br>
                <input type="text" name="password" value="<?php echo $this->usuario->password; ?>" required>
            </p>
            <p>
                <input type="submit" class="boton__submit" value="Actualizar usuario">
            </p>
            
        </form>

    <footer class="footer">

        © Wilson Tovar & Leonardo Galindez 2019

    </footer>
    <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>
</body>

</html>