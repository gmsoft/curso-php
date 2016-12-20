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
  if ( isset( $_POST["email"] ) and isset( $_POST["password"] ) ) {
    //Valores que el usuario carga mediante el formulario
    $email = $_POST["email"];//Es el input del email
    $password = $_POST["password"];//Es el input de la clave
    $cn = getConnection();
    //Consulta a la base de datos
    $sql = "SELECT id, nombre, email FROM usuarios WHERE email = '$email' AND password = '$password'"; 
    $result_usuarios = mysqli_query($cn, $sql);//Ejecución de la consulta
    if ($result_usuarios) {
      $rows_usuarios = mysqli_num_rows($result_usuarios);
      if ($rows_usuarios == 0) {
        displayLoginForm( "Usuario y clave inexistente" );
      } else {
         $_SESSION["username"] = $email;
         session_write_close();
         closeConnection($cn);
         header( "Location: menu.php" );
      }
    } else {
       displayLoginForm( "Error en la consulta:" . mysqli_error($cn) );
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
    <form action="login.php" method="post" class="form-inline">
       
       <div class="form-group">
        <label for="username">E-mail</label>
        <input class="form-control"  type="email" name="email" id="username" value="" />
       </div>

       <div class="form-group">
          <label for="password">Clave</label>
          <input class="form-control" type="password" name="password" id="password" value="" />
       </div>
      
      <input class="btn btn-success" type="submit" name="login" value="Ingresar" />
        
    </form>  

    <?php if ( $message ) echo '<div><span class="label label-danger">' . $message . '</span></div>' ?>
<?php
}

require_once('footer.php');
?>


