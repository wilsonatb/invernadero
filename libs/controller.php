<?php
//clase de controoller
class Controller
{
    function __construct()
    {
        /* echo "<p>Controlador base</p>"; */
        $this->view = new View(); //creo un nuevo objeto llamado view de la clase VIew
    }
//con el metodo loadModel se escoge el modelo dentro de la carpeta models y tambien si existe ese archivo se crea un objeto del modelo seleccionado
    function loadModel($model)
    {
        $url = 'models/' . $model . 'model.php';

        if(file_exists($url))
        {
            require $url;

            $modelName = $model . 'Model';
            $this->model = new $modelName();
        }
    }
}

?>