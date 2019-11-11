<?php

/* include_once 'user_session.php'; */

class Logout extends Controller{

    function __construct()
    {
        parent::__construct();
        $userSession = new UserSession();
        $userSession->closeSession();//cierra la session activa
    }

    function render()
    {
      $this->view->render('main/index');
    }

    function cerrarSession()
    {
        $this->view->render('main/index');
    }

}
?>
