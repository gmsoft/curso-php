<?php
session_start();

$_SESSION['nombre'] = 'Gustavo';

echo 'Mi nombre es :' . $_SESSION['nombre'];  

?>