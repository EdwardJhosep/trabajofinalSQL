<!DOCTYPE html>
<html>
<head>
    <title>Menú del Administrador</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class a href="{{ route('menuadmin') }}">Administrador</a>
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
 
    <a class="btn btn-danger" href="{{ route('welcome') }}">Cerrar Sesión</a>
</nav>
<div class="container mt-4">
    <!-- Coloca aquí el contenido específico para el menú del administrador -->
</div>
<div class="container mt-4">
    <h1>Lista de Ventas</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Total</th>
                    <th>Fecha de Venta</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $venta) <!-- Corregido aquí, utiliza $venta como variable de iteración -->
                <tr>
                    <td>{{ $venta->id }}</td>
                    <td>{{ $venta->cliente->nombre }}</td>
                    <td>{{ $venta->producto->nombre }}</td>
                    <td>{{ $venta->cantidad }}</td>
                    <td>${{ $venta->precio_total }}</td>
                    <td>{{ $venta->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Scripts de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
