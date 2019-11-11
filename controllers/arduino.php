<?php
//clase Main que es una hija de controller
class Arduino extends Controller
{
    function __construct()
    {
      parent::__construct();//se manda a llamar al ducnon construct de la clase padre controller
      /* $this->view->mensaje = ""; */
      /* echo "<p>Nuevo controlador main</p>"; */
    }

//Este metodo es el encargado de recibir los datos desde el arduino, recibie con un GET y ejecuta las metodos definidos en arduinomodel.php de esta manera se peude recibir y enviar al mismo tiempo sin afetar al resto de la aplicacion Web
    function recibirArduino()
    {

      if(isset($_GET['temp']) && isset($_GET['temp']))
      {
          $this->model->setParametros($_GET['temp'], $_GET['humed']);
          $this->model->envio();
      }

      /* $this->model->getParametros(); */

      $this->model->getConfiguracion();

    }

    function datosGraficarTemp()
    {
      $this->model->getTemp();
    }

    function datosGraficarHumd()
    {
      $this->model->getHumd();
    }

    function datosGraficarAire()
    {
      $this->model->getHumd();
    }

}

?>