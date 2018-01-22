<?php

	include "conexion.php";

	session_start();

	$Conexion = CrearConexion();

	$dni = $_SESSION["USUARIO_DNI"];
	$fec = getdate();
	$fecha_actual = date("Y-m-d");

	$SQL = " delete from reservas where DNI = '$dni' and fecha >= '$fecha_actual'";
	

	$Resultado = Ejecutar($Conexion, $SQL);
	

	
   
		echo "<script language=\"javascript\">alert(\"Su reserva cancelada ha sido.\");</script>"; 


	/*if($Resultado ==1){
	 
	 	$impr = "PEDIDO REALIZADO, TOTAL: " . $precio . "€" ;
		echo "<script language=\"javascript\">alert(\"$impr\");</script>"; 
		//header('Location: pedidos.php');
	}*/

?>