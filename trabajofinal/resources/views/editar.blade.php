<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Editar Producto</h1>

        @if(isset($product))
        <form method="POST" action="{{ route('productos.actualizar', $product->id) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $product->nombre }}" required>
    </div>

    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ $product->descripcion }}" required>
    </div>

    <div class="form-group">
        <label for="imagen">Imagen:</label>
        <input type="text" name="imagen" id="imagen" class="form-control" value="{{ $product->imagen }}" required>
    </div>

    <div class="form-group">
        <label for="precio_original">Precio Original:</label>
        <input type="number" name="precio_original" id="precio_original" class="form-control" value="{{ $product->precio_original }}" required>
    </div>

    <div class="form-group">
        <label for="precio_oferta">Precio de Oferta:</label>
        <input type="number" name="precio_oferta" id="precio_oferta" class="form-control" value="{{ $product->precio_oferta }}" required>
    </div>

    <div class="form-group">
        <label for="existencias">Existencias:</label>
        <input type="number" name="existencias" id="existencias" class="form-control" value="{{ $product->existencias }}" required>
    </div>

    <div class="form-group">
        <label for="categoria">Categoría:</label>
        <input type="text" name="categoria" id="categoria" class="form-control" value="{{ $product->categoria }}" required>
    </div>

    <div class="form-group">
        <label for="proveedor">Proveedor:</label>
        <input type="text" name="proveedor" id="proveedor" class="form-control" value="{{ $product->proveedor }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Producto</button>
</form>


        <form method="POST" action="{{ route('productos.eliminar', $product->id) }}">
            @csrf
            @method('DELETE') <!-- Usamos DELETE para la eliminación -->

            <button type="submit" class="btn btn-danger">Eliminar Producto</button>
        </form>
        @else
        <p>Producto no encontrado.</p>
        @endif
    </div>

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
