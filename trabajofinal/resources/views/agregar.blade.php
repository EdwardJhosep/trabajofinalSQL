<!DOCTYPE html>
<html>
<head>
    <title>Menú del Administrador</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('menuadmin') }}">Administrador</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menuadmin') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('agregar') }}">Agregar Producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('producto') }}">Editar Producto</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <!-- Coloca aquí el contenido específico para el menú del administrador -->
    </div>
<!-- resources/views/productos/agregar.blade.php -->
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container">
    <h1>Agregar Producto</h1>
    <form method="POST" action="{{ route('productos.guardar') }}">
        @csrf <!-- Agrega el token CSRF -->

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="imagen">URL de la imagen:</label>
            <input type="text" name="imagen" id="imagen" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="precio_original">Precio Original:</label>
            <input type="text" name="precio_original" id="precio_original" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="precio_oferta">Precio en Oferta:</label>
            <input type="text" name="precio_oferta" id="precio_oferta" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="existencias">Existencias:</label>
            <input type="text" name="existencias" id="existencias" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="categoria">Categoría:</label>
            <input type="text" name="categoria" id="categoria" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="proveedor">Proveedor:</label>
            <input type="text" name="proveedor" id="proveedor" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Agregar Producto</button>
    </form>
</div>

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
