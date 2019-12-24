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
      
      
      require 'public\PHPMailer-master\src\Exception.php';
      require 'public\PHPMailer-master\src\PHPMailer.php';
      require 'public\PHPMailer-master\src\SMTP.php';
      

      if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment']))
      {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'wilsonatb@gmail.com';                     // SMTP username
            $mail->Password   = 'wilpingpong';                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('wilsonatb@gmail.com', 'Usuario');
            $mail->addAddress('wilsonatb@gmail.com');     // Add a recipient
          //  $mail->addAddress('wilsonatb@hotmail.com');               // Name is optional
          //  $mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
          //  $mail->addBCC('bcc@example.com');

            // Attachments
          //  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
          //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Correo Contacto';
            $mail->Body    = 'Nombre: ' . $name . '<br/>Correo: ' . $email . '<br/>' . $comment;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Mensaje Enviado';
            $this->view->render('main/index');
        } catch (Exception $e) {
            echo "No se pudo enviar el mensaje: {$mail->ErrorInfo}";
        }

      }else
      {
        return;
      }
    }
}

?>