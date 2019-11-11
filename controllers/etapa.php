<?php

class Etapa extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        
        $this->view->render('etapa/index');
    }


}

?>