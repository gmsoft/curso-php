<?php session_start(); ?>
<html>
    <head>
        <title>Sistema</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <script src="js/validaciones.js"></script>
        <link rel="stylesheet" type="text/css" href="css/estilos.css" />
    </head>
<body>    
   
<?php
    require_once('database.php');

    if (isset($_SESSION['username'])) {//Si estoy logueado al sistema, mostrar el menu
        require_once('menu.php');
    } else {
        echo '<h3>Ingreso al sistema</h3>';
    }
    
?>