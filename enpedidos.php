<html>
<head>
	<meta charset="UTF-8">
	<title>Celery Restaurant</title>
	<link rel="stylesheet" type="text/css" href="css/pedidos.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="icon" href="multimedia/logo.png" type="image/x-icon"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/cambiarbarra.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="js/irarriba.js"></script>

	<script language="javascript" src="js/jquery-1.3.min.js"></script>
<!--script language="javascript">
$(document).ready(function() {
    $().ajaxStart(function() {
        $('#loading').show();
        $('#result').hide();
    }).ajaxStop(function() {
        $('#loading').hide();
        $('#result').fadeIn('slow');
    });
    $('#form, #fat, #fo3').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#result').html(data);

            }
        })
        
        return false;
    }); 
})  
</script-->
<!--script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script>   
$(function(){
 $("#btn_enviar").click(function(){
 var url = "pedido.php"; // El script a dónde se realizará la petición.
    $.ajax({
           type: "POST",
           url: url,
           data: $("#fo3").serialize(), // Adjuntar los campos del formulario enviado.
           success: function(data)
           {
               $("#respuesta").html(data); // Mostrar la respuestas del script PHP.
           }
         });

    return false; // Evitar ejecutar el submit del formulario.
 });
});
</script-->
	
	<script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
    <script src="js/enviar.js"></script>
</head>
<body>
<!--	<header class="pabajo">
		<div class="wrapper">
			<div class="logo"><img height="100px" width="150px" src="logo.jpg"></div>
			
			<nav class="menu-fixed">
				<div class="logo">Celery</div>
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
	          <li class="active"><a href="enpedidos.php">Delivery</a></li>
	          <li><a href="enreservas.php">Booking</a></li>
	          <li><a href="encontacto.php">Contact</a></li>
	           <?php
	          
					session_start();
					

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


	<form id="formulario" method="post" action="pedido.php">

		<u><h4 class="bajartitulo tipoletra tamanotitulo" align="center">Here you have all our dishes</h4></u>
			
			<section class="section">
				<div class="tipoletra">
					
					<h5 class="margenbottomtitulos letratitulos" align="center"><u>Starters</u></h5>
					<div class="row">
						<div class="col s2 offset-s2">
							Iberian ham - 15€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="iberico" id="nombre" min="0">
						</div>

						<div class="col s2 offset-s1">
							Cheeses selection - 11€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="quesos" min="0">
						</div>
						<div class="col s3 offset-s1">
							Cheese sticks 6'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="tequenos" min="0">
						</div>
					</div>
					<div class="row">
						<div class="col s2 offset-s2">
							Sauteed prawns - 8'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="gambas" min="0">
						</div>
						<div class="col s2 offset-s1">
							Stirred of mushrooms - 11'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="setas" min="0">
						</div>
						<div class="col s3 offset-s1">
							Cod filled peppers - 12'75€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="pimientos_bacalao" min="0">
						</div>
					</div>
					<div class="row">
						
						<div class="col s2 offset-s2">
							Red tuna tataki - 16€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="tataki" min="0">
						</div>
						<div class="col s2 offset-s1">
							Salmon carpaccio - 10'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="carpaccio" min="0">
						 </div>
						<div class="col s3 offset-s1">
							Fried cheese with cranberry jam - 8€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="queso_arandanos" min="0">
						</div>
					</div>
				</div>

				<div class="margenentretipossopas tipoletra">
					<h5 class="margenbottomtitulos letratitulos" align="center"><u>Salads</u></h5>
					<div class="row">
						
						<div class="col s2 offset-s2">
							Mixed - 7€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="ensalada_mixta" min="0">
						</div>

						<div class="col s2 offset-s1">
							Ownmade - 7'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="ensalada_casa" min="0">
						</div>

						<div class="col s2 offset-s1">
							Tempered - 8'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="ensalada_templ" min="0">
						</div>
					</div>
					<div class="row">
						<div class="col s2 offset-s2">
							Caesar - 9€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="ensalada_cesar" min="0">
						</div>
					</div>
				</div>
			</section>

			<section class="section2">
				<div class="margenentretipos2 tipoletra">
					<h5 class="margenbottomtitulos letratitulos" align="center"><u>Soups</u></h5>
					<div class="row">
						
						<div class="col s2 offset-s2">
							Picadillo soups - 8€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="picadillo" min="0">
						</div>

						<div class="col s2 offset-s1">
							Chickpeas soup - 7'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="garbanzas" min="0">
							
						</div>

						<div class="col s2 offset-s1">
							Onion soup - 8'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="cebolla" min="0">
						</div>
					</div>
					<div class="row">
						<div class="col s2 offset-s2">
							Pumpkin cream - 8€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="calabaza" min="0">
							
						</div>

						<div class="col s2 offset-s1">
							Broccoli and clam soup - 9€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="brocoli_almejas" min="0">
							
						</div>

						<div class="col s3 offset-s1">
							Rice soup with vegetables and chicken - 9'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="sopa_arroz" min="0">
							
						</div>
					</div>
				</div>
			
				<div class="margenentretipossegplatos tipoletra subirsegplatos">
					<h5 class="margenbottomtitulos letratitulos" align="center"><u>Main courses</u></h5>
					<div class="row">

						<div class="col s2 offset-s2">
							Cabbage with bechamel and ham - 9€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="coliflor" min="0">
						</div>

						<div class="col s2 offset-s1">
							Chicken meatballs and peppers with mushrooms sauce - 9'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="albondigas" min="0">
						</div>

						<div class="col s3 offset-s1">
							Zucchini omelette with cream cheese - 10€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="tortilla" min="0">
						</div>
					</div>

					<div class="row">
						<div class="col s2 offset-s2">
							Pasta with shiitake sauce (Vegan) - 10'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="pasta" min="0">
						</div>

						<div class="col s2 offset-s1">
							Cabbage with bacon and dill - 11€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="repollo" min="0">
						</div>

						<div class="col s3 offset-s1">
							Broad beans, peas and artichoke stew - 10€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="estofado" min="0">
						</div>
					</div>

					<div class="row">
						<div class="col s2 offset-s2">
							Filled zucchini - 12€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="calabacines" min="0">
						</div>

						<div class="col s2 offset-s1">
							Brussels sprouts with pomegranade and mustard sauce - 11'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="coles" min="0">
						</div>

						<div class="col s3 offset-s1">
							Fried zucchini with yogurt sauce - 11€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="calabacin_yogurt" min="0">
						</div>
					</div>
				</div>

				
			
				<div class="margenentrepostres tipoletra">
					<h5 class="margenbottomtitulos letratitulos" align="center"><u>Desserts</u></h5>
					<div class="row">
						
						<div class="col s2 offset-s2">
							Peppermint sorbet - 4€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="sorbete" min="0">
						</div>

						<div class="col s2 offset-s1">
							Napolitan flan - 5€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="flan" min="0">
						</div>

						<div class="col s2 offset-s1">
							Chocolate fondant - 5'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="fondant" min="0">
						</div>
					</div>
					<div class="row">
						<div class="col s2 offset-s2">
							Guava cheesecake - 4'50
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="cheesecake" min="0">
						</div>
						<div class="col s2 offset-s1">
							Panna cotta - 6'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="cotta" min="0">
						</div>
						<div class="col s2 offset-s1">
							Tiramisu - 6€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="tiramisu" min="0">
						</div>
					</div>
					
				</div>

