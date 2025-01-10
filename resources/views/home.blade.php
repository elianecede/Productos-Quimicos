<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Químicos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Productos Químicos de Limpieza Comunes</h1>
        <div class="row">
            @foreach ($chemicals as $chemical)
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <img src="{{ asset('storage/' . $chemical->imagen) }}" class="card-img-top" alt="{{ $chemical->nombre }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $chemical->nombre }}</h5>
                        <p class="card-text">{{ Str::limit($chemical->descripcion, 100) }}</p>
                        <a href="{{ route('chemicals.detalles', $chemical->id) }}" class="btn btn-dark">Ver información completa</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
