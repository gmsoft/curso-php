<?php

global $nombre;
$nombre = 'MI VARIABLE GLOBAL';

echo $GLOBALS['nombre'];

/*
echo '<pre>';
print_r($GLOBALS);
echo '<pre>';
*/

die;


$clientes = array();

$clientes['0001']['nombre'] =  "Juan Perez";
$clientes['0001']['domicilio'] =  "San Martin 23";

$clientes['0002']['nombre'] =  "Luis Mercado";
$clientes['0002']['domicilio'] =  "Colon 150";
/*
echo '<pre>';
print_r($clientes);
echo '</pre>';
*/

?>

<table border="1">
    <tr>
        <td>Codigo</td>
        <td>Nombre</td>
        <td>Domicilio</td>
        <td>Accion</td>
    </tr>
<?php
    foreach ($clientes as $codigo => $datos_cliente) {        
?>
        <!-- Cuerpo de la tabla -->
        <tr>
            <td><?php echo $codigo; ?></td>
            <td><?php echo $datos_cliente['nombre']; ?></td>
            <td><?php echo $datos_cliente['domicilio']; ?></td>
            <td><a href="editar.php?nombre=<?php echo $datos_cliente['nombre'];?>&domicilio=<?php echo $datos_cliente['domicilio'];?>">Editar</a></td>
        </tr>
<?php        
    }
?>
</table>