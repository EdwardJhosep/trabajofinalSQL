<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en Línea</title>

    <!-- Agrega las hojas de estilo de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    /* Estilo para el contenedor del formulario y el título */
    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh; /* Esto centra verticalmente en la ventana */
    }

    h1 {
        text-align: center;
    }

    /* Estilo para el formulario */
    form {
        width: 300px;
        text-align: center;
    }

    label {
        display: block;
        margin-top: 10px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        margin-top: 10px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

    /* Estilo para los mensajes de error */
    p.error {
        color: red;
        font-size: 14px;
        margin-top: 10px;
    }
    </style>
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
    <div class="form-container">
    <h1>Iniciar Sesión</h1>
    @if (session('error'))
        <p class="error">{{ session('error') }}</p>
    @endif
    <form method="post" action="{{ route('admin.login.submit') }}">
        @csrf
        <label for="email">Correo Electrónico: juanantee@gmail.com</label>
        <input type="email" name="email" required>
        <br>
        <label for="password">Contraseña:123</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</div>


    <!-- Agrega los scripts de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
