<?php

class Admin extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->usuarioActual = "";
        
        $this->view->usuarios = [];
    }

    function render()
    {
        $userSession = new UserSession(); // se crea un objeto de userSession
        $nombre = $userSession->getName();
        $this->view->usuarioActual = $nombre;

        $usuarios = $this->model->get();
        $this->view->usuarios = $usuarios;
        $this->view->render('admin/index');
        /* $userSession = new UserSession();
        $user = $userSession->getCurrentUser();
        if(isset($user[1]))
        {
            switch ($user[1]) {
                case 1:
                    $this->view->render('admin/index');
                    break;
                
                case 2:
                    $this->view->render('home/index');
                    break;
            }
        } */
    }

    function verUsuario($param = null)
    {
        $idUsuario = $param[0];
        $usuario = $this->model->getById($idUsuario);
       
        session_start();
        $_SESSION['id_verUsuario'] = $usuario->id;       
        $this->view->usuario = $usuario;
        $this->view->mensaje = "";
        $this->view->render('admin/detalle');
    }

    function actualizarusuario()
    {
        session_start(); //para evitar que el usuaria haga algum cambio el valor es sacado de una session
        $id = $_SESSION['id_verUsuario'];
        $rol       = $_POST['rol'];
        $nombre    = $_POST['nombre'];        
        $username  = $_POST['username'];
        $password  = $_POST['password'];

        unset($_SESSION['id_verUsuario']);

        if($this->model->update(['id' => $id, 'rol' => $rol, 'nombre' => $nombre, 'username' => $username, 'password' => $password,]))
        {
            //actualizar usuario exito    
            $usuario = new usuario();
            $usuario->id = $id;
            $usuario->rol = $rol;
            $usuario->nombre = $nombre;
            $usuario->username = $username;
            $usuario->password = $password;

            $this->view->usuario = $usuario;
            $this->view->mensaje = "Usuario actualizado correctamente";

        }else {
            //error
            $this->view->mensaje = "No se pudo actualizar el usuario";
        }

        $this->view->render('admin/detalle');
    }

    function eliminarusuario($param)
    {
        $id = $param[0];

        if($this->model->delete($id))
        {
            //$this->view->mensaje = "usuario elminado correctamente";
            $mensaje = "Usuario eliminado correctamente";

        }else {
            //error
            //$this->view->mensaje = "No se pudo eliminar el usuario";
            $mensaje = "No se pudo elminar el usuario";
        }

        //$this->render();

        echo $mensaje;
    }


}

?>