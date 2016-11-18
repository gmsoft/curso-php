<?php

$dia = date('d');
//var_dump($dia);
//echo gettype($dia);

echo '<br/>';

if ($dia === "18") {
    echo 'Dia ' . $dia;
} else {
    echo 'No es el día nro 18. Es el día nro '. $dia;
}

echo '<br/>Repetitiva While<br/>';
$i = 1;
while( $i<= 5 ) {
    echo "Iteración " . $i ;
    echo "<br />";
    $i++;
}

echo '<br/>Repetitiva FOR<br/>';
$i = 1;
for ($i = 1; $i <= 5; $i++) {
    echo " Iteración " . $i ;
    echo "<br />";
}

echo '<br/>Repetitiva FOREACH<br/>';
$x = array("uno","dos","3");
foreach ($x as $clave => $valor) {
    echo $clave . ' - '  . $valor . "<br />";
}

?>