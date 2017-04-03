<?php

 $nombre = $_POST["nombre"];

 $email = $_POST["email"];


 $departamento = $_POST["departamento"];

 $mensaje = $_POST["mensaje"];

 $para = $departamento;
 $asunto = "Nuevo Mensaje de $nombre";
 
 $mensaje = "

 Nombre del remitente: ".$nombre."
 Correo: ".$email."
 Mensaje: ".$contenido."
 ";

 mail($para,$asunto,utf8_decode($mensaje));
 
 echo "<p><h2>Hemos recibido tu mensaje correctamente, pronto te contestaremos, gracias.</h2></p>";

?>