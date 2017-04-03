<?php
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$departamento = $_POST["departamento"];
	$mensaje = $_POST["mensaje"];
	$para = "robertohuesca@outlook.com";
	$asunto = "$departamento - Outlet Seguros";
	
	$mensaje = "
	Nombre del remitente: ".$nombre."
	Correo: ".$email."
	Mensaje: ".$mensaje."
	Enviado desde www.outletseguros.com.mx
	";
	mail($para,$asunto,utf8_decode($mensaje));
?>