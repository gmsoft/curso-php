<?php

$nombre_archivo = "fichero.txt";

//echo file_get_contents($nombre_archivo);


//die;





if (file_exists($nombre_archivo)) {

    $archivo = fopen($nombre_archivo , "r");

    if ($archivo) {
        while (!feof($archivo)) {
            $linea = fgets($archivo, 255);
            echo $linea .'<br>';
        }
    }

    fclose ($archivo);
} else {
    echo 'El archivo ' . $nombre_archivo . ' no existe'; 
}



?>