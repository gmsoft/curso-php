<?php
    require_once('header.php');
?>
    
<nav class="navbar navbar-default navbar-static-top">
 <div class="container-fluid"> 
     <div class="navbar-header">
         <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8" aria-expanded="false"> 
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> 
        
        <a href="#" class="navbar-brand">Sistema</a>
   </div>

   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
       <ul class="nav navbar-nav"> 
           <li class="active"><a href="menu.php">Inicio</a></li>
           <li><a href="alta_cliente.php">Nuevo Cliente</a></li>
           <li><a href="listado_clientes.php">Listado de Cliente</a></li>
           <li><a href="login.php?action=logout">Salir</a></li>
        </ul>
    </div> 
  </div> 
</nav>

<span id="mensaje-bienvenida-" class="label label-info">Bienvenido, <strong><?php echo $_SESSION["username"] ?></strong>!</span>

<!--
<div class="jumbotron text-center">
  <h1>Panel del sistema</h1>
  <p>...</p> 
</div>
-->