<!DOCTYPE html>
<html>
<head>
    <title>Formulario Completo</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <head>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let params = new URLSearchParams(window.location.search);
                var name = params.get('nombre');
                var lname = params.get('apellido');
                var email = params.get('correo');
                document.getElementById("n").innerHTML = name;
                document.getElementById("a").innerHTML = lname;
                document.getElementById("c").innerHTML = email;
            }, false);
        </script>
</head>
</head>
<body>
    <h1>Gracias por llenar el formulario</h1>
    <div class="text" style="margin-top:3%">
        Bienvenido <span id="n"></span> <span id="a"></span>, con correo <span id="c"></span>
    </div>
    <button type="button" onclick="window.location='{{ route("formulario") }}'", style="margin-top:1%">Regresar</button>
    
</body>
</html>

