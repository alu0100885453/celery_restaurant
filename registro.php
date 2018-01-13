

<?php

	include "conexion.php";

	#session_start();

	$Conexion = CrearConexion();

	$nombre = $_REQUEST["Nombre"];
	$apellidos = $_REQUEST["Apellidos"];
	$dni = $_REQUEST["Dni"];
	$email = $_REQUEST["email"];
	$direccion = $_REQUEST["Direccion"];
	$telf = $_REQUEST["Telf"];
	$pass = $_REQUEST["password"];

	

	$SQL = "INSERT INTO usuarios(Nombre, Apellidos, Dni, email, Direccion, Telf, Pass) VALUES ('$nombre', '$apellidos', '$dni', '$email','$direccion', '$telf', '$pass')";
	//$SQL = "SELECT * FROM Usuario";
	$Resultado = Ejecutar($Conexion, $SQL);

	if($Resultado ==1){
	 
	 	$impr = "USUARIO CREADO: " . $nombre;
		echo "<script language=\"javascript\">alert(\"$impr\");</script>"; 
	}

?>