<?php
//controlador de errores
use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
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

    function email()
    {
      
      
     // require 'public\PHPMailer-master\src\Exception.php';
     // require 'public\PHPMailer-master\src\PHPMailer.php';
      //require 'public\PHPMailer-master\src\SMTP.php';
      

      if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment']))
      {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];

       // $mail = new PHPMailer(true);

        if ($comment) {
        
         

          $correo2 = "wilsonatb@gmail.com";
          //Enviando CORREO
          $pfw_header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
          $pfw_header .= "From: contacto@invernaderounexpo.dx.am \r\n" .
            'Reply-To: contacto@invernaderounexpo.dx.am'. "\r\n" .
            'X-Mailer: PHP/' . phpversion();
          $pfw_subject = "Mensaje de invernadero unexpo";
          $pfw_email_to = "contacto@invernaderounexpo.dx.am";
          $pfw_message = "$comment";
          @mail($pfw_email_to, $pfw_subject, $pfw_message, $pfw_header);

          //Enviando auto respuesta.
          $pfw_header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
          $pfw_header .= "From: contacto@invernaderounexpo.dx.am \r\n" .
            'Reply-To: contacto@invernaderounexpo.dx.am'. "\r\n" .
            'X-Mailer: PHP/' . phpversion();
          $pfw_subject = "Mensaje de invernadero unexpo";
          $pfw_email_to = "$email";
          $pfw_message = "El mensaje fue enviado correctamente";
          @mail($pfw_email_to, $pfw_subject, $pfw_message, $pfw_header);


            //Server settings
            /* $mail->SMTPDebug = 0;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'wilsonatb@gmail.com';                     // SMTP username
            $mail->Password   = 'wilpingpong';                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to
            
            //Recipients
            $mail->setFrom('wilsonatb@gmail.com', 'Usuario');
            $mail->addAddress('wilsonatb@gmail.com');     // Add a recipien

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Correo Contacto';
            $mail->Body    = 'Nombre: ' . $name . '<br/>Correo: ' . $email . '<br/>' . $comment;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            $this->view->mensaje = 'Mensaje Enviado';
            $this->view->render('contacto/index'); */
        } else
            $this->view->mensaje = "No se pudo enviar el mensaje";
            $this->view->render('contacto/index');
        }

      else
      {
        return;
      }
    }
}

?>