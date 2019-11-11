<?php

class Informacion extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
      $this->view->render('informacion/index');
    }
}

?>