# PHP-login
Un sistema simple de logueo para una applicacion Web con sesiones y el uso de hash para las contraseñas que hace uso de PHP, MySQL, phpMyAdmin y Bootstrap

¿Como usarlo?

1. Abre el panel de control de XAMPP.
2. Carga phpMyAdmin.
3. Crea una base de datos "PHPLogin".
4. Crea un tabla "users" con 4 campos (Id, Name, Email, Password).
5. Descarga y clona este repositorio.
6. Pon la carpeta "PHPLogin" dentro de la carpeta "xampp".
7. Abre un pestaña del navegador y escribe "localhost:8080/PHPLogin"
8. Entre la informacion de una cuentea y presione el boton "Create my account".
9. Check if the info. is correct on the database and if the password is a hash.
10. Go back to your browser and click "Login"
11. Enter the email and password you use when created your account and click login.
12. If everything is ok, you are log in and a SESSION for 1 minute is created.