<?php

function getConnection() {
    $connect = mysqli_connect("localhost", "root", "", "sistema");

    if (!$connect) {
        //die("Error al conectar a la base de datos: " . mysqli_connect_error());
        echo "Error al conectar a la base de datos: " . mysqli_connect_error();
        exit();
    }
    return $connect;
}

function closeConnection($cn) {
    mysqli_close($cn);
}


/*
echo '<pre>';
print_r($connect);
echo '</pre>';
*/

//mysqli_close($connect);