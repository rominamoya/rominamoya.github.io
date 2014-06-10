<a href="?c=es" class="pdf">Espa&ntilde;ol</a><a href="?c=eng" class="pdf">English</a>

<?php
$c=$_GET["c"];
switch($c){
case "eng":
$btnmsg="Print";
break;
default:
$btnmsg="Imprimir";
}

?>
<a href="#" class="pdf" onclick="window.print();return false;"><?php print $btnmsg;?></a>
