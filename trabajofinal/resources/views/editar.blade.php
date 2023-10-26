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
                    <a class="nav-link" href="{{ route('editar') }}">Editar Producto</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <!-- Coloca aquí el contenido específico para el menú del administrador -->
    </div>

    <div class="container">
        <h1>Editar Producto</h1>

        <?php if(isset($product)): ?>
            <form method="POST" action="<?php echo route('productos.actualizar', $product->id); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $product->nombre; ?>" required>
                </div>

                <!-- Agrega los campos restantes similares a los del formulario de creación -->

                <button type="submit" class="btn btn-primary">Actualizar Producto</button>
            </form>

            <form method="POST" action="<?php echo route('productos.eliminar', $product->id); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>

                <button type="submit" class="btn btn-danger">Eliminar Producto</button>
            </form>
        <?php else: ?>
            <p>Producto no encontrado.</p>
        <?php endif; ?>
    </div>

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
