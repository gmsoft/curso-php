<?php
include_once('funciones.php');
include_once('header.php');
?>

<form action="enviar-formulario.php" method="POST">
    
    <div>Nombre:</div>
    <input type="text" name="nombre">

    <div>Provincia</div>
    <select name="provincia">
        <option value="0">Seleccione provincia</option>
        <option value="1">Cordoba</option>
        <option value="2">Santa Fé</option>
        <option value="3">Mendoza</option>
    </select>

    <div>Sexo</div>
    <input type="radio" name="sexo" value="female">Femenino
    <input type="radio" name="sexo" value="male">Masculino

    <div>Comentarios:</div>
    <textarea name="comentarios" rows="5" cols="20"></textarea>

    <input type="submit" name="enviar" value="Enviar">

</form>

<?php
include_once('footer.php');
?>


