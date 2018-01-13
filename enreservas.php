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
<!--<header>
		<div class="wrapper">
			<div class="logo"><img height="100px" width="150px" src="logo.jpg"></div>
			<div class="logo">Celery</div>
			<nav>
				<a href="inicio.html">Inicio</a>
				<a href="menus.html">Menu</a>
				<a href="pedidos.html">Pedidos</a>
				<a href="reservas.html">Reservas</a>
				<a href="contacto.html">Contacto</a>
				<a href="identificarse.html">Iniciar sesión/Registrarse</a>
			</nav>
		</div>
	</header>
-->
	<div class="navbar-fixed">
	    <nav>
	      <div class="nav-wrapper">

	      	<a href="eninicio.php">
	      		<img class="moverimagenderecha" src="multimedia/logo.png" title="Celery Restaurant">
			</a>

	        
	        <ul class="right hide-on-med-and-down margencabeceras">
	          <li><a href="eninicio.php">Home</a></li>
	          <li><a href="enmenus.php">Menu</a></li>
	          <li><a href="enpedidos.php">Delivery</a></li>
	          <li  class="active"><a href="enreservas.php">Booking</a></li>
	          <li><a href="encontacto.php">Contact</a></li>
	          <?php
	          require_once "conexion.php";
					session_start();
					CrearConexion();

				if(isset($_SESSION["USUARIO_NOMBRE"])){
					if($_SESSION["USUARIO_NOMBRE"] == ""){
					  echo "<li><a href=\"enidentificarse.php\">Log in/Sign in</a></li>";
					}else{
						$nom = $_SESSION["USUARIO_NOMBRE"];			
						echo "<li><a href=\"logout.php\">Log out</a></li>";
						echo "<li><a>$nom</a></li>";
					}
				}else{echo "<li><a href=\"enidentificarse.php\">Log in/Sign in</a></li>";}
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
						Date:
						<input type="date"  name="fecha">
					</div>

					<div class="input-field col s2 offset-s1">
						Time:
						<input type="text" id="timepicker" name="hora">
					</div>

					<div class="input-field col s2 offset-s1">
						Number of people:
						<input id="tema" type="number" name="personas">
					</div>
				</div>


				<div class="row">
					<div class="input-field col s4">
						<textarea placeholder="Observations" id="Mensaje" class="materialize-textarea" name="observaciones"></textarea>
					</div>
				</div>
				<img class="mover" src="multimedia/r2d3.png" >

				</div>

				<div class="row">
					<input class="btn btn-primary subirboton" type="reset" value="Cancel">
					<input class="btn btn-primary subirboton" type="submit" value="Book" name="action" id="btnenviar" name="btnEnviar" value="Enviar formulario">
				</div>
				<div class="respuesta" id="respuesta"></div>

	</div>
</div>
</form>

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
						<h3>About</h3>
						<div class="direccion">
							<a class="blanco" href="eninicio.php">Home</a>
							<br>
							<a class="blanco" href="enmenus.php">Menu</a>
							<br>
							<a class="blanco" href="enpedidos.php">Delivery</a>
							<br>
							<a class="blanco" href="enreservas.php">Bookings</a>
							<br>
							<a class="blanco" href="encontacto.php">Contact</a>
							<br>
							<a class="blanco" href="enidentificarse.php">Log in/Sign in</a>
						</div>
					</div>
					<div class="colocacion">
						<h3>Location</h3>
						<div class="direccion">
							Avenida Marítima,
							<br>
							S/C de Tenerife, Tenerife
							<br>
							Phone: 888888888
						</div>
					</div>
					<div class="colocacion">
						<h3 >Opening hours</h3>
						<div>
							<h4 class="horario">Lunch</h4>
							<h5>Thu-Sun
							<br>
							12 pm - 4 pm</h5>
						</div>
						<div>
							<h4 class="horario">Dinner</h4>
							<h5>Daily
							<br>
							7:30 pm - 10:30 pm</h5>
						</div>
					</div>
					<div class="posicionbandera">
						<a href="reservas.php">
						<img src="multimedia/español.jpg" title="Espanish" class="bandera"></a>
						<a href="enreservas.php">
						<img src="multimedia/ingles.png" title="English" class="bandera"></a>
					</div>
			</div>
			
		</section>


</body>
</html>