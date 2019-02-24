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
