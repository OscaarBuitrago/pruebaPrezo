<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Estadísticas Objetivo 1</h1>

        <div class="card mb-3">
            <div class="card-header">Receta con el coste más elevado</div>
            <div class="card-body">
                <p><strong>Nombre:</strong> {{ $mostExpensiveRecipe['recipe']->name }}</p>
                <p><strong>Coste Total:</strong> {{ $mostExpensiveRecipe['total_cost'] }}</p>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">Receta con el coste más bajo</div>
            <div class="card-body">
                <p><strong>Nombre:</strong> {{ $cheapestRecipe['recipe']->name }}</p>
                <p><strong>Coste Total:</strong> {{ $cheapestRecipe['total_cost'] }}</p>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">Receta con el mayor margen de beneficio</div>
            <div class="card-body">
                <p><strong>Nombre:</strong> {{ $highestMarginRecipe['recipe']->name }}</p>
                <p><strong>Margen de Beneficio:</strong> {{ $highestMarginRecipe['profit_margin'] }}%</p>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">Receta con el menor margen de beneficio</div>
            <div class="card-body">
                <p><strong>Nombre:</strong> {{ $lowestMarginRecipe['recipe']->name }}</p>
                <p><strong>Margen de Beneficio:</strong> {{ $lowestMarginRecipe['profit_margin'] }}%</p>
            </div>
        </div>

        <div class="text-center">
            <a href="{{ route('home') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</body>
</html>
