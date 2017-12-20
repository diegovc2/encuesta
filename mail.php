<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';


    $data = array();
    $errors = array();

    if (empty($_POST["name"])) {
        $errors["name"] = "Name is required";
    }

    if (empty($_POST["email"])){
        $errors["email"] = "Email is required";
    }

    if (empty($_POST["message"])){
        $errors["message"] = "Message is required";
    }

    if (! empty($errors)){
        $data["success"] = false;
        $data["errors"] = $errors;
    } else {
        $data['success'] = true;
        $data['name'] = $name;
        $data['email'] = $email;
        $data['subject'] = $subject;
        $data['message'] = $message;



    }



$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
//try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->CharSet = 'UTF-8';

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = '192.168.0.14';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'doc@atmsa.cl';                 // SMTP username
    $mail->Password = 'Aiai9884';                           // SMTP password
    $mail->SMTPSecure = 'true';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to


    //Recipients
    $mail->setFrom('doc@atmsa.cl', 'Mailer');
    // Add a recipient
    $mail->addAddress('dveloso@atmsa.cl');               // Name is optional
     $mail->addCC('aarancibia@atmsa.cl');
     /*$mail->addCC('gespejo@atmsa.cl');
     $mail->addCC('marancibia@atmsa.cl');
    // $mail->addBCC('bcc@example.com');
*/
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);

      $mail->Subject = 'Encuesta de '.$nombre.' RUT: '.$rut;

    $mail->Body    =
		            '<p>Nombre:  '.$nombre.'</p>'.
                    '<p>Rut:  '.$rut.'</p>'.
                    '<p>Satisfacción del Servicio:  '.$servicio.'/3 </p>'.
                    '<p>Comentarios:  '.$comentarios1.' </p>'.
                    '<p>Nivel de Calidad:  '.$calidad.'/3 </p>'.
                    '<p>Comentarios:  '.$comentarios2.'</p>'.
                    '<p>Probabilidad de Recontratación: '.$probabilidad.'/3 <p>'.
                      '<p>Comentarios:  '.$comentarios3.' <p>'

    ;

    if(!$mail->send()) {
       $data['error']['title'] = 'Message could not be sent.';
       $data['error']['details'] = 'Mailer Error: ' . $mail->ErrorInfo;
       exit;
    }
