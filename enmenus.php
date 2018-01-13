<html>
<head>
	<meta charset="UTF-8">
	<title>Celery Restaurant</title>
  <link rel="stylesheet" type="text/css" href="css/menus.css">
  <link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="icon" href="multimedia/logo.png" type="image/x-icon"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/cambiarbarra.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/header.js"></script>
  <script src="js/jquery.vide.min.js"></script>
  <script src="js/irarriba.js"></script>
</head>
<body>
	<!--<header>
		<div class="wrapper">
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
            <li class="active"><a href="enmenus.php">Menu</a></li>
            <li><a href="enpedidos.php">Delivery</a></li>
            <li><a href="enreservas.php">Booking</a></li>
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

<section class="section">
<div class="bajartodo">

	<h6 align="center">*Want to see our full restaurant menu?, head to <a class="enlacepedidos" href="pedidos.php">Delivery</a></h6>

	<div><h3 align="center" class="fuentetitulos">Weddings</h3>
		
	<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="multimedia/boda2.png" style="width:100%;">
      </div>

      <div class="item">
        <img src="multimedia/cocktailboda2.png" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="multimedia/menusboda2.png" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div></div>
		

<div><h3 align="center" class="titulomenus">New year's eve</h3>
		
		<div class="container">
  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel2" data-slide-to="1"></li>
      <li data-target="#myCarousel2" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="multimedia/finano2.png" style="width:100%;">
      </div>

      <div class="item">
        <img src="multimedia/menu1finano.png" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="multimedia/menu2finano.png" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
		
<div><h3 align="center" class="titulomenus">Christmas dinner</h3>
		<div class="container">
  <div id="myCarousel3" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel3" data-slide-to="1"></li>
      <li data-target="#myCarousel3" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="multimedia/nochebuena.jpg" style="width:100%;">
      </div>

      <div class="item">
        <img src="multimedia/menu1nochebuena.png" style="width:100%;">
      </div>

      <div class="item">
        <img src="multimedia/menu2nochebuena.png" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel3" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div></div>


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
            <a href="menus.php">
            <img src="multimedia/español.jpg" title="Espanish" class="bandera"></a>
            <a href="enmenus.php">
            <img src="multimedia/ingles.png" title="English" class="bandera"></a>
          </div>
        
      </div>
      
    </section>
</body>
</html>