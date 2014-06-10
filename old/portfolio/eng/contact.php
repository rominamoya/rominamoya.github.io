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
$subject = "Web contact form";
$message = stripslashes($_POST['message']);
$mesg="Name: $name
eMail: $email
Message: $message";
$resasunto="You message has been received";
$respuesta="I'll contact you soon. Romina Moya";
$resdireccion="From:".WEBMASTER_EMAIL;

$error = '';

// Check name

if(!$name)
{
$error .= 'Please enter your name.<br />';
}

// Check email

if(!$email)
{
$error .= 'Please enter an e-mail address.<br />';
}

if($email && !ValidateEmail($email))
{
$error .= 'Please enter a valid e-mail address.<br />';
}

// Check message (length)

if(!$message || strlen($message) < 0)
{
$error .= "Please enter your message. <br />";
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