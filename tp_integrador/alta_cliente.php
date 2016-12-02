<?php
    require_once('header.php');

    if (isset($_POST['cliente_nombre'])) {
        //echo "<div style=\"color:green\">Formulario enviado</div>";
        $cliente_nombre = $_POST['cliente_nombre'];
        $cliente_apellido = $_POST['cliente_apellido'];
        if ($cliente_nombre == '') {
            echo "<div style=\"color:red\">Complete el campo nombre</div>";
        }
    }
    /*
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';*/

?>
<hr/>
<h3> Nuevo Cliente </h3>

<div id="mensaje-error" style="color:red"></div>
<form method="POST" action="alta_cliente.php" id="form-nuevo-cliente" class="form-vertical">
    <div class="form-group">
        <label class="control-label col-sm-1">Nombre</label>
        <div class="col-sm-4">            
            <input type="text" class="form-control" name="cliente_nombre" id="cliente_nombre" placeholder="Ingrese nombre del cliente" required="required">
        </div>
    </div>

    <div>
        <label>Apellido</label>
        <input type="text" name="cliente_apellido" required="required">
    </div>

    <div>
        <label>Razon Social</label>
        <input type="text" name="cliente_razon_social" required="required">
    </div>

    <div>
        <label>Telefono</label>
        <input type="text" name="telefono_nombre">
    </div>

    <div>
        <label>E-mail</label>
        <input type="email" name="cliente_email" required="required">
    </div>

    <div>
        <label>Tipo IVA</label>
        <select name="cliente_tipo_iva">
            <option></option>
        </select>
    </div>

    <div>
        <label>Localidad</label>
        <select name="cliente_localidad">
            <option></option>
        </select>
    </div>

    <div>
        <label>Observaciones</label>
        <textarea name="cliente_observaciones"></textarea>
    </div>

    <div>
        <button class="btn btn-success" type="button" id="btn-guardar" name="btn-guardar" onclick="validarDatosCliente()">Guardar</button>
        <button class="btn btn-warning" id="btn-cancelar">Cancelar</button> |
        <input type="reset" value="Limpiar">
    </div>
</form>



<?php
    require_once('footer.php');
?>