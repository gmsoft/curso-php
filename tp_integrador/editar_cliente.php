<?php
    require_once('header.php');

    $id_cliente = $_GET['id'];

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
        $sql_update = "UPDATE clientes SET nombre = '$cliente_nombre', apellido = '$cliente_apellido'";
        $sql_update .= ", id_tipoiva = $cliente_tipo_iva";
        $sql_update .= " WHERE id = $id_cliente";

        //die($sql_update);
        
        //Ejecuta la query de insercion
        $result_update = mysqli_query($cn, $sql_update);
        
        //Controla que la query se ejecute OK
        if ($result_update) {
            echo '<span class="label label-success">Cliente actualizado con exito</span>';
        } else {
            echo '<span class="label label-danger">Error al actualizar cliente:' . mysqli_error($cn) . '</span>';
        }
    }
    
    /*
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
    */

    

    $sql_clientes = "SELECT c.id, c.nombre, c.apellido, c.razon_social, c.telefono, id_tipoiva";
    $sql_clientes .= " FROM clientes c";
    $sql_clientes .= " WHERE id = $id_cliente";

     $result_clientes = mysqli_query($cn, $sql_clientes);
     $nombre_cliente = '';
     $apellido_cliente = '';
     $razon_social = '';
     $telefono_cliente = '';
     $id_tipoiva = '';
     while ( $row_clientes = mysqli_fetch_assoc($result_clientes ) ) {
         $nombre_cliente = $row_clientes['nombre']; 
         $apellido_cliente = $row_clientes['apellido'];
         $razon_social = $row_clientes['razon_social'];
         $telefono_cliente = $row_clientes['telefono'];
         $id_tipoiva = $row_clientes['id_tipoiva'];
     }
     ?>  


<hr/>
<h3> Edición de Cliente </h3>

<div id="mensaje-error" style="color:red"></div>
<form method="POST" action="editar_cliente.php?id=<?php echo $id_cliente; ?>" id="form-nuevo-cliente" class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-sm-2">Nombre</label>
        <div class="col-sm-4">            
            <input type="text" class="form-control" value="<?php echo $nombre_cliente; ?>" name="cliente_nombre" id="cliente_nombre" placeholder="Ingrese nombre del cliente" required="required">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2">Apellido</label>
         <div class="col-sm-4">     
            <input type="text" class="form-control" value="<?php echo $apellido_cliente; ?>" name="cliente_apellido" placeholder="Ingrese el apellido" required="required">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2">Razon Social</label>
         <div class="col-sm-4">  
            <input type="text" class="form-control" value="<?php echo $razon_social; ?>" name="cliente_razon_social" required="required">
        </div>  
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2">Telefono</label>
         <div class="col-sm-4">  
            <input type="text" class="form-control" value="<?php echo $telefono_cliente; ?>" name="telefono_nombre">
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
                    if ($id_tipoiva == $row_tipos_iva['id']) {
                        ?>                    
                            <option value="<?php echo $row_tipos_iva['id']; ?>" SELECTED ><?php echo $row_tipos_iva['descripcion'];?> </option>
                        <?php        
                    } else {
                        ?>                    
                            <option value="<?php echo $row_tipos_iva['id']; ?>" ><?php echo $row_tipos_iva['descripcion'];?> </option>
                        <?php
                    }
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