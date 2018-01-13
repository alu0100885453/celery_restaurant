<html>
<head>
	<meta charset="UTF-8">
	<title>Prueba</title>
	<link rel="stylesheet" type="text/css" href="css/identificarse.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="icon" href="multimedia/logo.ico" type="image/x-icon"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/cambiarbarra.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<script src="js/enviar.js"></script>
</head>
<body>

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
	          <li><a href="contacto.php">Contacto</a></li>
	          <li  class="active"><a href="identificarse.php">Iniciar sesión/Registrarse</a></li>
	        </ul>
	      </div>
	    </nav>
	</div>

<div class="bajarcuadro">
<form id="formulario" method="post" action="login.php">
		<div class="container card-panel yellow lighten-4" >
			
			      <div class="row">
			        <div class="input-field col s4 offset-s4">
			          <input placeholder="Correo electrónico" id="first_name" type="text" class="validate" name="email" required>
			        </div>
			      </div>

			      <div class="row">
			        <div class="input-field col s4 offset-s4">
			          <input placeholder="Contraseña" id="password" type="password" class="validate" name="password" required>
			        </div>
			      </div>

			      <div class="row">
					  <input class="col s2 offset-s5 btn btn-primary" type="submit" value="Identificarse" name="action" id="btnenviar" name="btnEnviar" value="Enviar formulario">
				  </div>

				  <div class="respuesta" id="respuesta">
				  	
				  	
				  </div>

				  <div class="row">
				  	<a class="col s4 offset-s5" href="registro.html">Aún no estoy registrado</a>
				  </div>

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