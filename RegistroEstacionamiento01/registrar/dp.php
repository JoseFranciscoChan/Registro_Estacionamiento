<?php

$servidor="localhost";
$usuario="root";
$contraseña="";
$BD="registroestacionamiento";

$conexion=mysqli_connect($servidor, $usuario, $contraseña, $BD);

if (!$conexion) {
	echo "Falló la conexion <br>";
	dile("conexion failed") . mysqli_connect_error();
	}
	else{
		
	}

?>