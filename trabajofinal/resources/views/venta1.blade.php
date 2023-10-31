<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Encabezado con metadatos y hojas de estilo -->
</head>
<body>
    <header>
        <!-- Barra de navegación -->
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Confirmar Compra</h1>
                    <form method="POST" action="{{ route('confirmarCompra') }}">
                        @csrf
                        <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                        <div class="form-group">
                            <label for="cliente_id">Cliente ID:</label>
                            <input type="text" name="cliente_id" id="cliente_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="cantidad">Cantidad:</label>
                            <input type="number" name="cantidad" id="cantidad" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Confirmar Compra</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- Pie de página -->
    </footer>
</body>
</html>
