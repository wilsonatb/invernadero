<?php

class Admin extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->usuarioActual = "";
    }

    function render()
    {
        $userSession = new UserSession();
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
        }
    }


}

?>