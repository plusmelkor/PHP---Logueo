INTRODUCCION
------------
Markdown es una herramienta de conversion de texto a HTML para escribir en web. Markdown te permite escribir un formato de texto plano facil de leer, para convertir a XHTML o HTML.

Asi, "Markdown" es dos cosas:
1. un sintaxis para formateo de texto plano
2. una herramiento de software, escrita en Perl, que convierte texto plano formateado en HTML. 

La meta principal del formato Markdown es hacer que sea lo mas legible posible. La idea es que un documento Markdown sea publicable "tal como es", como texto plano, sin la necesidad de marcadores o instrucciones de formato. Aunque el sintaxis de Markdown ha sido influenciado por muchos filtros de texto a HTML, su mas origen de inspiracion es el formato de texto plano para email.

La mejor forma es comprender la sintaxis Markdown es ver en un documento formatedo segun Markdown. Por ejemplo,
puedes ver el original texto Markdown para el texto del articulo en esta pagina aqui: http://daringfireball.net/projects/markdown/index.text

(Puedes usar el sufijo '.text' para poder ver la fuente del texto Markdown para el contenido de las paginas en esta seccion)

Markdown es un software libre, disponible bajo una licencia estilo BSD.

Nota 01.- Markdown 1.0.1 [Download](http://daringfireball.net/projects/downloads/Markdown_1.0.1.zip)

Nota 02.- Perl es un lenguaje de propósito general originalmente desarrollado para la manipulación de texto y que ahora es utilizado para un amplio rango de tareas incluyendo administración de sistemas, desarrollo web, programación en red, desarrollo de GUI y más.

Nota 03.- Padre. the Perl IDE/editor

Nota 04.-

Schedule
--------
1. Padre. Descarga e instalación de Padre viene con Strawberry Perl version 5.12.3. [Download](http://code.google.com/p/padre-perl-ide/downloads/list)
2. Python. Se puede elaborar Markdown en Python o en Ruby?
3. Instalacion de Strawberry Perl
4. Probamos la instalación con la instruccion: perl -v
5. Despues ejecutamos la instrucción: cpan App::cpanminus
6. Que es cpan? CPAN es el acrónimo de Comprehensive Perl Archive Network. Es un enorme archivo de software escrito en Perl, así como de documentación sobre el mismo. Tiene presencia en la Web a través de su sitio www.cpan.org y sus 267 espejos distribuidos por todo el mundo.

Serian como las gemas de Ruby?

7. Comparamos las declaracion de variables y la salida de una cadena de texto tanto en Perl como en Ruby y mas alla de la caracteristicas propias como el simbolo $ delante de la variable  y la terminacion en cada linea con un ; son sustancialmente lo mismo.
8. Diferencia entre puts y print en Ruby

PUTS

a puts se le pueden 'pasar' varios 'parametros' separados por 'comas'. En tal caso, 'pinta' las parametros cada uno en una linea.

PRINT

print funciona de forma parecida a puts, pero siempre en la misma linea, es decir si le pasamos varios parametros(separados por comas) seguirá escribiendo en la misma linea.

9. Shebang es, en la jerga de Unix, el nombre que recibe el par de caracteres #! que se encuentran al inicio de los programas ejecutables interpretados.

Un script en Perl, igual que en Bash y Python, debe contener como primera línea al shebang, el cual, indica qué interpretador será utilizado para ejecutar el script. En caso de que no la contenga se tiene que indicar qué intérprete es necesario a la hora de ejecutar el script.

10. # Para los comentatios en una linea. A partir de la segunda linea posterior al Shebang.
11. Creacion de un Modulo de Perl y Uso de un Modulo de Perl

Un paquete Perl es un coleccion de codigo y un modulo Perl es un paquete definido en un archivo con el mismo nombre del paquete y que tiene al extension .pm. Un paquete vive en propio espacio de nombres. Lo que significa que dos diferentes modulos pueden contener una funcion o una variable con el mismo nombre.

La sentencia package intercambia el contexto de nombres actual a un espacio de nombres (tabla de simbolos)

+ Un paquete es una colección de codigo que vive en su propio espacio de nombres.
+ Un espacio de nombres es una coleccion de los nombres de las variables (tambien llamado tabla de simbolos).
+ El espacio de nombres evita la colision entre los nombres de las variables de los distintos paquetes.
+ Los paquetes permiten la construccion de modulos que, cuando son usados, sus variables y funciones no tendran existencia fuera de su espacio de nombres.
+ Un paquete tiene eficacia hasta otra sentencia package es invocada, o hasta el fin del bloque actual o archivo.
+ Puedes referirte a variables en un paquete usando el operador :: (operador de contexto).

12. Markdown se puede hacer en Ruby
13. Perl motto - "There's More Than One Way To Do It" - TMTOWTDI
14. The 'Hello World' example is the traditional incantation to the programming gods and will ensure your quick mastery of the language.

incantation = conjuro - invocación - ruego - plegaria

El ejemplo de 'Hola Mundo' es la invocacion a los dioses de la programacion y te asegura conseguir un rapido dominio del lenguaje.

15. En Perl existen los operadores &&(and) e (or), en Ruby existen? Estos operadores son entre los digitos en binario de los numeros entre los que se opera. En Ruby en principio no hay esta clase de operadores.
16. Expresiones Regulares el Perl, Ruby y Javascript. Por ejemplo, la expresión regular [(][\d\s\+\-\/\*]+[)] busca en una cadena de caracteres que representan operaciones aritmeticas al expresion entre parentesis mas profunda, para posteriormente evaluarlos.
+ Comienza con apertura de parentesis
+ Es un digito o varios, o
+ Es + o varios, o
+ Es - o varios, o
+ Es / o varios, o
+ Es * o varios, o
+ Termina en cerradura de parentesis
17. Algunos aspectos de la transformacion de un archivo MD en HTML es bastante simple de duplicar usando Ruby y Expresiones Regulares. 





