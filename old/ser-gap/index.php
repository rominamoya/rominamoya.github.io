<?php
$c=$_GET["c"];


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Metal&uacute;rgica Ser-gab| Carpinter&iacute;a met&aacute;lica y aluminio de C&oacute;rdoba</title>
<link href="css/style.css"  type="text/css" rel="stylesheet" />

</head>

<body>
<div id="wrap">
<div id="head"></div>
<div id="content"><?php
@$incluido=include ("includes/$c.php");
		if ($incluido){
		}
		else {
		include ("includes/inicio.php");
		
	}
?>
</div>

</div>
<div id="footer">
<div id="foot_left"><ul><li><a href="#">Empresa</a></li>
<li><a href="#">Servicios</a></li>
<li><a href="#">Productos</a></li>
<li><a href="#">Trabajos</a></li>
<li><a href="#">Clientes</a></li>
<li><a class="lastone" href="#">Contacto</a></li>
</ul></div>
<div id="foot_right"><h3>Cont&aacute;ctenos</h3>
<p>Cumbres de gaspar 4326<br />
ferreyra 145-C&oacute;rdoba -Argentina<br/>
tel:4500154<br />
cel:27538175778/8513781523751 <br />
info@sergap.com</p></div></div>
</body>
</html>
