<?php

	include "conexion.php";

	session_start();

	$Conexion = CrearConexion();

	$dni = $_SESSION["USUARIO_DNI"];
	$fec = getdate();
	$fecha_actual = date("Y-m-d");

	$SQL = " select fecha, hora, personas from reservas where DNI = '$dni' and fecha >= '$fecha_actual'";
	$SQL2 = " select count(hora) from reservas where DNI = '$dni' and fecha >= '$fecha_actual'";

	$Resultado = Ejecutar($Conexion, $SQL);
	$Resultado2 = Ejecutar($Conexion, $SQL2);

while ($row = $Resultado2->fetch_assoc()) {
    $numResults = $row['count(hora)'];
}
	//echo $Resultado;
	//$numResults = mysql_num_rows($Resultado);
	$counter = 0;
	while($row = $Resultado->fetch_assoc()){
	    if (++$counter == $numResults) {
	        $fecha = $row['fecha'];
	        $hora = $row['hora'];
	        $personas = $row['personas'];
	    } else {
	        // not last row
	    }
	}
	if(!isset($fecha)){

			echo "<script language=\"javascript\">alert(\"No dispone de reservas.\");</script>"; 
	}else{

		echo "<script language=\"javascript\">alert(\"Día: $fecha  Hora: $hora  Personas: $personas\");</script>"; 
	}

	/*if($Resultado ==1){
	 
	 	$impr = "PEDIDO REALIZADO, TOTAL: " . $precio . "€" ;
		echo "<script language=\"javascript\">alert(\"$impr\");</script>"; 
		//header('Location: pedidos.php');
	}*/

?>