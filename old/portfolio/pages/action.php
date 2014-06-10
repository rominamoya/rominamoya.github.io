<?php
$nombre= $_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];
$direccion="rominamoya@gmail.com";
$asunto="Consulta Formalario portfolio";\
$remitente="From:".$email;
$msg="Nombre: $nombre
eMail: $email
Consulta: $mensaje";
$resasunto="Tu consulta ha sido recibida";
$respuesta="Te responder&eacute; a la brevedad. Romina";
$resdireccion="From:".$direccion;
mail($direccion, $asunto,$msg, $remitente);
mail($mail, $resasunto, $repuesta,$resdireccion);
echo "<h1>Gracias por tu consulta</h1><p class='contact'>Te responder&eacute; a la brevedad,<br><br>Romina<p>" ;
?>
