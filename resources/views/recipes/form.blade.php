<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Receta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Nueva Receta</h1>
        <form action="{{ route('recipes.store') }}" method="POST" class="card p-4 shadow-sm">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="sale_price" class="form-label">Precio de venta</label>
                <input type="number" step="0.01" id="sale_price" name="sale_price" class="form-control" required>
            </div>

            <h5 class="mt-4">Ingredientes</h5>
            <div id="ingredients-container">
            </div>
            <div class="text-center my-3">
                <button type="button" id="add-ingredient" class="btn btn-primary">Añadir Ingrediente</button>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('home') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const ingredientsContainer = document.getElementById('ingredients-container');
            const addIngredientButton = document.getElementById('add-ingredient');
            let ingredientIndex = 0;

            addIngredientButton.addEventListener('click', () => {
                const ingredientRow = document.createElement('div');
                ingredientRow.className = 'ingredient-row row mb-3';
                ingredientRow.innerHTML = `
                    <div class="col-md-6">
                        <label class="form-label">Nombre del Ingrediente</label>
                        <input type="text" name="ingredients[${ingredientIndex}][name]" class="form-control" placeholder="Ejemplo: Aguacate" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Costo</label>
                        <input type="number" name="ingredients[${ingredientIndex}][cost]" class="form-control" placeholder="Ejemplo: 2.50" step="0.01" required>
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button type="button" class="btn btn-danger remove-ingredient">Eliminar</button>
                    </div>
                `;
                ingredientsContainer.appendChild(ingredientRow);
                ingredientIndex++;
            });

            ingredientsContainer.addEventListener('click', (event) => {
                if (event.target.classList.contains('remove-ingredient')) {
                    const row = event.target.closest('.ingredient-row');
                    row.remove();
                }
            });
        });
    </script>
</body>
</html>
