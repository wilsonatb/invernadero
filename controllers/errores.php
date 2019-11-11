<?php
//controlador de errores
class Errores extends Controller{

    function __construct()
    {
        parent::__construct(); //llamo al constructor de la clase padre controller
        $this->view->mensaje = "Hubo un error en la solicutud o no existe la pagina";
        $this->view->render('errores/index');// mando a llamar la vista de errores de views
    }
}

?>
