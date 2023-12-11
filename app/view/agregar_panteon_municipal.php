<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registro en el Panteon Municipal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <style>
    body {
        background-image: url('../../public/img/FotoPanteon10.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }

    .card {
        background-color: rgba(255, 255, 255, 0);
        /* Fondo blanco semi-transparente para la tarjeta */
    }

    /* Resto de tu código CSS */
    </style>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h3 class="text-center">Agregar en el Panteon Municipal</h3>
            </div>
            <div class="card-body">
                <form action="../../app/model/functions_db.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Columna 1 -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="id_panteon_municipal">Id
                                    Propietario:</label>
                                <input type="text" class="form-control" id="id_propietario" name="id_propietario"
                                    required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="id_panteon_municipal">Id
                                    Difunto:</label>
                                <input type="text" class="form-control" id="id_difunto" name="id_difunto" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="tipo_pago">Tipo Pago:</label>
                                <input type="text" class="form-control" id="tipo_pago" name="tipo_pago" required>
                            </div>


                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="observacion">Observaciones:</label>
                                <textarea class="form-control" id="observacion" name="observacion" required></textarea>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="text-center">
                <input type="hidden" name="accion" value="agregar_panteon_municipal">
                <button type="submit" class="btn btn-success">Agregar</button>
                <button class="btn btn-danger" style="text-decoration: none; color: white;">
                    <a href="difuntos.php" style="color: white;">Cancelar</a>
            </div>
            </form>
        </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>