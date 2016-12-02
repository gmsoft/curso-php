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