<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Tu Tienda Virtual</title>
</head>
<body>

    <form action="{{ route('productos.store') }}" method="POST">
    @csrf

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" required></textarea>

    <label for="imagen">URL de la imagen:</label>
    <input type="text" name="imagen" required>

    <label for="precio_original">Precio original:</label>
    <input type="number" name="precio_original" required>

    <label for="precio_oferta">Precio en oferta:</label>
    <input type="number" name="precio_oferta" required>

    <button type="submit">Agregar Producto</button>
</form>


    <footer class="bg-dark text-light mt-5 p-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Contacto</h3>
                <p>Si tienes alguna pregunta o necesitas ayuda, no dudes en contactarnos:</p>
                <ul>
                    <li>Correo electrónico: info@tu-tienda.com</li>
                    <li>Teléfono: (123) 456-7890</li>
                    <li>Dirección: Calle Principal, Ciudad</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Enlaces útiles</h3>
                <ul>
                    <li><a href="/terminos">Términos y condiciones</a></li>
                    <li><a href="/privacidad">Política de privacidad</a></li>
                    <li><a href="/devoluciones">Política de devoluciones</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>

</body>
</html>
