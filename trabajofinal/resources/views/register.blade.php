<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        
        form {
            max-width: 300px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px #888;
        }
        
        .form-group {
            margin: 10px 0;
        }
        
        label {
            display: block;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- resources/views/auth/register.blade.php -->

    <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
    </div>

    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" id="telefono" required>
    </div>

    <button type="submit">Registrar</button>
</form>


</body>
</html>