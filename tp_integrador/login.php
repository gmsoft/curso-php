<?php

define( "USERNAME", "admin" );
define( "PASSWORD", "admin" );

require_once('header.php');

if ( isset( $_POST["login"] ) ) {
  login();
} elseif ( isset( $_GET["action"] ) and $_GET["action"] == "logout" ) {
  logout();
} elseif ( isset( $_SESSION["username"] ) ) {
  displayPage();
} else {
  displayLoginForm();
}

function login() {
  if ( isset( $_POST["username"] ) and isset( $_POST["password"] ) ) {
    if ( $_POST["username"] == USERNAME and $_POST["password"] == PASSWORD ) {
      $_SESSION["username"] = USERNAME;
      session_write_close();
      header( "Location: menu.php" );
    } else {
      displayLoginForm( "Usuario y clave no valido. Intente nuevamente" );
    }
  }
}

function logout() {
  unset( $_SESSION["username"] );
  session_write_close();
  header( "Location: login.php" );
}

function displayPage() {  
?>
    <p>Bienvenido, <strong><?php echo $_SESSION["username"] ?></strong>!</p>
    <p><a href="login.php?action=logout">Salir</a></p>
<?php
}

function displayLoginForm( $message="" ) {  
?>
    <?php if ( $message ) echo '<p class="error">' . $message . '</p>' ?>

    <form action="login.php" method="post">
      <div style="width: 30em;">
        <label for="username">Usuario</label>
        <input type="text" name="username" id="username" value="" />
        <label for="password">Clave</label>
        <input type="password" name="password" id="password" value="" />
        <div style="clear: both;">
          <input type="submit" name="login" value="Ingresar" />
        </div>
      </div>
    </form>  
<?php
}

require_once('footer.php');
?>


