<html>
<head>
	<meta charset="UTF-8">
	<title>Celery Restaurant</title>
	<link rel="stylesheet" type="text/css" href="css/contacto.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="icon" href="multimedia/logo.ico" type="image/x-icon"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/cambiarbarra.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

	      	<a href="index.php">
	      		<img class="moverimagenderecha" src="multimedia/logo.png" title="Celery Restaurant">
			</a>

	        
	        <ul class="right hide-on-med-and-down margencabeceras">
	          <li><a href="index.php">Inicio</a></li>
	          <li><a href="menus.php">Menu</a></li>
	          <li><a href="pedidos.php">Pedidos</a></li>
	          <li><a href="reservas.php">Reservas</a></li>
	          <li class="active"><a href="contacto.php">Contacto</a></li>
	          <?php
	          require_once "conexion.php";
					session_start();
					CrearConexion();

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

<div class="bajarcuadro">
	<form id="formulario" method="post" action="contact.php">
		<div class="container  card-panel yellow lighten-4">
			<div class="row">
				<div class="input-field col s4">
					<input placeholder="Nombre" data-length="40" id="first_name" type="text" class="validate" name="Nombre">
				</div>
			
				<div class="input-field col s4 offset-s1">
					<input placeholder="Tema de contacto" data-length="40" id="tema" type="text" class="validate" name="Tema">
				</div>
			</div>

			<div class="row">
				<div class="input-field col s4">
					<input placeholder="Correo electrónico" data-length="40" id="correo" type="email" class="validate" name="email">
				</div>
				<div class="input-field col s4 offset-s1">
					<textarea placeholder="Mensaje o consulta" id="Mensaje" maxlenght="200" class="materialize-textarea" name="Mensaje"></textarea>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s4">
					<input placeholder="Teléfono" data-length="40" size="28" maxlenght="10" id="Telf"type="tel" class="validate" name="Telf">
				</div>
				<div class="input-field col s4 offset-s1">
				<input class="btn btn-primary" type="reset" value="Cancelar">
				<input class="btn btn-primary" type="submit" value="Enviar" name="action" id="btnenviar" name="btnEnviar" value="Enviar formulario">
				</div>
			</div>
			<div class="respuesta" id="respuesta"></div>



		</div>
	</form>
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
						<h3 >Horario de pertura</h3>
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
						<a href="contacto.php">
						<img src="multimedia/español.jpg" title="Español" class="bandera"></a>
						<a href="encontacto.php">
						<img src="multimedia/ingles.png" title="Inglés" class="bandera"></a>
					</div>
				
			</div>
			
		</section>
</body>
</html>