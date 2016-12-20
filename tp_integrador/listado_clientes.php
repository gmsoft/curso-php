<?php
require_once('header.php');

//Conexion a la base de datos
$cn = getConnection();

?>
<br/>
<h3> Listado de Clientes </h3>
<table id="tabla-clientes" class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Razon Social</th>
            <th>Telefono</th>
            <th>Tipo Iva</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    
    <?php
    //Consulta de Clientes
     $sql_clientes = "SELECT c.id, c.nombre, c.apellido, c.razon_social, c.telefono, i.descripcion as tipo_iva";
     $sql_clientes .= " FROM clientes c";
     $sql_clientes .= " INNER JOIN tipos_iva i ON c.id_tipoiva = i.id";
     $sql_clientes .= " ORDER BY c.nombre";

     $result_clientes = mysqli_query($cn, $sql_clientes);
     while ( $row_clientes = mysqli_fetch_assoc($result_clientes ) ) {        
     ?>
        <tr>
            <td><?php echo $row_clientes['nombre'];?></td>
            <td><?php echo $row_clientes['apellido'];?></td>
            <td><?php echo $row_clientes['razon_social'];?></td>
            <td><?php echo $row_clientes['telefono'];?></td>
            <td><?php echo $row_clientes['tipo_iva'];?></td>
            <td>
                <a class="btn btn-primary" href="editar_cliente.php?id=<?php echo $row_clientes['id']?>"> Editar</a> |
                <a class="btn btn-danger" onclick="confirmarBorrado(<?php echo $row_clientes['id']?>)"> Eliminar</a>
            </td>
        </tr>
    <?php
     }
    ?>  
    </tbody>  
</table>
<?php
require_once('footer.php');
?>