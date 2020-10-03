<<?php 

$destino="consultas@darlynmuj02@gmail.com";
$nombre=$_POST{"Nombre"};
$correo=$_POST{"correo"};
$numero=$_POST{"numero"};
$mensaje=$_POST{"mensaje"};
$contenido="nombre: ".$nombre . "correo:  ".$correo ."numero: ". $numero . "mensaje" .$mensaje;
mail($destino,"contacto",$contenido);
header("location:gracias.html");



 ?>