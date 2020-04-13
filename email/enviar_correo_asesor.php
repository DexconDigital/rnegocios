<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $cor_asesor = $_POST['cor_asesor'];
    $codigo = $_POST['codigo'];
}


$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    //acceso
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Mensaje para enviar
    
    $mail->isHTML(true);
    //Cabecera
    $mail->setFrom('RioNegocios@RioNegocios.com', 'RioNegocios@RioNegocios.com');
    //destinos
      $mail->addAddress($cor_asesor);
    

    $mail->Subject='Mensaje desde la página web Rio Negocios';
    $mail->Body = '<span>Hola, '.$nombre.' desea más información sobre el inmueble de código: '.$codigo.' </span>
                   <h4> Sus datos de contacto son: </h4>
                    <ul>
                        <li>Nombres Completos: '.$nombre.'</li>
                        <li>Correo: '.$email.'</li>
                        <li>Teléfono: '.$telefono.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "
    <script>alert('Mensaje enviado, muchas gracias.');window.location.href='../inmuebles.php'</script>";
          
}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
