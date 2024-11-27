<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas de Ventas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Estadísticas de Ventas</h1>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Día con mayor volumen de ventas</h5>
                @if($dayWithMaxSales)
                    <p><strong>Fecha:</strong> {{ $dayWithMaxSales->date }}</p>
                    <p><strong>Volumen total:</strong> {{ $dayWithMaxSales->total_sales }}</p>
                @else
                    <p>No hay datos disponibles.</p>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Día con menor volumen de ventas</h5>
                @if($dayWithMinSales)
                    <p><strong>Fecha:</strong> {{ $dayWithMinSales->date }}</p>
                    <p><strong>Volumen total:</strong> {{ $dayWithMinSales->total_sales }}</p>
                @else
                    <p>No hay datos disponibles.</p>
                @endif
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ url('/') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</body>
</html>
