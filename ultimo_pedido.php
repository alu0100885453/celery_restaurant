<?php

	include "conexion.php";

	session_start();

	$Conexion = CrearConexion();

	$dni = $_SESSION["USUARIO_DNI"];

	$SQL = " select contenido from pedidos where DNI = '$dni' ";
	$SQL2 = " select count(contenido) from pedidos where DNI = '$dni' ";

	$Resultado = Ejecutar($Conexion, $SQL);
	$Resultado2 = Ejecutar($Conexion, $SQL2);

while ($row = $Resultado2->fetch_assoc()) {
    $numResults = $row['count(contenido)'];
}
	//echo $Resultado;
	//$numResults = mysql_num_rows($Resultado);
	$counter = 0;
	while($row = $Resultado->fetch_assoc()){
	    if (++$counter == $numResults) {
	        $ultimo = $row['contenido'];
	    } else {
	        // not last row
	    }
	}

	
   
		echo "<script language=\"javascript\">alert(\"$ultimo\");</script>"; 


	/*if($Resultado ==1){
	 
	 	$impr = "PEDIDO REALIZADO, TOTAL: " . $precio . "€" ;
		echo "<script language=\"javascript\">alert(\"$impr\");</script>"; 
		//header('Location: pedidos.php');
	}*/

?>