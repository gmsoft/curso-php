<?php
/*
//Definimos un arreglo en PHP
$lenguajes = array('PHP','VB6','Java','T-SQL');

echo '<pre>';
print_r($lenguajes);
echo '</pre>';

echo 'El mejor lenguaje es : ' . $lenguajes[0];

echo '<hr/>';

$so = array();
$so[0] = 'Linux';
$so[1] = 'Windows';
$so[2] = 'OS2';

echo '<pre>';
print_r($so);
echo '</pre>';

//Eliminar un array
unset($so[1]);//Elimina un elemento del array
//unset($so);//Elimina los elementos del array
//$so = array();//Elimino todos los elementos del array

echo '<pre>';
print_r($so);
echo '</pre>';

echo '<hr/>';

$cursos = array();
$cursos['A'] = 'Curso A';
$cursos['B'] = 'Curso B';
$cursos['C'] = 'Curso C';

echo '<pre>';
print_r($cursos);
echo '</pre>';
*/
//Array asociativo
$edades = array();
$edades['Melina'] = 25;
$edades['Yohana'] = 25;
$edades['Nico'] = 20;//el joven
$edades['Javier'] = 48;
$edades['Gustavo'] = 31;

?>

<table border="1">
    <tr>
        <td>Nombre</td>
        <td>Edad</td>
        <td>Pais</td>
    </tr>
<?php
    foreach ($edades as $nombre => $edad) {
        //echo '<tr><td>' . $nombre . '</td><td>' . $edad . '</td></tr>';
?>
        <!-- Cuerpo de la tabla -->
        <tr>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $edad; ?></td>
            <td>Argentina</td>
        </tr>
<?php        
    }
?>
</table>


<?php
?>
