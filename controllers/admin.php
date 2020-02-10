<?php

class Admin extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->usuarioActual = "";
        $this->view->mensajeRegistro = "";
        $this->view->usuarios = [];
        
    }

    function render()
    {
        $userSession = new UserSession(); // se crea un objeto de userSession
        $nombre = $userSession->getName();
        $this->view->usuarioActual = $nombre;

        $rol = $userSession->getRol();

        $usuarios = $this->model->get();
        $this->view->usuarios = $usuarios;
        /* $this->view->render('admin/index'); */
        
        if(isset($nombre))
        {
            switch ($rol) {
                case 'admin':
                    $this->view->render('admin/index');
                    break;
                
                case 'user':
                    echo "<script languaje='Javascript'>
                    alert('¡No tienes permiso!');
                    window.location.replace('http://localhost/MVCnuevo/login/inicio');
                    </script>";
                    break;
            }
        }else {
            $this->view->render('main/index');
        }
    }

    function verUsuario($param = null)
    {
        $userSession = new UserSession(); // se crea un objeto de userSession
        $nombre = $userSession->getName();
        $this->view->usuarioActual = $nombre;
        
        $idUsuario = $param[0];
        $usuario = $this->model->getById($idUsuario);
       
        $_SESSION['id_verUsuario'] = $usuario->id;       
        $this->view->usuario = $usuario;
        $this->view->mensaje = "";
        $this->view->render('admin/detalle');
    }

    function actualizarUsuario()
    {
        $userSession = new UserSession(); // se crea un objeto de userSession
        $nombre = $userSession->getName();
        $this->view->usuarioActual = $nombre;

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

    function registrarUsuario()
    {
        $rol = $_POST['rol'];
        $nombre = $_POST['nombre'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $mensaje = "";

        if($this->model->insert(['rol' => $rol, 'nombre' => $nombre, 'username' => $username, 'password' => $password]))
        {
            $mensaje = "Nuevo usuario creado";
        }
        else
        {
            $mensaje = "El usuario ya existe";
        }

        $this->view->mensajeRegistro = $mensaje;
        $this->render();//llamamos a la vista

        //se hace la validacion de que el metodo funciono y se muestra el mensaje, en caso de que no funcionara dentro de el metodo insert esta un mensaje de errror 
    }
}

?>