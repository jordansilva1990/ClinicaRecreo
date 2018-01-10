<?php
 
// Get values from form
$name=$_POST['nombre'];
$rut=$_POST['rut'];
$phone=$_POST['telefono'];
$email=$_POST['correo'];
$mensaje=$_POST['mensaje'];
 
$to = "jordan.silva.ortega@gmail.com";
$subject = "Clinica Recreo - Formulario Reserva Estetica";
$message = " Name: " . $name . "\r\n Rut: " . $rut . "\r\n Phone: " . $phone . "\r\n Email: " . $email. "\r\n Mensaje: " . $mensaje;
 
 
$from = "Clinica Recreo";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
 
if(@mail($to,$subject,$message,$headers))
{
  echo "Funciona";
 
}else{
  echo "Problemas!";
}
 
 
 
?>