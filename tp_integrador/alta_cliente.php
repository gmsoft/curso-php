<?php
    require_once('header.php');

    //conectarse a la base de datos
    $cn = getConnection();     

    if (isset($_POST['cliente_nombre'])) {
        //echo "<div style=\"color:green\">Formulario enviado</div>";
        $cliente_nombre = $_POST['cliente_nombre'];
        $cliente_apellido = $_POST['cliente_apellido'];
        if ($cliente_nombre == '') {
            echo "<div style=\"color:red\">Complete el campo nombre</div>";
        }
        $cliente_tipo_iva = $_POST['cliente_tipo_iva']; 
        $cliente_localidad = $_POST['cliente_localidad'];

        //Insertar un registro de cliente
        //$cn = getConnection();
        
        //Query a ejecutar
        $sql_insert = "INSERT INTO clientes (nombre, apellido, id_tipoiva, id_localidad)";
        $sql_insert .= " VALUES ('$cliente_nombre','$cliente_apellido', $cliente_tipo_iva, $cliente_localidad)";
        
        //Ejecuta la query de insercion
        $result_insert = mysqli_query($cn, $sql_insert);
        
        //Controla que la query se ejecute OK
        if ($result_insert) {
            echo '<span class="label label-success">Cliente creado con exito</span>';
        } else {
            echo '<span class="label label-danger">Error al crear cliente:' . mysqli_error($cn) . '</span>';
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
<form method="POST" action="alta_cliente.php" id="form-nuevo-cliente" class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-sm-2">Nombre</label>
        <div class="col-sm-4">            
            <input type="text" class="form-control" name="cliente_nombre" id="cliente_nombre" placeholder="Ingrese nombre del cliente" required="required">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2">Apellido</label>
         <div class="col-sm-4">     
            <input type="text" class="form-control" name="cliente_apellido" placeholder="Ingrese el apellido" required="required">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2">Razon Social</label>
         <div class="col-sm-4">  
            <input type="text" class="form-control" name="cliente_razon_social" required="required">
        </div>  
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2">Telefono</label>
         <div class="col-sm-4">  
            <input type="text" class="form-control" name="telefono_nombre">
         </div> 
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2">E-mail</label>
        <div class="col-sm-4">  
            <input type="email" class="form-control" name="cliente_email" required="required">
        </div>    
    </div>

     <div class="form-group">
        <label class="control-label col-sm-2">Tipo IVA</label>
        <div class="col-sm-4">  
            <select  class="form-control" name="cliente_tipo_iva">
                <option>Seleccione tipo de Iva</option>
                <?php
                $sql_tipos_iva = "SELECT id, descripcion, alicuota FROM tipos_iva";
                $result_tipos_iva = mysqli_query($cn, $sql_tipos_iva);
                while ( $row_tipos_iva = mysqli_fetch_assoc($result_tipos_iva ) ) {
                ?>                    
                    <option value="<?php echo $row_tipos_iva['id']; ?>" ><?php echo $row_tipos_iva['descripcion'];?> </option>
                <?php
                }   
                ?>
            </select>
         </div>
    </div>

     <div class="form-group">
        <label class="control-label col-sm-2">Localidad</label>
        <div class="col-sm-4"> 
            <select class="form-control" name="cliente_localidad">
                <option>Seleccione Localidad</option>
                <?php
                $sql_localidades = "SELECT id, nombre  FROM localidades";
                $result_localidades = mysqli_query($cn, $sql_localidades);
                while ( $row_localidades = mysqli_fetch_assoc($result_localidades ) ) {
                ?>                    
                    <option value="<?php echo $row_localidades['id']; ?>" >
                        <?php echo $row_localidades['nombre'];?>
                     </option>
                <?php
                }   
                ?>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2">Observaciones</label>
        <div class="col-sm-4"> 
            <textarea class="form-control" name="cliente_observaciones"></textarea>
        </div>
    </div>

     <div class="form-group">
       <div class="col-sm-4"> 
            <button class="btn btn-success" type="button" id="btn-guardar" name="btn-guardar" onclick="validarDatosCliente()">Guardar</button>
            <button class="btn btn-warning" id="btn-cancelar">Cancelar</button> |
            <input type="reset" value="Limpiar" class="btn">
        </div> 
    </div>
</form>



<?php
    require_once('footer.php');
?>