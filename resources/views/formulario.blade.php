<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form action="{{ route('saludo') }}">
        
        <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
                <br><br>
				        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        <br><br>
        
        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required>
        <br><br>
        
        <button type="submit">Registrar</button>
    </form>
</body>
</html>

