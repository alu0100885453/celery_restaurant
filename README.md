# Página en 000webhost: [gabrielfernandezca.000webhostapp.com](http://gabrielfernandezca.000webhostapp.com)


## Guía de usuario para la página [inicio](index.php)

Al entrar a la página del restaurante, lo primero que el usuario se encontrará será un inicio en donde podrá acceder a otras características como el menu o las reservas, entre otros. Además de encontrar a pie de página información acerca del restaurante. Desde aquí, ademas de a los ya nombrados, el usurio podrás accerder a diferentes lugares en donde podrá iniciar sesión, realizar un pedido al restaurante o ponerse en contacto con el mismo mediante el envío de un mensaje. Desde la propia página de inicio de sesión, si el usuario no tiene cuenta previa, podrá acceder para registrarse y de esa manera poder realizar pedidos en un futuro, ya que si un usuario no se ha registrado previamente, esta opción no estará disponible.



###  [Menú](menus.php)

Cuando el usuario acceda a esta página, encontrará los diferentes menús que el restaurante ofrece para una serie de ocasiones especiales como pueden ser una boda, o las cenas de nochebuena y fin de año, además de la información que se puede encontrar en todos los footer.



###  [Pedidos](pedidos.php)

En esta página se le ofrece al usuario información acerca de los diferentes platos con los que puede relizar un pedido(entrantes, ensaladas, sopas, segundos y postres), estos plato son los mismos que se encontrará en la carta del restaurante si va físicamente al mismo.



###  [Reservas](reservas.php)

Desde aquí, el usuario podrá realizar una reserva para acudir al restaurante. A la hora de realizarla, podrá elegir tanto el día como la hora(teniendo en cuenta el horario del restaurante) y el número de personas que acudirán a la misma. De forma opcional, se podrá añadir una observación en la que el usuario podrá especificar algo que considere que el personal de restaurante deba saber.



###  [Contacto](contacto.php)

En esta pestaña, el usuario podrá ponerse en contacto con el restaurante para lo que considere oportuno.(Dudas, reclamaciones...etc).



### [Iniciar sesión](identificarse.php) / [Registrarse](registro.html)

El usuario podrá acceder a su cuenta o, en caso de no poseer una, podrá, si lo desea, registrarse para poder en un futuro realizar pedidos al restaurante.


### Base de Datos

Para este proyecto usamos MySql con la ayuda de phpMyAdmin. Nos apoyamos en 4 tablas:

- Usuarios: contiene datos de los usuarios registrados: nombre, dni , email ... Si el usuario es un miembro del staff tendrá un una categoría especial que le permitirá acceder a zonas privadas de la página.
- Pedidos: almacena los pedidos mediante el DNI de las persona y los productos selecionados.
- Reservas: almacena la fecha, la hora, la cantidad de personas a comer, observaciones y DNI (si se esta logeado).
- Consultas: almacena datos y el mensaje al contactar con la página.


### Método de trabajo

Para la realización de este proyecto hemos trabajado reuniéndonos los 3 participantes para poder ayudarnos los unos a los otros, pero cada uno tenía una función específica de la cual se debía encargar. Siendo uno el encargado de realizar y administrar la base de datos y los otros dos participantes se han encargado del desarrollo de la interfaz web.


### Mejoras tras presentación del día 12/01/18

Como se nos comentó el día de la presentación, hemos añadido algunas mejoras a la aplicación web. Ahora el usuario tiene la opción de ver la última reserva realizada además de poder cancearla si así lo desea. De la misma manera, si se es un empleado del restaurante y se accede a la página como tal, en el apartado de reservas se podrá comprobar las diferentes reservas que tiene el restaurante para ese día y los dos días sucesivos.

Además, se ha añadido la opción de que un usuario no pueda realizar una reserva si ya existen 10 para ese día.

Como ejemplo de empleado del restaurante, puede accerder con el siguiente usuario:

Correo: empleado@restaurante.com
Contraseña: empleado


Al entrar a la página, ha de omitirse el https inicial, de lo contrario el contenido no se cargará correctamente.
