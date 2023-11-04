<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en Línea</title>

    <!-- Agrega las hojas de estilo de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Establecer un ancho máximo para el mapa */
        iframe {
            display: block; /* Hacer que el iframe sea un bloque para centrarlo */
            margin: 0 auto; /* Centrar horizontalmente el iframe */
            width: 80%; /* Establecer un ancho del 80% del contenedor */
            height: 600px; /* Ajusta la altura como desees */
            border: 2px solid #000;
            border-radius: 10px;
            box-shadow: 2px 2px 5px #888;
        }
                /* Estilo para el botón de WhatsApp flotante */
                .whatsapp-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            color: #fff;
            padding: 10px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 2px 2px 5px #888;
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9347.481692339754!2d-76.24004837835392!3d-9.92296938661972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a7c3d88647c659%3A0x8622f9003a139b6e!2sXiaomi%20%7C%20Huanuco!5e0!3m2!1ses-419!2spe!4v1698512458227!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     <!-- Botón de WhatsApp flotante -->
     <a class="whatsapp-btn" href="https://api.whatsapp.com/send?phone=921540347" target="_blank">WhatsApp</a>



    </main>
    <!-- Pie de página con información adicional -->
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
