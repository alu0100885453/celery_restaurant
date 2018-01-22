<?php



	include "conexion.php";

	$Conexion = CrearConexion();



	$email = $_REQUEST["email"];

	$Clave = $_REQUEST["password"];

	$SQL = " select Id, Nombre, DNI, cat from usuarios where email = '$email' and Pass = '$Clave'";

	//mysqli_query($Conexion, $SQL);

	$Resultado = mysqli_query($Conexion, $SQL);

	$Tupla = mysqli_fetch_array($Resultado ,MYSQLI_ASSOC);

	if ($Tupla["Id"] != "")

	{

		session_start();

		$_SESSION["USUARIO_ID"] = $Tupla["Id"];

		$_SESSION["USUARIO_NOMBRE"] = $Tupla["Nombre"];

		$_SESSION["USUARIO_DNI"] = $Tupla["DNI"];

		$_SESSION["USUARIO_CAT"] = $Tupla["cat"];

		$impr = "Login correcto.";

		echo "<script language=\"javascript\">alert(\"$impr\");</script>";

	}

	else

	{

		$impr = "Usuario o contraseña incorrecta";

		echo "<script language=\"javascript\">alert(\"$impr\");</script>";

	}

?>