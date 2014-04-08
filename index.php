<?php
$c=$_GET["c"];
switch($c){
case "eng":
$titulo="Romina Moya | Web Designer | romina@rominamoya.com";
break;
case "es":
$titulo="Romina Moya | Dise&ntilde;adora Web| romina@rominamoya.com";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
	<title><?=$titulo?></title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="diseñadora web, diseñadora multimedial" />
	<meta name="description" content="diseñadora web" />

	<script type="text/javascript" src="scripts/modernizr.custom.76818.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.pagescroller.lite.js"></script>
	<script type="text/javascript" src="scripts/scripts.js"></script>

	<link rel="stylesheet" type="text/css" href="reset-fonts-grids.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="resume.css" media="all" />
	<link rel="stylesheet" href="print.css" type="text/css" media="print" />

</head>
<body>
<div id="doc2" class="yui-t7">
	<div class="botones"><?php include("includes/botones.php"); ?>		
   </div> <div style="clear:both"></div>
<?php 
	@$incluido=include ("includes/$c.php");
		if ($incluido){
		}
		else {
		include ("includes/inicio.php"); } ?>

</div><!--// doc -->

<?php $c=="eng" ? include("includes/menu_en.php") : include("includes/menu_es.php") ;
?>
</body>
</html>

