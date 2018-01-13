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

<!--	<script language="javascript" src="js/jquery-1.3.min.js"></script>
<script language="javascript">
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

	      	<a href="inicio.php">
	      		<img class="moverimagenderecha" src="multimedia/logo.png" title="Celery Restaurant">
	      	</a>
	        
	        <ul class="right hide-on-med-and-down margencabeceras">
	          <li><a href="index.php">Inicio</a></li>
	          <li><a href="menus.php">Menu</a></li>
	          <li class="active"><a href="pedidos.php">Pedidos</a></li>
	          <li><a href="reservas.php">Reservas</a></li>
	          <li><a href="contacto.php">Contacto</a></li>
	           <?php
	          
					session_start();
					

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


<form id="formulario" method="post" action="pedido.php">

		<u><h4 class="bajartitulo tipoletra tamanotitulo" align="center">Aquí le mostramos toda nuestra oferta gastronómica</h4></u>
			
			<section class="section">
				<div class="tipoletra">
					
					<h5 class="margenbottomtitulos letratitulos" align="center"><u>Entrantes</u></h5>
					<div class="row">
						<div class="col s2 offset-s2">
							Jamón ibérico - 15€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="iberico" id="nombre" min="0">
						</div>

						<div class="col s2 offset-s1">
							Tabla de quesos - 11€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="quesos" min="0">
						</div>
						<div class="col s3 offset-s1">
							Tequeños de queso blanco 6'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="tequenos" min="0">
						</div>
					</div>
					<div class="row">
						<div class="col s2 offset-s2">
							Gambas al ajillo - 8'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="gambas" min="0">
						</div>
						<div class="col s2 offset-s1">
							Revuelto de setas - 11'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="setas" min="0">
						</div>
						<div class="col s3 offset-s1">
							Pimientos de piquillo rellenos de bacalao - 12'75€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="pimientos_bacalao" min="0">
						</div>
					</div>
					<div class="row">
						
						<div class="col s2 offset-s2">
							Tataki de atún rojo - 16€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="tataki" min="0">
						</div>
						<div class="col s2 offset-s1">
							Carpaccio de salmón - 10'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="carpaccio" min="0">
						 </div>
						<div class="col s3 offset-s1">
							Queso frito con mermelada de arándanos - 8€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="queso_arandanos" min="0">
						</div>
					</div>
				</div>

				<div class="margenentretipossopas tipoletra">
					<h5 class="margenbottomtitulos letratitulos" align="center"><u>Ensaladas</u></h5>
					<div class="row">
						
						<div class="col s2 offset-s2">
							Mixta - 7€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="ensalada_mixta" min="0">
						</div>

						<div class="col s2 offset-s1">
							De la casa - 7'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="ensalada_casa" min="0">
						</div>

						<div class="col s2 offset-s1">
							Templada - 8'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="ensalada_templ" min="0">
						</div>
					</div>
					<div class="row">
						<div class="col s2 offset-s2">
							César - 9€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="ensalada_cesar" min="0">
						</div>
					</div>
				</div>
			</section>

			<section class="section2">
				<div class="margenentretipos2 tipoletra">
					<h5 class="margenbottomtitulos letratitulos" align="center"><u>Sopas</u></h5>
					<div class="row">
						
						<div class="col s2 offset-s2">
							Sopa de picadillo - 8€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="picadillo" min="0">
						</div>

						<div class="col s2 offset-s1">
							Garbanzas - 7'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="garbanzas" min="0">
							
						</div>

						<div class="col s2 offset-s1">
							Sopa de cebolla - 8'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="cebolla" min="0">
						</div>
					</div>
					<div class="row">
						<div class="col s2 offset-s2">
							Crema de calabaza - 8€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="calabaza" min="0">
							
						</div>

						<div class="col s2 offset-s1">
							Sopa de brócoli con almejas - 9€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="brocoli_almejas" min="0">
							
						</div>

						<div class="col s3 offset-s1">
							Sopa de arroz con verduras y pollo - 9'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="sopa_arroz" min="0">
							
						</div>
					</div>
				</div>
			
				<div class="margenentretipossegplatos tipoletra subirsegplatos">
					<h5 class="margenbottomtitulos letratitulos" align="center"><u>Segundo plato</u></h5>
					<div class="row">

						<div class="col s2 offset-s2">
							Coliflor con bechamel y jamón - 9€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="coliflor" min="0">
						</div>

						<div class="col s2 offset-s1">
							Albóndigas de pollo y pimientos en salsa de champiñón - 9'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="albondigas" min="0">
						</div>

						<div class="col s3 offset-s1">
							Tortilla de calabacín con philadelphia - 10€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="tortilla" min="0">
						</div>
					</div>

					<div class="row">
						<div class="col s2 offset-s2">
							Pasta con salsa shiitake (Vegana) - 10'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="pasta" min="0">
						</div>

						<div class="col s2 offset-s1">
							Repollo con panceta de cerdo al eneldo - 11€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="repollo" min="0">
						</div>

						<div class="col s3 offset-s1">
							Estofado de habas, guisantes y alcachofas - 10€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="estofado" min="0">
						</div>
					</div>

					<div class="row">
						<div class="col s2 offset-s2">
							Calabacines rellenos - 12€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="calabacines" min="0">
						</div>

						<div class="col s2 offset-s1">
							Coles de Bruselas con granada y salsa de mostaza - 11'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="coles" min="0">
						</div>

						<div class="col s3 offset-s1">
							Calabacín frito con Salsa de yogur y ajo - 11€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="calabacin_yogurt" min="0">
						</div>
					</div>
				</div>

				
			
				<div class="margenentrepostres tipoletra">
					<h5 class="margenbottomtitulos letratitulos" align="center"><u>Postres</u></h5>
					<div class="row">
						
						<div class="col s2 offset-s2">
							Sorbete de Hierbabuena - 4€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="sorbete" min="0">
						</div>

						<div class="col s2 offset-s1">
							Flan napolitano - 5€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="flan" min="0">
						</div>

						<div class="col s2 offset-s1">
							Fondant de chocolate - 5'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="fondant" min="0">
						</div>
					</div>
					<div class="row">
						<div class="col s2 offset-s2">
							Cheese Cake de Guayaba - 4'50
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="cheesecake" min="0">
						</div>
						<div class="col s2 offset-s1">
							Panna cotta - 6'50€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="cotta" min="0">
						</div>
						<div class="col s2 offset-s1">
							Tiramisú - 6€
							<input type="number" size="3" maxlength="2" placeholder=" Nº" name="tiramisu" min="0">
						</div>
					</div>
					
				</div>

