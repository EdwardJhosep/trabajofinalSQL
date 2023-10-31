<!DOCTYPE html>
<html>
<head>
    <title>Registro de Cliente</title>
</head>
<body>
    <h2>Registro de Cliente</h2>
    <form method="POST" action="{{ route('clientes.store') }}">
        @csrf <!-- Agrega el campo csrf para proteger contra ataques CSRF -->

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </div>

        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="email" name="correo" id="correo">
        </div>

        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" id="contrasena">
        </div>

        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion">
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono">
        </div>
        <button type="submit">Guardar Información</button>
        <li class="nav-item">
    <a class="nav-link" href="{{ route('productos') }}">Productos</a>
</li>
    </form>
</body>
</html>
