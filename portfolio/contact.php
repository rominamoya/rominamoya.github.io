<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/

include 'config.php';

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
include 'functions.php';

$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
$subject = "Consulta formulario web";
$message = stripslashes($_POST['message']);
$mesg="Nombre: $name
eMail: $email
Consulta: $message";
$resasunto="Tu consulta ha sido recibida";
$respuesta="Te responderé a la brevedad. Romina Moya";
$resdireccion="From:".WEBMASTER_EMAIL;
$error = '';

// Check name

if(!$name)
{
$error .= 'Por favor ingrese su nombre.<br />';
}

// Check email

if(!$email)
{
$error .= 'Por favor ingrese su e-mail.<br />';
}

if($email && !ValidateEmail($email))
{
$error .= 'Por favor ingrese una direcci&oacute;n de e-mail v&aacute;lida.<br />';
}

// Check message (length)

if(!$message || strlen($message) < 0)
{
$error .= "Por favor ingrese su mensaje. <br />";
}


if(!$error)
{
$mail = mail(WEBMASTER_EMAIL, $subject, $mesg,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());
	$mail= mail($email, $resasunto, $respuesta, $resdireccion);


if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}
?>