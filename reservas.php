<html>

<head>

	<meta charset="UTF-8">

	<title>Celery Restaurant</title>

	<link rel="stylesheet" type="text/css" href="css/reservas.css">

	<link rel="stylesheet" type="text/css" href="css/materialize.css">

	<link rel="icon" href="multimedia/logo.png" type="image/x-icon"/>

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

	<script src="js/cambiarbarra.js"></script>

	<script src="datepicker.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

	<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

	<script src="js/irarriba.js"></script>





    <script src="js/enviar.js"></script>



</head>

<body>

<?php

	          require_once "conexion.php";

					session_start();

					CrearConexion();



				if(isset($_SESSION["USUARIO_CAT"]))

					if($_SESSION["USUARIO_CAT"] == "E")
					  
							header('Location: priv.php');
					

			

				?>
	<div class="navbar-fixed">

	    <nav>

	      <div class="nav-wrapper">



	      	<a href="index.php">

	      		<img class="moverimagenderecha" src="multimedia/logo.png" title="Celery Restaurant">

	      	</a>

	        

	        <ul class="right hide-on-med-and-down margencabeceras">

	          <li><a href="index.php">Inicio</a></li>

	          <li><a href="menus.php">Menu</a></li>

	          <li><a href="pedidos.php">Pedidos</a></li>

	          <li  class="active"><a href="reservas.php">Reservas</a></li>

	          <li><a href="contacto.php">Contacto</a></li>

	          <?php

	          



				if(isset($_SESSION["USUARIO_NOMBRE"])){

					if($_SESSION["USUARIO_NOMBRE"] == ""){

					  echo "<li><a href=\"identificarse.php\">Iniciar sesión/Registrarse</a></li>";

					}else{

						$nom = $_SESSION["USUARIO_NOMBRE"];			

						echo "<li><a href=\"logout.php\">Desconectar</a></li>";

						echo "<li><a>$nom</a></li>";

					}

				}else{echo "<li><a href=\"identificarse.php\">Iniciar sesión/Registrarse</a></li>";}

				?>

	        </ul>

	      </div>

	    </nav>

	</div>



<form id="formulario" method="post" action="reserva.php">



<div class="bajartodo">

	<div class="container">

				<div class="row">

				<div class="row">

					<div class="input-field col s2">

						Fecha:

						<input type="date"  name="fecha">

					</div>



					<div class="input-field col s2 offset-s1">

						Hora:

						<input type="text" id="timepicker" name="hora">

					</div>



					<div class="input-field col s2 offset-s1">

						Número de personas:

						<input id="tema" type="number" name="personas">

					</div>

				</div>





				<div class="row">

					<div class="input-field col s4">

						<textarea placeholder="Observaciones (indique nombre de la reserva)" id="Mensaje" class="materialize-textarea" name="observaciones"></textarea>

					</div>

				</div>

				<img class="mover" src="multimedia/r2d3.png" >



				</div>



				<div class="row">

					<input class="btn btn-primary subirboton" type="reset" value="Cancelar">

					<input class="btn btn-primary subirboton" type="submit" value="Confirmar reserva" name="action" id="btnenviar" name="btnEnviar" value="Enviar formulario">
</form>


<form id="formulario2" method="post" action="ultima_reserva.php">
					<input class="btn btn-primary" type="submit" value="Ver última reserva" name="action" id="btnenviar" name="btnEnviar" value="Enviar formulario">
</form>
<form id="formulario3" method="post" action="cancel_reserva.php">
					<input class="btn btn-primary " type="submit" value="Cancelar última reserva">
</form>
				</div>

				<div class="respuesta" id="respuesta"></div>



	</div>

</div>





<section>



			<div class="footer">

					<div class="volverarriba">

						<a href="#" id="volverarriba" title="Volver hacia arriba"></a>

					</div>

					<div class="footerlogo">

						<a href="#">

							<img src="multimedia/logo.png" title="Celery Restaurant"></a>	

					</div>

					<div class="itemsfooter">

						<h3>Restaurante</h3>

						<div class="direccion">

							<a class="blanco" href="index.php">Inicio</a>

							<br>

							<a class="blanco" href="menus.php">Menú</a>

							<br>

							<a class="blanco" href="pedidos.php">Pedidos</a>

							<br>

							<a class="blanco" href="reservas.php">Reservas</a>

							<br>

							<a class="blanco" href="contacto.php">Contacto</a>

							<br>

							<a class="blanco" href="identificarse.php">Iniciar sesión/Resgistrarse</a>

						</div>

					</div>

					<div class="colocacion">

						<h3>Localización</h3>

						<div class="direccion">

							Avenida Marítima,

							<br>

							S/C de Tenerife, Tenerife

							<br>

							Tfno: 888888888

						</div>

					</div>

					<div class="colocacion">

						<h3 >Horario de apertura</h3>

						<div>

							<h4 class="horario">Almuerzo</h4>

							<h5>Jueves-Domingo

							<br>

							12:00 - 16:00</h5>

						</div>

						<div>

							<h4 class="horario">Cena</h4>

							<h5>Todos los días

							<br>

							19:30 - 22:30</h5>

						</div>

					</div>

					<div class="posicionbandera">

						<a href="reservas.php">

						<img src="multimedia/español.jpg" title="Español" class="bandera"></a>

						<a href="enreservas.php">

						<img src="multimedia/ingles.png" title="Inglés" class="bandera"></a>

					</div>

			</div>

			

		</section>





</body>

</html>