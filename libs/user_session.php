<?php

class UserSession
{
    public function __construct()
    {
        session_set_cookie_params(60*60*24);//se mantiene la session x 1 dia
        session_start(); //Iniciar una nueva sesión o reanudar la existente
    }

    public function setCurrentUser($user) //setea el usuario de la session
    {
        $_SESSION['user'] = $user;
    }

    public function setName($name)
    {
        $_SESSION['nombre'] = $name;
    }

    public function getCurrentUser() //retorna el usuario de la session
    {
        return $_SESSION['user'];
    }

    public function getName() //retorna el usuario de la session
    {
        return $_SESSION['nombre'];
    }

    public function closeSession()
    {
        session_unset();
        session_destroy();
    }
}

 ?>