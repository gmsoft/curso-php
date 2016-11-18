<?php
    //Variable superglobal enviadas por el metodo POST del formulario
    $nombre = ucwords($_POST['nombre']);
    //$nombre = $_GET['nombre']; -> Si usamos el metodo 
    //GET en el action del formulario

    echo "Gracias $nombre por contactarte<br/>";
    echo '<a href="formulario.html">Volver</a>'
?>
