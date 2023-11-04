<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .alert-success {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .back-button {
            background-color: #ccc;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Formulario de Compra</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="form-container">
        <form method="POST" action="{{ route('realizar_compra', ['productId' => $product->id]) }}">
            @csrf
            <label for="correo">Correo Electrónico:</label>
            <input type="email" name="correo" id="correo" required>

            <label for="direccion">Dirección de Envío:</label>
            <input type="text" name="direccion" id="direccion" required>

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <!-- Puedes agregar más campos según tus necesidades -->

            <button type="submit">Comprar</button>
        </form>

        <a href="{{ route('productos') }}" class="back-button">Volver a Productos</a>
    </div>
</body>
</html>
