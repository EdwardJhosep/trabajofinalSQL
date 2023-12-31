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
    @if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<h1>Lista de Productos</h1>
<div class="table-responsive"> <!-- Agregamos la clase para hacer la tabla responsive -->
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Precio Original</th>
                <th>Precio de Oferta</th>
                <th>Existencias</th>
                <th>Categoría</th>
                <th>Proveedor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->nombre }}</td>
                <td>{{ $product->descripcion }}</td>
                <td><img src="{{ $product->imagen }}" alt="Imagen del producto" width="100"></td>
                <td>${{ $product->precio_original }}</td>
                <td>${{ $product->precio_oferta }}</td>
                <td>{{ $product->existencias }}</td>
                <td>{{ $product->categoria }}</td>
                <td>{{ $product->proveedor }}</td>
                <td>
                    <a href="{{ route('productos.editar', $product->id) }}" class="btn btn-primary">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
