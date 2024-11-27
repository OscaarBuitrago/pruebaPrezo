# Aplicación de Gestión de Escandallos y Ventas

Este proyecto ha sido desarrollado en Laravel (>= 9.0) para cumplir los requisitos descritos en la prueba técnica. El objetivo es gestionar escandallos y ventas de un restaurante. La aplicación cuenta con una pantalla de inicio con 4 botones principales:

1. **Crear Receta**: Permite introducir una nueva receta y gestionar sus escandallos.
2. **Crear Venta**: Permite registrar ventas con detalles específicos.
3. **Estadísticas de Escandallos**: Muestra datos clave como receta con mayor/mayor coste y márgenes de beneficio.
4. **Estadísticas de Ventas**: Proporciona métricas de ventas como el día con mayor/menor volumen.

## Funcionalidades

### Objetivo 1: Gestión de Escandallos
- Crear recetas con su precio de venta.
- Especificar los ingredientes y/o recetas asociadas, junto con su coste.
- Calcular:
  - Receta con mayor y menor coste.
  - Receta con mayor y menor margen de beneficio.

### Objetivo 2: Gestión de Ventas
- Registrar ventas con fecha, número de venta y líneas de venta.
- Calcular:
  - Día con mayor y menor volumen de ventas.

## Requisitos del Sistema
- **PHP**: >= 8.0
- **Laravel**: >= 9.0
- **Base de Datos**: SQLite (configurada por defecto para este proyecto).

## Instalación
1. Clonar este repositorio:
   - git clone <URL_DEL_REPOSITORIO>
   - cd pruebaPrezo

2. Instalar dependencias:
    - composer install

3. Configurar el archivo .env:
    - Copia el archivo de ejemplo:
        - cp .env.example .env
    - Asegúrate de que DB_CONNECTION=sqlite y crea una base de datos vacía:
        - touch database/database.sqlite

4. Generar la clave de la aplicación:
    - php artisan key:generate


## Consideraciones
- No se han incluido dependencias adicionales a Laravel.
- El proyecto utiliza SQLite como base de datos para simplificar la configuración. La base de datos se configura automáticamente en el archivo `.env`.
- Asegúrate de que tienes PHP >= 8.0 y Composer instalados antes de comenzar.
- Se han aplicado las mejores prácticas de Laravel para la organización del código, con controladores, modelos y rutas bien estructurados.



