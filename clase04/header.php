<html>
    <head>
        <title>Sistema</title>
    </head>
<body>
    <h3>Sistema de Gestion</h3>     
<?php 
    if (isset($_SESSION['nombre_usuario'])) {
        echo 'Hola ' . $_SESSION['nombre_usuario'] . '!!!';
        echo '<p><a href="login.php?action=logout">Salir</a></p>';
    }
    
?>
    <hr/>
<?php
    //include('menu.php');
?>