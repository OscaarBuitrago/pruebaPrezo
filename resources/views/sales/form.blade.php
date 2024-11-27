<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Venta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Crear Venta</h1>
        <form action="{{ route('sales.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="date" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="mb-3">
                <label for="sale_price" class="form-label">Precio de Venta</label>
                <input type="number" step="0.01" class="form-control" id="sale_price" name="sale_price">
            </div>
            <div class="mb-3">
                <label for="recipes" class="form-label">Seleccionar Receta</label>
                <select class="form-control" id="recipe_id" name="recipe_id">
                    @foreach($recipes as $recipe)
                        <option value="{{ $recipe->id }}">{{ $recipe->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar Venta</button>
            <a href="{{ url('/') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
