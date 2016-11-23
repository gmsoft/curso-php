<h3>Editar Cliente</h3>
<?php

//Nombre
$nombre = $_GET['nombre'];//Utilizamos la variable superglobal $_GET
echo 'Nombre:' . $nombre;

echo '<br>';

//Domicilio
$domicilio = $_GET['domicilio'];
echo 'Domicilio:' . $domicilio;

?>
<br/>
<a href="arreglo-multidimensional.php">Volver</a>