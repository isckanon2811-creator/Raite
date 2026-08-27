<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Conductor - Raite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', sans-serif; }
        .card-registro { border-radius: 20px; border: none; box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
        .btn-primario { background-color: #0000FF; border: none; border-radius: 12px; transition: 0.3s; }
        .btn-primario:hover { background-color: #0000CC; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card card-registro p-4">
                    <h3 class="fw-bold text-center mb-4">Registro de Conductor</h3>
                    <form action="../modulos/procesar_registro.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nombre </label>
                            <input type="text" id="nombre" name="nombre" class="form-control p-3" style="border-radius: 10px;" required>

                    <div class="mb-4">
                            <label class="form-label fw-bold">apellidos</label>
                            <input type="text" id="apellidos" name="apellidos" class="form-control p-3" style="border-radius: 10px;" required>
                        </div>

                            <div class="mb-5">
                            <label class="form-label fw-bold">CURP</label>
                            <input type="text" id="curp" name="curp" class="form-control p-3" style="border-radius: 10px;" required>
                        </div>

                            <div class="mb-6">
                            <label class="form-label fw-bold">correo electronico</label>
                            <input type="text" id="correo" name="correo" class="form-control p-3" style="border-radius: 10px;" required>
                         </div>

                            <div class="mb-7">
                            <label class="form-label fw-bold">crea una contraseña</label>
                            <input type="text" id="pass" name="pass" class="form-control p-3" style="border-radius: 10px;" required>
                         </div>

                            <div class="mb-8">
                            <label class="form-label fw-bold">Telefono</label>
                            <input type="text" id="telefono" name="telefono" class="form-control p-3" style="border-radius: 10px;" required>
                         </div>
                        <div class="mb-9">
                            <label class="form-label fw-bold">Número de Unidad (Mototaxi)</label>
                            <input type="text" id="unidad" name="unidad" class="form-control p-3" style="border-radius: 10px;" required>
                                  
                        
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary btn-primario w-100 py-3 fw-bold">FINALIZAR REGISTRO</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>