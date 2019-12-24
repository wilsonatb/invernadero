<?php

require_once 'controllers/errores.php';

class App
{
    function __construct()
    {
        /* echo "<p>Nueva App</p>"; */

        $url = isset($_GET['url']) ? $_GET['url']: "main"; //obtengo la url y si no se coloca nada se redirige a main
        $url = rtrim($url, '/'); //quito los / que esten al inicio o al final
        $url = explode('/', $url); //separo en arrays el texto cuando encuentre un /
       /*  var_dump($url);  */

        $archivoController = 'controllers/' . $url[0] . '.php'; //indica que archivo de ocntrolador va a usar

        if (file_exists($archivoController))
        {
            require_once $archivoController;

            //inicializa el controlador y caga el modelo
            $controller = new $url[0];//crea el objeto del controlador seleccionado
            $controller->loadModel($url[0]);

            $nparam = sizeof($url);//tiene el numero de elemenos del arreglo

            if($nparam >1)
            {
                if($nparam > 2)
                {
                    $param = [];
                    for($i = 2; $i < $nparam; $i++ )
                    {
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }
                else
                {
                    $controller->{$url[1]}(); // para que lo vea como un metodo y dentro del metodo debe estar el llamado a otro metodo llamado render
                }
            }else{
                $controller->render();
            }
        }
        else
        {
            $controller = new Errores();
        }


    }
}


?>