<?php
	          
					
					

				if(isset($_SESSION["USUARIO_NOMBRE"])){
					if($_SESSION["USUARIO_NOMBRE"] == ""){
					  echo "<div  class=\"row margenboton tipoletra\"><button  type=\"button\" class=\"btn btn-warning col s4 offset-s4\"><a href=\"identificarse.php\"> Debe iniciar sesión</a></button></div>";
					}else{
									
						echo "<div class=\"row margenboton tipoletra\">
					  <input class=\"col s3 offset-s1 btn btn-primary\" type=\"submit\" value=\"Realizar pedido\" name=\"action\" id=\"btnenviar\" name=\"btnEnviar\" value=\"Enviar formulario\">";
					}
				}else{
					echo "<div  class=\"row margenboton tipoletra\"><button  type=\"button\" class=\"btn btn-warning col s4 offset-s4\"><a href=\"identificarse.php\"> Debe iniciar sesión</a></button></div>";
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
    echo "<input class=\"col s2 offset-s1 btn btn-primary\" type=\"submit\" value=\"Ver último pedido\" name=\"action\" id=\"btnenviar\" name=\"btnEnviar\" value=\"Enviar formulario\">";
    ?>
    
</form>

<form id="formulario3" method="post" action="repetir_pedido.php">
    
    <?php
    
            if(isset($_SESSION["USUARIO_NOMBRE"]))
					if($_SESSION["USUARIO_NOMBRE"] != "")
    echo "<input class=\"moverboton col s3 offset-s1 btn btn-primary\" type=\"submit\" value=\"Repetir último pedido\" name=\"action\" id=\"btnenviar\" name=\"btnEnviar\" value=\"Enviar formulario\"></div>";
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
						<a href="pedidos.php">
						<img src="multimedia/español.jpg" title="Español" class="bandera"></a>
						<a href="enpedidos.php">
						<img src="multimedia/ingles.png" title="Inglés" class="bandera"></a>
					</div>
				
			</div>
			
		</section>
			

</body>
</html>