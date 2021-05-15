<?php
// Autor: Sergio Gómez <sergio@uco.es>
<<<<<<< HEAD
print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
@print "Hola, {$nombre}\n";
=======
// El nombre por defecto es Mundo
require('HolaMundo.php');

$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
print new HolaMundo($nombre);
>>>>>>> aabe7df (hola usa la clase HolaMundo)
