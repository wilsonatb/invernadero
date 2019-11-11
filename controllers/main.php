<?php
//clase Main que es una hija de controller
class Main extends Controller
{
    function __construct()
    {
      parent::__construct();//se manda a llamar al ducnon construct de la clase padre controller
      echo $_SERVER['SERVER_NAME'];
      echo $_SERVER['HTTP_HOST'];
    }

    function render()
    {
      $this->view->render('main/index');
    }

    function saludo()
    {
        echo "<p>Ejecutaste el metodo saludo</p>";
    }
}

?>