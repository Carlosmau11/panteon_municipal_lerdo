<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Panteon Jardines</title>
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
                <h3 class="text-center">Panteon Jardines</h3>
            </div>
            <div class="card-body">
                <form action="../../app/model/functions_db.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Columna 1 -->
                        <div class="col-md-4">

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="id_propietario">Id Propietario:</label>
                                <input type="text" class="form-control" id="id_propietario" name="id_propietario"
                                    required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="id_difunto">Id Difunto:</label>
                                <input type="text" class="form-control" id="id_difunto" name="id_difunto" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="tipo_pago">Tipo Pago:</label>
                                <input type="text" class="form-control" id="tipo_pago" name="tipo_pago" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="calle">Calle:</label>
                                <input type="text" class="form-control" id="calle" name="calle" required>
                            </div>
                        </div>

                        <!-- Columna 2 -->
                        <div class="col-md-4">

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="etapa">Etapa:</label>
                                <input type="text" class="form-control" id="etapa" name="etapa" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="letra">Letra:</label>
                                <input type="text" class="form-control" id="letra" name="letra" required>
                            </div>

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="lote">Lote:</label>
                                <input type="text" class="form-control" id="lote" name="lote" required>
                            </div>
                        </div>

                        <!-- Columna 3 -->
                        <div class="col-md-4">

                            <div class="form-group">
                                <label style="color: rgb(231, 223, 223);" for="observacion">Observación:</label>
                                <textarea class="form-control" id="observacion" name="observacion" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <input type="hidden" name="accion" value="agregar_panteon_jardin">
                        <button type="submit" class="btn btn-success">Agregar</button>
                        <button class="btn btn-danger" style="text-decoration: none; color: white;">
                            <a href="PanteonJardin.php" style="color: white;">Cancelar</a>
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