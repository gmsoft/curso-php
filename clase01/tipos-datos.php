<?php

//Declaracion de constantes en PHP
define('APP', 'Datos Personales');

echo '<hr/>';

echo '<h2>' . APP . '</h2>';

//Tipo de dato string
$nombre = "Juan Perez";

echo '<u><b>Nombre:</b></u>' . strtoupper($nombre) . '<br/>';

//Tipo de dato int
$edad = 45;
echo "<u><b>Edad:</b></u>  $edad años<br/>";

//Tipo de dato float
$altura = 1.75;
echo '<u><b>Altura:</b></u>' . $altura . ' ' . strtolower('METROS') . '<br/>';

//echo '<u><b>Edad + Altura:</b></u>' . ($edad + $altura) . '<br/>';

//Tipo de dato Booleano (true / false)
$argentino = true;
echo "<u><b>Argentino:</b></u>  $argentino <br/>";

$cuenta_01 = 9;
$cuenta_02 = 5;
$suma = $cuenta_01 + $cuenta_02;
$capital = $suma * 1000;

echo '<u><b>Capital:</b></u>' . $capital . '<br/>';


//var_dump($altura);

?>


<u><strong>Fecha:</strong></u> <?php echo date('d/m/Y'); ?> <br/>
 
<!--
Comentario en HTML
-->

