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
    <h1>Ofertas</h1>
    @foreach ($productos as $producto)
        @php
            $descuentoPorcentaje = ($producto->precio_original - $producto->precio_oferta) / $producto->precio_original * 100;
        @endphp

        @if ($descuentoPorcentaje > 0)
            <div class="product">
                <div class="discount-badge">
                    Descuento: {{ round($descuentoPorcentaje, 2) }}%
                </div>
                <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
                <p>
                    <strong>Nombre:</strong> {{ $producto->nombre }}<br>
                    <strong>Descripción:</strong> {{ $producto->descripcion }}<br>
                    <strong>Precio Original:</strong> ${{ $producto->precio_original }}<br>
                    <strong>Precio de Oferta:</strong> ${{ $producto->precio_oferta }}<br>
                    <strong>Categoría:</strong> {{ $producto->categoria }}<br>
                    <strong>Proveedor:</strong> {{ $producto->proveedor }}
                </p>
                <a href="#" class="buy-button">Comprar</a>
            </div>
        @endif
    @endforeach
</main>

    <style>
               .product {
            display: inline-block;
            margin: 20px;
            text-align: center;
            position: relative;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .product img {
            max-width: 200px;
            max-height: 200px;
        }

        .discount-badge {
            background-color: red;
            color: white;
            position: absolute;
            top: 0;
            right: 0;
            padding: 5px;
        }

        .buy-button {
            display: block;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            text-decoration: none;
        }

        .buy-button:hover {
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
