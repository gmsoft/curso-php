<!DOCTYPE html>
<html>
<body>

<h1>Nuevo Cliente</h1>

<hr/>

<label>Nombre:(*)</label>
<input type="text" id="nombre-cliente" maxlength="20"><br/>

<label>Domicilio:</label>
<input type="text" id="domicilio-cliente"><br/>

<label>Email:</label>
<input type="email" id="email-cliente"><br/>

<button id="btn-nuevo-cliente" onclick="validar()" >Agregar Cliente</button>

<script type="text/javascript">

    function validar() {
        var nombre_cliente = document.getElementById('nombre-cliente').value;
        var domicilio_cliente = document.getElementById('domicilio-cliente').value;
        var email_cliente = document.getElementById('email-cliente').value;
        

        if (nombre_cliente == '') {
            alert('Ingrese el nombre del cliente');
            document.getElementById('nombre-cliente').focus();
        }

        if (validateEmail(email_cliente) == false) {
            alert('Correo electronico no válido');
        }
    }

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

</script>

</body>
</html>