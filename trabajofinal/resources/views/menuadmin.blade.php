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
 
        <a class="btn btn-danger" href="{{ route('welcome') }}">Cerrar Sesión</a>
    </nav>
<!-- ... Encabezado y otros elementos ... -->

<div class="container mt-4">
    <h1>Lista de Ventas</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID de Venta</th>
                <th>Producto</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
                <tr>
                    <td>{{ $venta->id }}</td>
                    <td>
                        @if ($venta->producto)
                            {{ $venta->producto->nombre }}
                            <a href="{{ route('menuadmin', ['productId' => $venta->product_id]) }}">Ver Detalles</a>
                        @else
                            Producto no disponible
                        @endif
                    </td>
                    <td>{{ $venta->correo }}</td>
                    <td>{{ $venta->direccion }}</td>
                    <td>{{ $venta->nombre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- ... Otros elementos y scripts ... -->


    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap
