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

    <div id="respuesta" class="center"></div>

    <table class="tabla">
        <thead>
            <tr>
                <th>Id</th>
                <th>Rol</th>
                <th>Nombre y Apellido</th>
                <th>Username</th>
                <th>Contraseña</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody id="tbody-usuarios">
            <?php

            foreach ($this->usuarios as $usuario) {

            ?>
                <tr class="center" id="fila-<?= $usuario->id; ?>">
                    <td><?= $usuario->id; ?></td>
                    <td><?= $usuario->rol; ?></td>
                    <td><?= $usuario->nombre; ?></td>
                    <td><?= $usuario->username; ?></td>
                    <td><?= $usuario->password; ?></td>
                    <td><a href="<?php echo constant('URL') . 'admin/verUsuario/' . $usuario->id; ?>" class="boton__submit editar">Editar</a></td>
                    <td><button class="bEliminar boton__submit eliminar <?php if ($usuario->id == 1) : echo "disabled"; endif ?>" <?php if ($usuario->id == 1) : echo "disabled"; endif ?> data-id="<?= $usuario->id; ?>">Eliminar</button></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

    <form class="formulario" action="<?php echo constant('URL'); ?>admin/registrarUsuario" method="post" autocomplete="off">
        <div>
            <?= $this->mensajeRegistro; ?>
        </div>
        <p>
            <label for="rol" >Rol</label><br>
            <select name="rol" class="rol" required id="">
                <option value="admin">Admin</option> 
                <option value="user" >User</option>
            </select>
        </p>
        <p>
            <label for="nombre">Nombre y Apellido</label><br>
            <input type="text" name="nombre" id="" required onKeyUp="this.value=this.value.toUpperCase();" placeholder="Nombre y Apellido">
        </p>
        <p>
            <label for="username">Username</label><br>
            <input type="text" name="username" id="" required placeholder="Username">
        </p>
        <p>
            <label for="password">Contraseña</label><br>
            <input type="text" name="password" id="" required placeholder="Contraseña">
        </p>
        <p>
            <input type="submit" class="boton__submit" value="Registrar nuevo usuario">
        </p>

    </form>

    <footer class="footer">

        © Wilson Tovar & Leonardo Galindez 2019

    </footer>
    <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>
</body>

</html>