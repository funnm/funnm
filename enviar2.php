<?php
$nombre = $_POST['Nombre'];
$mail = $_POST['Email'];
$empresa = $_POST['Mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su E-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'funnm03@gmail.com';
$asunto = 'Mensaje de mi sitio Web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>