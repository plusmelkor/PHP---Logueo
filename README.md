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
