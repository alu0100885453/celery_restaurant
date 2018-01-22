<?php

	include "conexion.php";

	session_start();

	$Conexion = CrearConexion();

 echo '<meta charset="UTF-8">';
 echo '<title>info celery</title>';
 echo '<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>';
	///////// reservas de HOY  //////////////

	$fec = getdate();
	//print_r($fec['year']);
	$fecha_actual = date("Y-m-d");
	

	
	
	echo "<br>RESERVAS PARA HOY <br><br>" . $fecha_actual;

	$SQL = "select * from reservas where fecha = '$fecha_actual' ";

	$Resultado = Ejecutar($Conexion, $SQL);
	
	echo '<table style="width:100%">
	  <tr>
	    <th>Id</th>
	    <th>Fecha</th> 
	    <th>Hora</th>
	    <th>Personas</th>
	    <th>Observaciones</th>
	    <th>DNI</th>
	  </tr>';

	while($row = $Resultado->fetch_assoc()){
	    
	       // echo $row['id'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " . $row['fecha'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " . $row['hora'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " . $row['personas'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " . $row['observaciones'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " . $row['DNI'] . "<br><br>";
	   echo "<tr>
	    <td>".$row['id']."</td>
	    <td>".$row['fecha']."</td> 
	    <td>".$row['hora']."</td>
	    <td>".$row['personas']."</td>
	    <td>".$row['observaciones']."</td>
	    <td>".$row['DNI']."</td>
	  </tr>";
	}

	echo '</table>';

/*
  <tr>
    <td>Jill</td>
    <td>Smith</td> 
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table>*/


	///////// reservas de MAÑANA //////////////

echo "<br><br><br>RESERVAS PARA MAÑANA<br><br> ";

	$datetime = new DateTime('tomorrow');
	$fecha_actual = $datetime->format('Y-m-d');
   
	$SQL = "select * from reservas where fecha = '$fecha_actual' ";

	$Resultado = Ejecutar($Conexion, $SQL);
	
	echo '<table style="width:100%">
	  <tr>
	    <th>Id</th>
	    <th>Fecha</th> 
	    <th>Hora</th>
	    <th>Personas</th>
	    <th>Observaciones</th>
	    <th>DNI</th>
	  </tr>';

	while($row = $Resultado->fetch_assoc()){
	    
	       // echo $row['id'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " . $row['fecha'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " . $row['hora'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " . $row['personas'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " . $row['observaciones'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " . $row['DNI'] . "<br><br>";
	   echo "<tr>
	    <td>".$row['id']."</td>
	    <td>".$row['fecha']."</td> 
	    <td>".$row['hora']."</td>
	    <td>".$row['personas']."</td>
	    <td>".$row['observaciones']."</td>
	    <td>".$row['DNI']."</td>
	  </tr>";
	}

	echo '</table>';




	///////// reservas de PASADO //////////////

echo "<br><br><br>RESERVAS PARA PASADO <br><br>";

	$datetime->add(new DateInterval("P1D"));
	$fecha_actual = $datetime->format('Y-m-d');
   
	$SQL = "select * from reservas where fecha = '$fecha_actual' ";
	
	$Resultado = Ejecutar($Conexion, $SQL);
	
	echo '<table style="width:100%">
	  <tr>
	    <th>Id</th>
	    <th>Fecha</th> 
	    <th>Hora</th>
	    <th>Personas</th>
	    <th>Observaciones</th>
	    <th>DNI</th>
	  </tr>';

	while($row = $Resultado->fetch_assoc()){
	    
	       // echo $row['id'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " . $row['fecha'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " . $row['hora'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " . $row['personas'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " . $row['observaciones'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp " . $row['DNI'] . "<br><br>";
	   echo "<tr>
	    <td>".$row['id']."</td>
	    <td>".$row['fecha']."</td> 
	    <td>".$row['hora']."</td>
	    <td>".$row['personas']."</td>
	    <td>".$row['observaciones']."</td>
	    <td>".$row['DNI']."</td>
	  </tr>";
	}

	echo '</table>';
	
?>