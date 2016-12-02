<?php
    require_once('header.php');
?>
<p id="mensaje-bienvenida">Bienvenido, <strong><?php echo $_SESSION["username"] ?></strong>!</p>    

<a class="opcion-menu" href="menu.php">Inicio</a> |
<a class="opcion-menu" href="alta_cliente.php">Nuevo Cliente</a> |
<a class="opcion-menu" href="listado_clientes.php">Listado de Cliente</a> |
<a class="opcion-menu" href="login.php?action=logout">Salir</a>


<div class="jumbotron text-center">
  <h1>Panel del sistema</h1>
  <p>...</p> 
</div>