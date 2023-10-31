<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en Línea</title>

    <!-- Agrega las hojas de estilo de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Mi Tienda</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
    <a class="nav-link" href="{{ route('welcome') }}">Inicio</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('productos') }}">Productos</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('ofertas') }}">Ofertas</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('admin') }}">Admin</a>
</li>

                </ul>
            </div>
        </nav>
    </header>
    <main>
}
<main>
    <div class="container">
        <div class="row">
            @foreach ($productos as $producto)
                <div class="col-md-4">
                    <div class="product-item">
                        <div class="discount-badge">
                            Descuento: 
                            {{ round((($producto->precio_original - $producto->precio_oferta) / $producto->precio_original) * 100, 2) }}
                            %
                        </div>
                        <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}" class="product-image">
                        <h3>{{ $producto->nombre }}</h3>
                        <p>{{ $producto->descripcion }}</p>
                        <p><strong>Precio Original:</strong> ${{ $producto->precio_original }}</p>
                        <p><strong>Precio de Oferta:</strong> ${{ $producto->precio_oferta }}</p>
                        <p><strong>Proveedor:</strong> {{ $producto->proveedor }}</p>
                        <a href="{{ route('venta', ['id' => $producto->id]) }}">Comprar</a>


                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

<style>
.product-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
    padding: 15px;
    background-color: #f9f9f9;
    transition: transform 0.2s;
    text-align: center; /* Centro el contenido horizontalmente */
    height: 100%; /* Asegura que el contenedor se expanda verticalmente */
}

.product-item:hover {
    transform: scale(1.05);
}

.product-image {
    max-width: 200px;
    max-height: 200px;
    display: block;
    margin: 0 auto;
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    padding: 10px;
}

.discount-badge {
    background-color: #f44336; /* Color de fondo del descuento */
    color: #fff;
    padding: 5px;
    border-radius: 5px;
    position: absolute;
    top: 10px;
    right: 10px;
}

.product-buy-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.2s;
}

.product-buy-button:hover {
    background-color: #0056b3;
}

</style>

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



    <!-- Agrega los scripts de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
