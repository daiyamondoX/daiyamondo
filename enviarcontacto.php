<?php

$nombre = $_POST['Nombre'];
$correo = $_POST['email'];
$telef = $_POST['Telefono'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $correo ."\r\n";
$header .= "X-Mailer: PHP/". phpversion() . "\r\n"; 
$header .= "Mine-Version: 1.0  \r\n"; 
$header .= "Content-Type: Text/plain";

$mensaje = "Este mensaje fue envaido por: ". $nombre ."\r\n";
$mensaje .= "Correo de contacto: ". $correo ."\r\n";
$mensaje .= "Numero de contacto: ". $telef ."\r\n";
$mensaje .= "El mensaje es: ".$_POST['mensaje']."\r\n";
$mensaje .= "Enviado el: ". date('d/m/Y', time());

$para = 'oficial.daiyamondo@gmail.com';
$asunto = 'Mensaje de Web Daiyamondo';

mail($para,$asunto,utf8_decode($mensaje), $header);
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='daiyamondo.cl/contactos.html';</script>";
?>