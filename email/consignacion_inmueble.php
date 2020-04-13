<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $nombre_propietario = $_POST['nombre_del_propietario'];
    $numero_propietario = $_POST['numero_del_propietario'];
    $precio = $_POST['precio'];
    $tipo_inm = $_POST['tipo_inm'];
    $transaccion = $_POST['transaccion'];
    $ciudad = $_POST['ciudad'];
    $barrio = $_POST['barrio'];
    $direccion = $_POST['direccion'];
    $nombre_de_la_unidad = $_POST['nombre_de_la_unidad'];
    $area_del_inmueble = $_POST['area_del_inmueble'];
    $numero_de_habitaciones = $_POST['numero_de_habitaciones'];
    $baños = $_POST['baños'];
    $tipo_de_cocina = $_POST['tipo_de_cocina'];
    $sala_comedor = $_POST['sala_comedor'];
    $zona_de_ropas = $_POST['zona_de_ropas'];
    $parqueaderos = $_POST['parqueaderos'];
    $cuarto_util = $_POST['cuarto_util'];
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
    $mail->addAddress('rionegociosdelsur@gmail.com');
    

    $mail->Subject='Mensaje desde la pagina web Rio Negocios';
    $mail->Body = '<span>Hola, '.$nombre_propietario.' quiere recibir información sobre como conisgnar un inmueble y sus datos de contacto son:</span>
                    <ul>
                        <li>Telefono: '.$numero_propietario.'</li>
                        <li>Valor: '.$precio.'</li>
                        <li>Tipo de inmueble: '.$tipo_inm.'</li>
                        <li>Quiere consignar su inmueble en: '.$transaccion.'</li>
                        <li>Ciudad: '.$ciudad.'</li>
                        <li>Barrio: '.$barrio.'</li>
                        <li>Dirección: '.$direccion.'</li>
                        <li>Nombre de la Unidad: '.$nombre_de_la_unidad.'</li>
                        <li>Área: '.$area_del_inmueble.'mt<sup>2</sup></li>
                        <li>Número de Habitaciones: '.$numero_de_habitaciones.'</li>
                        <li>Baños: '.$baños.'</li>
                        <li>Tipo de Cocina: '.$tipo_de_cocina.'</li>
                        <li>Sala Comedor: '.$sala_comedor.'</li>
                        <li>Zona de ropas: '.$zona_de_ropas.'</li>
                        <li>Parqueaderos: '.$parqueaderos.'</li>
                        <li>Cuarto útil: '.$cuarto_util.'</li>
                    </ul>
    ';
    $mail->send();

    echo "
    <script>alert('Mensaje enviado, muchas gracias.');window.location.href='../quienes_somos.php'</script>";
          
}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
