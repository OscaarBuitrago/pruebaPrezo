<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">PRUEBA PREZO</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="d-flex justify-content-center">
            <a href="{{ route('recipes.create') }}" class="btn btn-primary mx-2">Crear Receta</a>
            <a href="{{ route('sales.create') }}" class="btn btn-primary mx-2">Crear Venta</a>
            <a href="{{ route('statsRecipes') }}" class="btn btn-primary mx-2">Estadísticas Objetivo 1</a>
            <a href="{{ route('statsSales') }}" class="btn btn-primary mx-2">Estadísticas Objetivo 2</a>
        </div>
    </div>
</body>
</html>
