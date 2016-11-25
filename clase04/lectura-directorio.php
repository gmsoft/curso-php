<?php

include_once('header.php');

//Array de archivos
$archivos = array();

//Cuando hacemos click en el link Renombrar
if (isset ($_GET['archivo'])) { 
    $archivo = $_GET['archivo']; // El nombre del archivo a renombrar
    rename($archivo, 'nuevo-nombre.txt');//Renombra el archivo
}

/*
echo  'CONSTANT GLOBAL DIR:'  .  __DIR__;
echo  '<BR/>CONSTANT GLOBAL FILE:'  .  __FILE__;
echo  '<BR/>funcion dirname:'  .   dirname(__FILE__);
*/

//LEER EL DIRECTORIO
if ($gestor = opendir(__DIR__)) {
    //echo "Gestor de directorio: $gestor\n";
    //echo "Entradas:\n";
 
    // Esta es la forma correcta de iterar sobre el directorio. 
    while (false !== ($entrada = readdir($gestor))) {
        //echo "$entrada\n";
        if ($entrada != '.' && $entrada != '..') {
            $archivos[] = $entrada;
        }        
    }
 
    closedir($gestor);
}

echo '<br>';
$cantidad = count($_POST);

//Cuando se envia el formulario a traves del metodo POST
if($cantidad > 0) {
    
    /*echo '<pre>';
    print_r($_POST);
    die;*/

    //COPIAR ARCHIVO
    if (isset($_POST['copiar-archivo'])) {//Si hice click en el boton Copiar
        $archivo_origen = $_POST['archivo']; //Valor seleccionado en el combo/select Archivos
        $archivo_nuevo = $_POST['nuevo-archivo'];//Caja de texto con el nombre del nuevo archivo
        
        //Copio el archivo
        $copiado = copy($archivo_origen, $archivo_nuevo);
        if ($copiado) {
            echo "<div>Archivo copiado con exito. Archivo: $archivo_nuevo</div>";    
        } else {
            echo "<div>Error al copiar archivo. Archivo: $archivo_origen</div>";
        }       
    }
    
    //BORRAR ARCHIVO
    if (isset($_POST['borrar-archivo'])) {//Si hice click en el boton Borrar
        $archivo_origen = $_POST['archivo']; //Valor seleccionado en el combo/select Archivos
        $deleted = unlink($archivo_origen);

        if ($deleted) {
            echo "<div>Archivo eliminado con exito. Archivo: $archivo_origen</div>";    
        } else {
            echo "<div>Error al eliminar archivo. Archivo: $archivo_origen</div>";
        }
    }
}



?>

<hr/>
<form method="POST" action="lectura-directorio.php">
    <label>Origen: </label> 
    <select name="archivo">
<?php
        foreach($archivos as $file) {
?>        
        <option value="<?=$file?>"><?=$file?> - (<?php echo filesize($file); ?>)</option>
<?php
        }
?>
    </select>

    <br/>
    Destino: <input type="text" name="nuevo-archivo">

   
    <input type="submit" value="Copiar" name="copiar-archivo" >

    <input type="submit" value="Borrar" name="borrar-archivo" >

</form> 

<div>Listado de Archivos</div>
<ul>
<?php
foreach($archivos as $file) {
    echo "<li>$file <a href=lectura-directorio.php?archivo=$file> Renombrar</a></li>";
}
?>
</ul>


<?php
include_once('footer.php');
?>

