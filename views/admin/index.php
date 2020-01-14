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
            <li><a href="<?php echo constant('URL'); ?>admin">administrador</a></li>
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
                <th>Nombre</th>
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


    <footer class="footer">

        © Wilson Tovar & Leonardo Galindez 2019

    </footer>
    <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>
</body>

</html>