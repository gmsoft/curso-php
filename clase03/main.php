<?php

//REQUIRE: Incluye un archivo, si este no exite se produce un WARNING Y CONTINUA LA EJECUCION
include_once('funciones.php');

include_once('header.php');

//REQUIRE: Incluye un archivo, si este no exite se produce un ERROR FATAL
//require_once('funciones-matematicas.php');

echo 'Hoy es ' . obtenerFecha();


include_once('footer.php');
?>

