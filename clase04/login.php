<?php
session_start();//Le indico a PHP que voy a trabajar con sesiones
include_once('header.php');

//echo 'Mi nombre es :' . $_SESSION['nombre'];

//Si hago click en el link logout
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
     //Destruimos la variable de session
     unset($_SESSION['nombre_usuario']);
     //Le indica a PHP el fin de la sesion
     session_write_close();
     //Redireccionamos al Login
     header('location:login.php');
}

if (isset($_POST['btn-login'])) { // Si hacemos click en el boton login
     
     $usuario = $_POST['usuario'];//Valor de la caja de texto Usuario del formulario
     $clave = $_POST['clave'];//Valor de la caja de texto Clave del formulario

     $_SESSION['nombre_usuario'] = $usuario; //Asigno a la variable de sesion
     
     recordarUsuario();

     header('location:main.php');
}

function recordarUsuario() {
    //Si esta chequeado el control Recordarme
    if (isset($_POST['recordarme'])) {
        //Guardo en una cookie el nombre del usuario. La guardo por un año 
        // Un año = time() + 60 * 60 * 24 * 365
        setcookie( "usuario", $_POST["usuario"], time() + 60 * 60 * 24 * 365, "", "", false, true );
    }
}

function obtenerNombreUsuario() {
    //Si esta creada la cookie "usuario"
    if (isset($_COOKIE['usuario'])) {
        //Retorno el valor de la cookie
        return $_COOKIE['usuario'];
    } else {
        //Si no esta seteada la cookie, retorno una cadena vacia
        return "";
    }
}

?>
<form method="POST" name="login-form" action="login.php">
    Usuario: <input type="text" name="usuario" value="<?php echo obtenerNombreUsuario();?>"><br/>
    Clave: <input type="password" name="clave"><br/>
    Recordarme <input type="checkbox" name="recordarme" ><br/>

    <input type="submit" value="Ingresar" name="btn-login">
    
</form>

<?php
include_once('footer.php');  
?>