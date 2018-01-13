<?php

	include "conexion.php";

	session_start();

	$Conexion = CrearConexion();

	$iberico = $_POST["iberico"];
	$quesos = $_POST["quesos"];
	$tequenos = $_POST["tequenos"];
	$gambas = $_POST["gambas"];
	$setas = $_POST["setas"];
	$pimientos_bacalao = $_POST["pimientos_bacalao"];
	$tataki = $_POST["tataki"];
	$carpaccio = $_POST["carpaccio"];
	$queso_arandanos = $_POST["queso_arandanos"];
	$ensalada_mixta = $_POST["ensalada_mixta"];
	$ensalada_casa = $_POST["ensalada_casa"];
	$ensalada_templ = $_POST["ensalada_templ"];
	$ensalada_cesar = $_POST["ensalada_cesar"];
	$picadillo = $_POST["picadillo"];
	$garbanzas = $_POST["garbanzas"];
	$cebolla = $_POST["cebolla"];
	$calabaza = $_POST["calabaza"];
	$brocoli_almejas = $_POST["brocoli_almejas"];
	$sopa_arroz = $_POST["sopa_arroz"];
	$coliflor = $_POST["coliflor"];
	$albondigas = $_POST["albondigas"];
	$tortilla = $_POST["tortilla"];
	$pasta = $_POST["pasta"];
	$repollo = $_POST["repollo"];
	$estofado = $_POST["estofado"];
	$calabacines = $_POST["calabacines"];
	$coles = $_POST["coles"];
	$calabacin_yogurt = $_POST["calabacin_yogurt"];
	$sorbete = $_POST["sorbete"];
	$flan = $_POST["flan"];
	$fondant = $_POST["fondant"];
	$cheesecake = $_POST["cheesecake"];
	$cotta = $_POST["cotta"];
	$tiramisu = $_POST["tiramisu"];



	
	$a_meter= "";
	$precio = 0;
	if($iberico>0){ $a_meter= $a_meter . "iberico: " . $iberico; 
		$precio += 15*$iberico;}
	if($quesos>0){ $a_meter= $a_meter . "   quesos: " . $quesos; 
		$precio += 11*$quesos;;}
	if($tequenos>0){ $a_meter= $a_meter . "   tequenos: " . $tequenos; $precio += 6.5*$tequenos;}
	if($gambas>0){ $a_meter= $a_meter . "   gambas: " . $gambas; $precio += 8.5*$gambas;}
	if($setas>0){ $a_meter= $a_meter . "   setas: " . $setas; $precio += 11.5*$setas;}
	if($pimientos_bacalao>0){ $a_meter= $a_meter . "   pimientos_bacalao: " . $pimientos_bacalao; $precio += 12.75*$pimientos_bacalao;}
	if($tataki>0){ $a_meter= $a_meter . "   tataki: " . $tataki; $precio += 16*$tataki;}
	if($carpaccio>0){ $a_meter= $a_meter . "   carpaccio: " . $carpaccio; $precio += 10.5*$carpaccio;}
	if($queso_arandanos>0){ $a_meter= $a_meter . "   queso_arandanos: " . $queso_arandanos; $precio += 8*$queso_arandanos;}
	if($ensalada_mixta>0){ $a_meter= $a_meter . "   ensalada_mixta: " . $ensalada_mixta; $precio += 7*$ensalada_mixta;}
	if($ensalada_casa>0){ $a_meter= $a_meter . "   ensalada_casa: " . $ensalada_casa; $precio += 7.5*$ensalada_casa;}
	if($ensalada_templ>0){ $a_meter= $a_meter . "   ensalada_templ: " . $ensalada_templ; $precio += 8.5*$ensalada_templ;}
	if($ensalada_cesar>0){ $a_meter= $a_meter . "   ensalada_cesar: " . $ensalada_cesar; $precio += 9*$ensalada_cesar;}
	if($picadillo>0){ $a_meter= $a_meter . "   picadillo: " . $picadillo; $precio += 8*$picadillo;}
	if($garbanzas>0){ $a_meter= $a_meter . "   garbanzas: " . $garbanzas; $precio += 7.5*$garbanzas;}
	if($cebolla>0){ $a_meter= $a_meter . "   cebolla: " . $cebolla;$precio += 8.5*$cebolla ;}
	if($calabaza>0){ $a_meter= $a_meter . "   calabaza: " . $calabaza; $precio += 8*$calabaza;}
	if($brocoli_almejas>0){ $a_meter= $a_meter . "   brocoli_almejas: " . $brocoli_almejas; $precio += 9*$brocoli_almejas;}
	if($sopa_arroz>0){ $a_meter= $a_meter . "   sopa_arroz: " . $sopa_arroz; $precio += 9.5*$sopa_arroz;}
	if($coliflor>0){ $a_meter= $a_meter . "   coliflor: " . $coliflor; $precio += 9*$coliflor;}
	if($albondigas>0){ $a_meter= $a_meter . "   albondigas: " . $albondigas; $precio += 9.5*$albondigas;}
	if($tortilla>0){ $a_meter= $a_meter . "   tortilla: " . $tortilla; $precio += 10*$tortilla;}
	if($pasta>0){ $a_meter= $a_meter . "   pasta: " . $pasta; $precio += 10.5*$pasta;}
	if($repollo>0){ $a_meter= $a_meter . "   repollo: " . $repollo; $precio += 11*$repollo;}
	if($estofado>0){ $a_meter= $a_meter . "   estofado: " . $estofado; $precio += 10*$estofado;}
	if($calabacines>0){ $a_meter= $a_meter . "   calabacines: " . $calabacines;$precio += 12*$calabacines ;}
	if($coles>0){ $a_meter= $a_meter . "   coles: " . $coles; $precio += 11.5*$coles;}
	if($calabacin_yogurt>0){ $a_meter= $a_meter . "   calabacin_yogurt: " . $calabacin_yogurt; $precio += 11*$calabacin_yogurt;}
	if($sorbete>0){ $a_meter= $a_meter . "   sorbete: " . $sorbete;$precio += 4*$sorbete ;}
	if($flan>0){ $a_meter= $a_meter . "   flan: " . $flan;$precio += 5*$flan ;}
	if($fondant>0){ $a_meter= $a_meter . "   fondant: " . $fondant; $precio += 5.5*$fondant;}
	if($cheesecake>0){ $a_meter= $a_meter . "   cheesecake: " . $cheesecake;$precio += 4.5*$cheesecake ;}
	if($cotta>0){ $a_meter= $a_meter . "   cotta: " . $cotta; $precio += 6.5*$cotta;}
	if($tiramisu>0){ $a_meter= $a_meter . "   tiramisu: " . $tiramisu;$precio += 6*$tiramisu ;}

	//echo $a_meter;

	$dni = $_SESSION["USUARIO_DNI"];
	
	$SQL = "INSERT INTO pedidos(contenido, DNI) VALUES ('$a_meter', '$dni')";

	$Resultado = Ejecutar($Conexion, $SQL);

	//echo $Resultado;
	if($Resultado ==1){
	 
	 	$impr = "PEDIDO REALIZADO, TOTAL: " . $precio . "€" ;
		echo "<script language=\"javascript\">alert(\"$impr\");</script>"; 
		//header('Location: pedidos.php');
	}

?>