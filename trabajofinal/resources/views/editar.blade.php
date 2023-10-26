<!DOCTYPE html>
<html>
<head>
    <title>Menú del Administrador</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Producto</h1>
    @if(isset($product))
    <form method="POST" action="{{ route('productos.actualizar', $product->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $product->nombre }}" required>
        </div>
        <!-- Agrega los campos restantes similares a los del formulario de creación -->
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ $product->descripcion }}" required>
        </div>
        <!-- Agrega los campos restantes similares a los del formulario de creación -->
        <button type="submit" class="btn btn-primary">Actualizar Producto</button>
    </form>
    @else
    <p>Producto no encontrado.</p>
    @endif
</div>
@endsection

</body>
</html>
