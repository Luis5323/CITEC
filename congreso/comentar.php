<?php
$nombre =$_POST['nombre'];
$comentario =$_POST['comentario'];

$grabar = fopen("com.html","a");
fwrite($grabar, "<p>$nombre:$comentario</p>");
fclose($grabar);

include("comsug.php");

?>