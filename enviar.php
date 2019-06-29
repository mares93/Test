<?php
$nombre = $_POST['Nombre'];
$apellidos = $_POST['Apellidos'];
$mail = $_POST['Email'];
$telefono = $_POST['Telefono'];
$asunto = $_POST['Asunto'];
$mensaje = $_POST['Mensaje'].'Este es el mensaje';
$nombre .=" ". $apellidos ;

$header = "From: " . $nombre . "\r\n";
$header .= "Nombre: ". $nombre ." \r\nSu email es: " . $mail . "\r\n";
$header .= "Asunto: " . $asunto . "\r\n";

$mensaje .= "\r\n Enviado el: " . date('d/m/Y', time());

$para = 'contacto@eaenglishacademy.com.mx';//Cambiar en caso de ser necesario.
if(mail($para, $asunto, utf8_decode($mensaje), $header)){
	echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
	echo "<script type=''text/javascript> window.location.href='https://www.eaenglishacademy.com.mx';</script>";
	}
else{
	echo "<script type='text/javascript'>alert('Ha habido un error, favor de intentar nuevamente ');</script>";
	echo "<script type=''text/javascript> window.location.href='https://www.eaenglishacademy.com.mx';</script>";
}
		
?>