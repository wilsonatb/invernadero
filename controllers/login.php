<?php

class Login extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
        $this->view->usuarioActual = "";
        $this->view->configActual = "";
        $this->view->graficas = "graficaReal";
        /* $userSession = new UserSession(); // se crea un objeto de userSession */
    }

    function render()
    {
        if(isset($_POST['opciones']))
        {
            $this->etapa();
        }else{
            $this->inicio();
        }
        
    }


    function inicio()
    {
      $userSession = new UserSession(); // se crea un objeto de userSession

      if(isset($_SESSION['user'])) //si existe una session
      {
          $this->model->setUser($userSession->getCurrentUser()); //recupera el usuario
          
          $usuario = $this->model->getNombre();
          $this->view->usuarioActual = $usuario;

          if(isset($_POST['opciones']))
          {
              $this->model->setParametros($_POST['opciones']);

              $this->model->insert();

          }
          if(isset($_POST['visualizar']))
          {
            $visualizar = $_POST['visualizar'];
            switch ($visualizar) 
            {
                case "1":
                    $this->view->graficas = 'graficaReal';
                    break;
  
                case "2":               
                    $this->view->graficas = 'graficaDiario';
                    break;

                case "3":               
                    $this->view->graficas = 'graficaMensual';
                    break;
  
                default:
                    $this->view->graficas = 'graficaReal';
                    break;
            }
          }
          /* Peticion para saber los promedios y graficarlos */
          $promedios = $this->model->getPromedioDiario();
          $this->view->promedios = $promedios;
          
          $promedios_mes = $this->model->getPromedioMensual();
          $this->view->promedios_mes = $promedios_mes;
          

          $selected = $this->model->getConfiguracion();
          $this->view->configActual = $selected;

          $this->view->render('home/index');

      }elseif (isset($_POST['username']) && isset($_POST['password'])) //si se envia desde el form datos entra aqui
      {
          $userForm = $_POST['username']; //guarda el username
          $passForm = $_POST['password']; //guarda el password

          if($this->model->userExists($userForm, $passForm)) //si el usuario existe
          {
              $userSession->setCurrentUser($userForm);  //asigna el usuario a userSession
              $this->model->setUser($userForm);  //guarda de la base de datos, en la clase user el username y el nombre

              $usuario = $this->model->getNombre();
              $this->view->usuarioActual = $usuario;

              $selected = $this->model->getConfiguracion();
              $this->view->configActual = $selected;
          
              $this->view->render('home/index');
          }else
          {
              $this->view->mensaje = "Nombre de usuario y/o password es incorrecto";
              $this->view->render('login/index');
          }
      }else
      {
        $this->view->render('login/index');
      }
    }

    function etapa()
    {
        $userSession = new UserSession(); // se crea un objeto de userSession

      if(isset($_SESSION['user'])) //si existe una session
      {
          $this->model->setUser($userSession->getCurrentUser()); //recupera el usuario
          
          $usuario = $this->model->getNombre();
          $this->view->usuarioActual = $usuario;

          $this->view->render('etapa/index');
      }
      else
      {
        $this->view->render('login/index');
      }
    }

    
}


?>