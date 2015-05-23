<?php
$nombre =$_POST['nombre'];
$comentario =$_POST['comentario'];

$grabar = fopen("com.html","a");
fwrite($grabar, "<p><b>$nombre: </b>$comentario</p>");
fclose($grabar);

include("index.php");

?>