# PHP-login
Un sistema simple de logueo para una applicacion Web con sesiones y el uso de hash para las contraseñas que hace uso de PHP, MySQL, phpMyAdmin y Bootstrap

¿Como usarlo?

1. Abre el panel de control de XAMPP.
2. Carga phpMyAdmin.
3. Crea una base de datos "PHPLogin".
4. Crea un tabla "users" con 4 campos (Id, Name, Email, Password).
5. Descarga y clona este repositorio.
6. Pon la carpeta "PHP-login-master" dentro de la carpeta "xampp". Especificante dentro de htdocs
7. Abre un pestaña del navegador y escribe "http://localhost/PHP-login-master/"
8. Entre la informacion de una cuenta y presione el boton "Create my account".
9. Comprueba si la informacion es correcta en la base de datos y si la contraseña hace uso de la funcion hash.
10. Has click "Login"
11. Ingresa el email y la contraseña que usaste parea crear tu cuenta y has click en login.
12. Si todo es bien, estaras logueado un SESSION para 1 minuto es creada.

Nota01.- Proyecto originalmente tomado de https://github.com/WilliamRiveraRamos/PHP-login

Nota02.- http://php.net/manual/es/security.hiding.php
	- La variable expose_php a Off
	- Configurar el servidor Web Apache para interpretar diversos ficheros por medio de PHP:
		a.- ya sea a traves de una directiva de .htaccess
		b.- el archivo de configuracion de Apache

Extension de ficheros engañosos o utilizar extensiones conocidas. El interprete PHP considera estos archivos como archivos PHP.

Nota03.- Para que sirve .htaccess?
¿Qué puede hacer exactamente .htaccess?

El archivo .htaccess de tu web será como la tabla de los mandamientos para el servidor Apache, que cumplirá estrictamente lo que se le indique en el archivo .htaccess.

No tiene porqué existir un solo archivo .htaccess, sino que puede existir un .htaccess para cada directorio si lo consideras necesario. El comportamiento de este archivo es jerárquico en el árbol de directorios de tu web, por lo que, si tienes un archivo .htaccess en el directorio raíz de la web, las instrucciones que indiques en ese archivo se aplicarán a toda la web. En cambio, si creas un archivo en alguna de las carpetas de tu web, las directrices de ese archivo solo se aplicarán al contenido de esa carpeta y subcarpetas, por lo que no afectará al resto de directorios de tu web.

Nota04.- 	01: Creacion de Base de Datos - Nombre
			02: Creacion de Tabla - Nombre de la Tabla
			03: Creacion de Cuatro Columnas - Nombres de Columna Especifico
			04: Codigo ubicado en el servidor

Nota05.- jquery -> popper -> bootstrap

Nota06.- Archivo scss: formato sass

Nota07.- CND - Content Delivery Network - Una Content Delivery Network (CDN o, en español, una “Red de distribución de contenido”) es un conjunto de servidores que contienen copias de una misma serie de contenidos (imágenes, vídeos, documentos, …)

Nota08.- https://uniwebsidad.com/libros/bootstrap-3/

Nota09.- login.hmtl requiere un css adicional que se encuentra. 
<link rel="stylesheet" href="css/custom.css">
<img src="images/php-mysql-logo.png" class="img-responsive" alt="PHP MySQL logos">

Nota10.-  
class="container-fluid"
 class="row"
  class="col-lg-12" - Una sola fila y una sola columna

   class="card" - clase hecha a medida - custom 
   class="loginBox" - las caracteristicas visuales de este div estan determinadas por su padre, es decir, card

Nota11.-
class = "form-group" : Para optimizar el espaciado, utiliza la clase .form-group para encerrar cada campo de formulario con su <label>.

Nota12.-
PHP 4 PHP 5 PHP 7
session_start — Comienza una sesion nueva y reanuda una sesion existente.

Nota13.-
password_verify — Comprueba que la contraseña coincida con un hash

Nota14.- Algoritmo Blowfish

Nota15.- Los arrays asociativos son arrays cuyos keys son strings con valores personalizados. Un array asociativo puede llevar también valores numéricos.

Nota16.- Una sesion es una forma de guardar informacion (en variables) a ser usada a traves de multiples paginas. No es como una cookie, la informacion no es guardada en la computadora del usuario.

Nota17.- Uno de los principales dificultades o detalles que pueden ocasionar un error en el nombre en la creacion de la base de datos y la tabla de usuarios para que el sistema de usuarios sea operativa. 
create-db01.php - con el nombre introducido en el cuadro de texto crea una base de datos. Hace uso de conn.php
create-db02.php - el nombre de la base de datos esta incluida en la variable: $dbname
create-db03.php - el nombre de la tabla y las columnas a ser creadas

Nota18.- Es conveniente que un sistema de usuarios tenga categorias diferentes de usuario. Esto permite que diversos usuarios tengan diversos privilegios.

Nota19.- ¿Cual es la razon del sintaxis de esta instrucción: $conn->query($sql)?
El operador de objeto -> es usada en el ambito del objeto para acceder a sus metodos y propiedades.
$conn es un objeto y query es un metodo

Nota20.- En create-db04.php consideramos a las bases de datos como objetos y hacemos uso de los metodos de esta clase de
objetos con el operador ->, creando una base de datos y una tabla dentro de esta.

Nota21.- Version de PHP Version 7.2.10

Nota22.- INT o INTEGER son 4 Bytes = 256e4

Tipo de dato	Bytes	Valor mínimo	Valor máximo

TINYINT			1		0				255
SMALLINT		2		0				65535
MEDIUMINT		3		0				16777215
INT o INTEGER	4		0				4294967295
BIGINT			8		0				18446744073709551615

Elegimos en la columna Atributos el valor de UNSIGNED y este campo ya no podrá contener valores negativos, duplicando su capacidad de almacenamiento.

Note23.- Restricción NOT NULL de SQL
Por defecto, una columna puede guardar valores NULOS.
La restricción NOT NULL fuerza a una columna a no aceptar valores NULOS.
Esto fuerza a que un campo contenga siempre un valor, lo que significa que puedes insertar un nuevo registro, o actualizarlo sin agregar un valor a este campo.

Note24.- MySQL usa la palabra reservada AUTO_INCREMENT para activar la caracteristica de auto incremento.
Por defecto, el valor inicial para AUTO_INCREMENT es 1, e incrementara en 1 con cada nuevo registro.
Para modificara el valor inicial de AUTO_INCREMENT, se usa el siguiente comando SQL: AUTO_INCREMENT=100.

Nota25.- El archivo create-db06.php implementa los detalles tratados en las Notas: 22, 23 y 24.

Nota26.- En create-db07.php implementamos el tipo de usuario como una columna en la tabla de usuarios de la Base de datos.
			Schedule
			--------
		 	01: Creacion de Base de Datos - Nombre
			02: Creacion de Tabla - Nombre de la Tabla
			03: Creacion de Cinco Columnas - Nombres de Columna Especifico
			04: Codigo ubicado en el servidor





