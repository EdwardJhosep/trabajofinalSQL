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
        <!-- Contenido principal de tu tienda en línea irá aquí -->
    </main>
    <br>
    <br>
    <br>
    <h1>Iniciar Sesión</h1>
    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif
    <form method="post" action="{{ route('admin.login.submit') }}">
        @csrf
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>

    <!-- Agrega los scripts de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