<?php
	          
					
					

				if(isset($_SESSION["USUARIO_NOMBRE"])){
					if($_SESSION["USUARIO_NOMBRE"] == ""){
					  echo "<div  class=\"row margenboton tipoletra\"><button  type=\"button\" class=\"btn btn-warning col s4 offset-s4\"><a href=\"identificarse.php\"> You must log in first</a></button></div>";
					}else{
									
						echo "<div class=\"row margenboton tipoletra\">
					  <input class=\"col s2 offset-s1 btn btn-primary\" type=\"submit\" value=\"Do order\" name=\"action\" id=\"btnenviar\" name=\"btnEnviar\" value=\"Enviar formulario\">";
					}
				}else{
					echo "<div  class=\"row margenboton tipoletra\"><button  type=\"button\" class=\"btn btn-warning col s4 offset-s4\"><a href=\"identificarse.php\"> You must log in first</a></button></div>";
					}
				?>


				<!--<div class="row margenboton tipoletra">
					  <input class="col s4 offset-s4 btn btn-primary" type="submit" value="Realizar pedido" name="action">
				</div> -->
</form>
<form id="formulario2" method="post" action="ultimo_pedido.php">
    
    <?php
    
				if(isset($_SESSION["USUARIO_NOMBRE"]))
					if($_SESSION["USUARIO_NOMBRE"] != "")
    echo "<input class=\"col s3 offset-s1 btn btn-primary\" type=\"submit\" value=\"See last order\" name=\"action\" id=\"btnenviar\" name=\"btnEnviar\" value=\"Enviar formulario\">";
    ?>
    
</form>

<form id="formulario3" method="post" action="repetir_pedido.php">
    
    <?php
    
            if(isset($_SESSION["USUARIO_NOMBRE"]))
					if($_SESSION["USUARIO_NOMBRE"] != "")
    echo "<input class=\"moverboton col s3 offset-s1 btn btn-primary\" type=\"submit\" value=\"Repeat last order\" name=\"action\" id=\"btnenviar\" name=\"btnEnviar\" value=\"Enviar formulario\"></div>";
    ?>
    
</form>
<div class="respuesta" id="respuesta"></div>
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
            <a href="pedidos.php">
            <img src="multimedia/español.jpg" title="Espanish" class="bandera"></a>
            <a href="enpedidos.php">
            <img src="multimedia/ingles.png" title="English" class="bandera"></a>
          </div>
        
      </div>
      
    </section>
			

</body>
</html>