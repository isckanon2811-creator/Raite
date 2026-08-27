<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Guardado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            background-color: #f8f9fa; 
            font-family: 'Segoe UI', sans-serif;
        }
        .confirmacion-card { 
            text-align: center; 
            padding: 40px; 
            border-radius: 25px; 
            background: white; 
            box-shadow: 0 15px 35px rgba(0,0,0,0.1); 
            max-width: 400px;
        }
        .check-animado { font-size: 70px; color: #0000FF; }
    </style>
</head>
<body>

    <div class="confirmacion-card shadow">
        <div class="check-animado">✅</div>
        <h2 class="fw-bold mt-3">¡Ya quedó!</h2>
        <p class="text-muted mb-4">Tu registro ha sido guardado exitosamente.</p>
        
        <a href="../index.php" class="btn btn-primary w-100 py-3 fw-bold" style="background-color: #0000FF; border: none; border-radius: 15px;">
            COMENZAR A "RAITEAR"
        </a>
    </div>

</body>
</html>