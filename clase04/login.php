<?php
session_start();//Le indico a PHP que voy a trabajar con sesiones
include_once('header.php');

//echo 'Mi nombre es :' . $_SESSION['nombre'];

if (isset($_POST['btn-login'])) { // Si hacemos click en el boton login
     
     $usuario = $_POST['usuario'];//Valor de la caja de texto Usuario del formulario
     $clave = $_POST['clave'];//Valor de la caja de texto Clave del formulario

     $_SESSION['nombre_usuario'] = $usuario; //Asigno a la variable de sesion

     header('location:main.php');
}

?>
<form method="POST" name="login-form" action="login.php">
    Usuario: <input type="text" name="usuario"><br/>
    Clave: <input type="password" name="clave"><br/>
    <input type="submit" value="Ingresar" name="btn-login">
</form>

<?php
include_once('footer.php');  
?>