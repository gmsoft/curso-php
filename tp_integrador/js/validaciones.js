function validarDatosCliente() {
    var _cliente_nombre = document.getElementById('cliente_nombre').value;
    var formError = false;

    if (_cliente_nombre == '') {
        //alert('Ingrese el nombre del cliente');
        formError = true;
        document.getElementById('mensaje-error').innerHTML = 'Ingrese el nombre del cliente';
        document.getElementById('cliente_nombre').focus();
    }

    if (formError == false) { //Si no hay errores de validacion en el formulario
        document.getElementById('mensaje-error').innerHTML = '';
        document.getElementById('form-nuevo-cliente').submit();
    }
}

function confirmarBorrado(id) {
    console.info(id);//Muestra en consola el valor de la variable
    var respuesta = confirm("Desea borrar el registro?");//Muestra un ventana de confirmacion de accion
    var request;

    //el usuario seleccion Ok en Eliminar el registro
    if (respuesta == true) {
        
        request = $.ajax({
            url: "eliminar_cliente.php?id=" + id,
            type: "GET"
        });

         request.done(function (response, textStatus, jqXHR){
            // Log a message to the console
            console.log("Cliente eliminado con exito");
            window.location.href = 'http://localhost/curso-php/tp_integrador/listado_clientes.php';
        });

        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown){
            // Log the error to the console
            console.error(
                "Ocurrio un error al eliminar: "+
                textStatus, errorThrown
            );
        });


    }
}
