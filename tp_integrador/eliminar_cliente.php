<?php
    require_once('database.php');
    //print_r($_GET);
    //TODO: Eliminar el cliente de la base de datos
    $id_cliente = $_GET['id']; 
    $cn = getConnection();
    $result = mysqli_query($cn, 'DELETE FROM clientes WHERE id = ' . $id_cliente);     

?>