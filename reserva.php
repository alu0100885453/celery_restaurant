<?php

	include "conexion.php";

	session_start();

	$Conexion = CrearConexion();

	
	$fecha = $_POST["fecha"];
	$hora = $_POST["hora"];
	$personas = $_POST["personas"];
	$observaciones = $_POST["observaciones"];



	
	
if(isset($_SESSION["USUARIO_DNI"])){
	$dni = $_SESSION["USUARIO_DNI"];
	
	//$fecha2=  date_format($fecha, 'Y-m-d');
	$SQL = "INSERT INTO reservas(DNI, fecha, hora, personas, observaciones) VALUES ('$dni', '$fecha','$hora','$personas','$observaciones')";
}else{
	$SQL = "INSERT INTO reservas(fecha, hora, personas, observaciones) VALUES ('$fecha','$hora','$personas','$observaciones')";
}
	$Resultado = Ejecutar($Conexion, $SQL);

	//echo $Resultado;
	if($Resultado ==1){
	 
	 	$impr = "RESERVA REALIZADA: " . $fecha ."  ". $hora;
		echo "<script language=\"javascript\">alert(\"$impr\");</script>"; 
		//header('Location: pedidos.php');
	}

?>