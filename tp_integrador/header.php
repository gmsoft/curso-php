<?php
 session_start();
 print_r($_SESSION); 
?>
<html>
    <head>
        <title>Sistema</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

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