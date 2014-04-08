<?php
$nombre= $_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];
$direccion="rominamoya@gmail.com";
$asunto="Consulta Formulario portfolio";
$remitente="From:".$email;
$msg="Nombre: $nombre
eMail: $email
Consulta: $mensaje";
$resasunto="Tu consulta ha sido recibida";
$respuesta="Te responderé a la brevedad. Romina Moya";
$resdireccion="From:".$direccion;
mail($direccion, $asunto, $msg, $remitente);
mail($email, $resasunto, $respuesta, $resdireccion);
echo "<h1>$nombre, </h1>gracias por tu consulta<br>Te responder&eacute; a la brevedad,<br>Romina";
?>
