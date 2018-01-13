<?php

	include "conexion.php";

	session_start();

	$Conexion = CrearConexion();

	
	$Nombre = $_POST["Nombre"];
	$Tema = $_POST["Tema"];
	$email = $_POST["email"];
	$Mensaje = $_POST["Mensaje"];
	$Telf = $_POST["Telf"];


	$SQL = "INSERT INTO consultas(Nombre, email, Telf, Tema, Mensaje) VALUES ('$Nombre', '$email','$Telf','$Tema','$Mensaje')";

	$Resultado = Ejecutar($Conexion, $SQL);

	if($Resultado ==1){
	 
	 	$impr = "CONSULTA REALIZADA: " . $Tema;
		echo "<script language=\"javascript\">alert(\"$impr\");</script>"; 
	}

?>