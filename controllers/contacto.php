<?php
//controlador de errores
class Contacto extends Controller{

    function __construct()
    {
        parent::__construct(); //llamo al constructor de la clase padre controller
        $this->view->mensaje = "";
    }

    function render()
    {
      $this->view->render('contacto/index');
    }
}

?>