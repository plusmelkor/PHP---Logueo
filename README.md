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

## Tipo de dato	Bytes	Valor mínimo	Valor máximo

-------------------------
<table>
    <tr>
        <td>Foo</td>
    </tr>
</table>
+ TINYINT			1		0				255
+ SMALLINT		2		0				65535
+ MEDIUMINT		3		0				16777215
+ INT o INTEGER	4		0				4294967295
+ BIGINT			8		0				18446744073709551615
-------------------------

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

## Schedule

1. Creacion de Base de Datos - Nombre
2. Creacion de Tabla - Nombre de la Tabla
3. Creacion de Cinco Columnas - Nombres de Columna Especifico
4. Codigo ubicado en el servidor

Nota27.- login01.js necesita jQuery. Sin este se produce un error en la consola.

Nota28.- login02.html hace operativo todo lo relativo a la creacion de una cuenta y el logueo.

Nota29.- Que es Amazon Lightsail? Es un Servicio de AWS. Un VPS: o servidor virtual privado, es una partición virtual dentro de un servidor físico. Este método le permite a cada partición individual el uso exclusivo los recursos que le hayan sido asignados.

LAMP
===
Linux
Apache
MySQL/MariaDB
PHP

Nota30.- Que es SSH? Que es  PuTTY?
https://es.wikipedia.org/wiki/Secure_Shell
SSH es un servicio semejate a TELNET
Comando SCP
Use FileZila para subir los archivos al servidor virtual.

Nota31.- Amazon VPC es la capa de red de Amazon EC2. Capacidad de computación escalable. 
	1.- Entornos informáticos virtuales, conocidos como instancias
	2.- Imágenes de máquina de Amazon (AMI)
	3.- Tipos de instancias
	4.- Pares de claves (AWS almacena la clave pública y usted guarda la clave privada en un lugar seguro)
	5.- Amazon Elastic Block Store (Amazon EBS), conocidos como volúmenes de Amazon EBS
	6.- Grupos de seguridad
	7.- Redes virtuales que puede crear que están aisladas lógicamente del resto de la nube de AWS y que, opcionalmente, puede conectar a su propia red, conocidas como nubes privadas virtuales (VPC)

Nota32.- ¿Como subir una aplicacion a una instancia Amazon EC2 para ser ejecutada en dicha instancia?
Computacion en la nube.

Nota33.- Entorno = Instancia en terminologia AWS
Ejecutar base de datos MySQL
Conexion con su base de datos
Eliminacion de la base de datos
Amazon Relational Database Service - Amazon RDS
Capa Gratuita
Consola de administración de AWS
MySQL Workbench
Paso 1: crear una instancia de base de datos MySQL
 - Instancia de base de datos de clase db.t2.micro
 - 5 GB de almacenamiento
 - Backups automatizados activados con un periodo de retención de un día
Launch DB Instance
Seleccionar que Base de Datos
Opción MySQL en Dev/Test
Acceso público: Elija Yes. Se asignará una dirección IP para su instancia de base de datos de forma que pueda conectarse directamente a la base de datos desde su propio dispositivo
MySQL Workbench
bdprueba.cr4gqgzuhzdg.us-east-1.rds.amazonaws.com
La conexion es a traves del Endpoint por medio de un clente de BD
Necesitamos la direccion del servidor/usuario/contraseña

Nota34.- Red privada virtual (VPN): permite a los usuarios acceder a una red privada a través de una red pública como si estuvieran conectados directamente a esa red privada. 
Razones para una red.
 - Compartir recursos por ejemplo almacenamiento
 - Acceso a Base de Datos en una PC
 - Acceso a un servidor web que se encuentra en una PC de la red
¿Bajo que protocolos se consigue acceder a una Base de Datos en una red TCP/IP?
Motor de base de datos
Si tiene previsto conectarse a Motor de base de datos desde otro equipo, debe habilitar un protocolo, como TCP/IP. Es decir, las consultas a la base de datos se realizan a traves del protocolo TCP/IP, que es un protocolo de red. Igualmente que el protocolo HTTP para acceder a un servidor web esta sobre el protocolo TCP/IP.

HTTP <- TCP/IP
DB <- TCP/IP

CLIENTE HTTP --> SERVIDOR HTTP (AMAZON Lightsail) --> SERVIDOR DB
CLIENTE DB --> SERVIDOR DB (AMAZON RDB)

Nota35.- jQuery animate() - Manipula Multiples Propiedades
El metodo de JQuery animate() es usado para crear animaciones personalizadas. 

$(selector).animate({parametros},velocidad,callback);

Los parametros definen las propiedades CSS a ser animadas.
El parametro velociddad especifica la duracion del efecto. Puede tomar los siguentes valores: "slow", "fast", o milisegundos.
El parametro callback es una funcion a ser ejecutada despues que la animacion se completa.
De manera predeterminada, todos los elementos HTML tienen una posicion static, y no pueden ser movidos.
Para manipulara la posicion, hay que recordar primero que la propiedad posicion CSS del elemento a mover debe ser relative, fixed o absolute.
Se pueden concatenar animaciones.

Nota36.-
SVG es por Scalable Vector Graphics. Define graficos vectoriales en formato XML.
Ejemplo: https://codepen.io/ladyjellington/pen/vPrNjY

Fork : Bifurcación

Note37.- Archivo con extensión MD: Markdown Documentación Archivos. Archivos de MD se clasifican como archivos de desarrolladores en su mayoría utilizados por Markdown, una gran herramienta para convertir archivos de texto a versiones HTML para que los usuarios pueden crear archivos que son fáciles de leer y escribir.
Markdown: Leguaje de marcado ligero.
https://daringfireball.net/
https://daringfireball.net/projects/markdown/

Probamos los marcadore #, - y =. 
