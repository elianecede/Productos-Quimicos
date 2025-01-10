<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de {{ $chemical->nombre }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">{{ $chemical->nombre }}</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="{{ asset('storage/' . $chemical->imagen) }}" class="img-fluid mb-4" alt="{{ $chemical->nombre }}">
                <h3>Proceso de Creación</h3>
                <p>{{ $chemical->proceso_creacion }}</p>
                <h3>Historia</h3>
                <p>{{ $chemical->historia }}</p>
                <h3>Usos</h3>
                <p>{{ $chemical->usos }}</p>
                <a href="/" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
</body>
</html>
