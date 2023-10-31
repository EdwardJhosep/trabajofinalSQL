<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Venta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        
        ul {
            list-style: none;
            padding: 0;
        }
        
        ul li {
            display: inline;
            margin-right: 10px;
        }
        
        ul li a {
            text-decoration: none;
        }
        
        h1 {
            text-align: center;
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
    <ul>
        <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
        <li><a href="{{ route('welcome') }}">volver</a></li>
        <li><a href="{{ route('register') }}">Registrarse</a></li>
    </ul>
    <h1>Formulario de Venta</h1>
    
    <form method="POST" action="{{ route('guardar_venta') }}">
        @csrf

        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="text" name="cantidad" id="cantidad" required>
        </div>

        <button type="submit">Guardar Venta</button>
    </form>
</body>
</html>
