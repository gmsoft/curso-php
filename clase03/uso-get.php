<?php
/*
echo '<pre>';
print_r($_GET);
echo '<pre>';
*/

if( isset($_GET['nombre']) ) {
    
    echo 'Hola ' . $_GET['nombre'] . '<br/>';
}




?>
<a href="uso-get.php?nombre=Gustavo">Saludar</a>