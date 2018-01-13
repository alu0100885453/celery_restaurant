<html>
<head>
	<meta charset="UTF-8">
	<title>Celery Restaurant</title>
	
	<link rel="stylesheet" type="text/css" href="css/inicio.css">
	<link rel="stylesheet" type="text/css" href="css/materializeinicio.css">
	<link rel="icon" href="multimedia/logo.png" type="image/x-icon"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="js/header.js"></script>
	<script src="js/jquery.vide.min.js"></script>
	<script src="js/cambiarbarra.js"></script>
	<script src="js/irarriba.js"></script>

	

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
	      	<a href="#">
	      		<img class="moverimagenderecha" src="multimedia/logo.png" title="Celery Restaurant">
	      	</a>
	        
	        <ul class="right hide-on-med-and-down margencabeceras">
	          <li class="active"><a href="inicio.php">Inicio</a></li>
	          <li><a href="menus.php">Menu</a></li>
	          <li><a href="pedidos.php">Pedidos</a></li>
	          <li><a href="reservas.php">Reservas</a></li>
	          <li><a href="contacto.php">Contacto</a></li>

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

		<section class="section inner">
		<div id="video" data-vide-bg="multimedia/video2.mp4" data-vide-options="position: 0% 0%"></div>

		<h6 class="nombre">
			CELERY
		<br>
			S/C DE TENERIFE,TENERIFE
		</h6>
		<p>&nbsp;</p>
		<p>
			<a href="reservas.php" class="a">Reservas</a>
		</p>

	</section>

	<section class="sectionmenu" >

			<!--<div>
				<img src="https://www.quay.com.au/wp-content/uploads/2016/08/quay-image-for-home-page-2.jpg" class="style" style="height: 751.807px; width: 1349px; transform: translate3d(0px, 0px, 0px) scale(1.115, 1.115);"></img>
			</div>-->

			<div class="container">
				<div class=" menu-content inner hidden-xs">
					<h2 class="menu-title">MENU</h2>
					<p>&nbsp;</p>
					<p>
						<a href="pedidos.php" class="a">Ver menu</a>
					</p>
				</div>	
			</div>
		</section>

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
							<a class="blanco" href="inicio.php">Inicio</a>
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
						<a href="inicio.php">
						<img src="multimedia/español.jpg" title="Español" class="bandera"></a>
						<a href="eninicio.php">
						<img src="multimedia/ingles.png" title="Inglés" class="bandera"></a>
					</div>
				
			</div>
			
		</section>
		
	
</body>
</html>