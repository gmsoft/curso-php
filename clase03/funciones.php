<?php

 /**
  * A summary informing the user what the associated element does.
  *
  * A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
  * and to provide some background information or textual references.
  *
  * @param string $myArgument With a *description* of this argument, these may also
  *    span multiple lines.
  *
  * @return void
  */
  
//Function SIN Retorno (PROCEDURE)
function depurar($variable) {
    echo '<pre>';
    print_r($variable);
    echo '</pre>';
}

//depurar($_SERVER);

$clientes = array();
$clientes[]  = 'Marisa';
$clientes[]  = 'Juan';
$clientes[]  = 'Pedro';


//depurar($clientes);

//Function CON Retorno
function obtenerFecha() {
    $day = date('d/m/Y');
    return $day;
}
//echo getDay();

function getValor($idioma = 'Espanol') {
    if ($idioma == 'Ingles') {
        return 'Hello';
    } else {
        return 'Hola';
    }
}

//echo getValor('Ingles');





?>