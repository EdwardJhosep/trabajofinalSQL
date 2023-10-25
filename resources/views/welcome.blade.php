<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <title>Tu Tienda Virtual</title>
    <style>
        /* Estilos para centrar contenido */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* Estilos para el pie de página */
        footer {
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Tu Tienda Virtual</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/producto1">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/carrito">Carrito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Admin</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <h1 >Bienvenido a mi tienda virtual </h1>
        <!-- ... (código anterior) -->

        <!-- Ofertas y Descuentos -->
        <section class="container mt-4">
            <h2 class="text-center">Ofertas y Descuentos</h2>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://images.falabella.com/v3/assets/bltf4ed0b9a176c126e/blt5c8f97f9d55870f4/65381a3a4af45f8402df6aeb/mc-relojes-3-2-dk-241023-av.jpg?format=webp&quality=70&width=100p" class="card-img-top" alt="Producto 1">
                        <div class="card-body">
                            <h5 class="card-title">Producto 1</h5>
                            <p class="card-text">Descripción del producto 1.</p>
                            <p class="card-text">Precio original: $50</p>
                            <p class="card-text">Precio en oferta: $40</p>
                           
                            <a href="{{ route('productos.index') }}" class="btn btn-primary">Ver productos</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://images.falabella.com/v3/assets/bltf4ed0b9a176c126e/bltd0f0129238ebbc59/65382b8337758828c36496b2/Carros-MC5-2-DK-2410-JL.jpg?format=webp&quality=70&width=100p" class="card-img-top" alt="Producto 1">
                        <div class="card-body">
                            <h5 class="card-title">Producto 1</h5>
                            <p class="card-text">Descripción del producto 1.</p>
                            <p class="card-text">Precio original: $50</p>
                            <p class="card-text">Precio en oferta: $40</p>
                            <a href="{{ route('productos.index') }}" class="btn btn-primary">Ver productos</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://images.falabella.com/v3/assets/bltf4ed0b9a176c126e/bltf629660618f19642/65382b831def43a41db7a7fd/MC-coches-MC5-3-DK-2410-JL.jpg?format=webp&quality=70&width=100p" class="card-img-top" alt="Producto 1">
                        <div class="card-body">
                            <h5 class="card-title">Producto 1</h5>
                            <p class="card-text">Descripción del producto 1.</p>
                            <p class="card-text">Precio original: $50</p>
                            <p class="card-text">Precio en oferta: $40</p>
                            <a href="{{ route('productos.index') }}" class="btn btn-primary">Ver productos</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ... (resto del código) -->
    </main>

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
